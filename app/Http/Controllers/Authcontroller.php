<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Addpage;
use JWTAuth;
use DB;
class Authcontroller extends Controller
{
    public function create(Request $request){
        $user = new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= hash::make($request->password);
        $user->save();
        return $user;
    }



    public function Login(Request $request)  
    {  
        $token = JWTAuth::getToken();  
        $apy = JWTAuth::getPayload($token);
          
       if($apy){      
        $validator = validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
       
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        if(!$token=auth()->attempt($validator->validated())){
            return response()->json(['error'=>'Unauthorized'],401);
        } 
            return $this->createNewToken($token);
            } 
    }
    public function createNewToken($token){
        
             return response()->json([
               
             'access_token'=>$token,
            'token_type'=>'bearer',
            'expires_in'=>auth()->factory()->getTTL()*60*24*7,
            'user'=>auth()->user()
    
    ]);
    }
    

    public function register(Request $request){
        
        $validator =Validator::make($request->all(),[
            
            'name'=>'required|string',
            'email'=>'required|unique:users',
            'password'=>'required|confirm_password',
         
        ]);
         
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
    
        }
       
       $user = User::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>hash::make($request->password),
           
       ]);
       
       $token = JWTAuth::fromUser($user);
          if($user){
          $user = Auth::user();
          return response()->json([
                  'status' => 'success',
                  'data' => $user,
                  'authorisation' => [
                      'token' => $token,
                      'type' => 'bearer',
                  ]
              ]);
            }
       return back()->with('success','Item created successfully!');  
    //    if($user){
    //     return response()->json([
    //         'status' => '200',
    //         'data' =>  $user,
    //           'name'=>$user->name,
    //         'success'=>'succesffuly',
    //         'msg' => 'Add succesffuly'
    //     ]);
    // }else {
    //     $response = ["message" =>'User does not exist'];
    //     return response($response, 422);
    // }
    //    $token = JWTAuth::fromUser($user);   
    //        dd($token);
    //    return back()->with('success','Item created successfully!');  
    //    return response()->json(compact('user','token'),201);
       
    //     return response()->json(['message'=>'User user_comapnysuccessfully registerd','user'=>$user],201);
       
    }








    public function path (Request $request) {
       
        $validator = Validator::make($request->all(), [
                
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:3',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()], 422);
        }
      
        $user = User::where('email', ($request->email))->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response()->json([
                    'msg'=>'succesfull',
                    'data'=>$user,
                    'name'=>$user->name
                ]);
            } else {
                      $response = ["message" => "Password does not exist"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'Email does not exist'];
            return response($response, 422);
        }
    }

public function logout(Request $request){
          
      
        $accessToken = auth()->user()->token();
        dd("hii");
        $refreshToken = DB::table('oauth_refresh_tokens')
        ->where('access_token_id', $accessToken->id)
        ->update([
            'revoked' => true
        ]);

        $accessToken->revoke();

        return response()->json(['status' => 200]);

  }

  public function resetPassword(Request $request)
    {
        
        $credentials = request()->validate([
            'email' => 'required|email',
            // 'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);
    
        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return ['success' => false];
        }

        return ['success' => true];
    }



public function updatepassword(Request $request ,$id){
             
  
   
//    $product=User::find($id);
   
   if(!hash::check($request->currect_password,user()->password))
   {
   return back()->with("Error","Currect password not match");

}
User::whereId(auth()->user()->id)->update([
    'password' => Hash::make($request->New_password)
]);

return back()->with("status", "Password changed successfully!");
}



public function search(Request $request )
{ 
    $query = $request->First_name;
    $products = Addpage::where('First_name', 'like', '%' . $query . '%')
        ->orWhere('Last_name', 'like', '%' . $query . '%')->orWhere('phone', 'like', '%' . $query . '%')->orWhere('City', 'like', '%' . $query . '%')     
        ->get();

   

    return response()->json([
        'data'=> $products,
    ]);
     
}


public function auth(Request $request){
    
    $user = User::query()->where('email', $request->get('email'))->first();
           
    if (!$user || !Hash::check($request->post('password'), $user->password)) {
       
        return response()->json(['message'=>'jkds'], 400);
    }
     
    $token = $user->createToken('api_token')->plainTextToken;
   
    $user->api_token = $token;
    
    $user->save();

    return response()->json([
        'message'=>$user->api_token,
        'data'=>$user                    
], 200 );
}



public function userdata(Request $request){
   
    $user = DB::select('select * from users');
    if($user){
        return response()->json([
               'data'=>$user,
        ]);
    }
}
}














