<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addpage;
use App\Models\User;
use App\Models\appointment;
use App\Models\contact;
use App\Models\FileUpload;
use DB;
use Validator;

class Addpagecontroller extends Controller
{
    public function Addpage(Request $request){
   
        // $validator =Validator::make($request->all(),[
            
        //     'First_name'=>'required',
        //     'Last_name'=>'required',
        //     'phone'=>'required',
        //     'City'=>'required',
        //     'State'=>'required',
        //     'File'=>'required',
        //     'Country'=>'required'
        // ]);
          
        // if($validator->fails()){
        //     return response()->json($validator->errors()->toJson(),400);
             
        // }
        $user = new Addpage;
        $user->First_name=$request->input('First_name');
        
        $user->Last_name=$request->input('Last_name');
      
        $user->phone=$request->input('phone');
        $user->City=$request->input('City');
        $user->State=$request->input('State');
        $user->Country=$request->input('Country');
           $user->save();
        if(!$user){
            return response()->json([
                'status' => '200',
                'data' =>  $user,
                'success'=>'succesffuly',
                'msg' => 'Add succesffuly'
            ]);
        }
    }

    public function fetch(Request $request) {
        $users = DB::select('select * from Addpages');
        if($users){
            return response()->json([
                'status' => '200',
                
                'data' =>  $users,
                'msg' => 'fetch succesffuly'
            ]);
        }
     }
     


     public function index() {
        $products = Addpage::all()->toArray();
        return array_reverse($products);
    }

    public function delete($id) 
    {
       
      $user = DB::delete('DELETE FROM Addpages WHERE id = ?', [$id]);
       return response()->json([
            'msg'=>"Data delete successfull",
            'data'=>$user
       ]);
    }   
           


    public function update(Request $request,$id)
    {
        $product=Addpage::find($id);
        $product->First_name = $request->First_name;
        $product->Last_name = $request->Last_name;
        $product->phone = $request->phone;
        $product->City = $request->City;
        $product->State = $request->State;
        $product->Country = $request->Country;
        $product->save();
        return $product;

    }
     public function edit($id){
    $users = Addpage::where('id', $id)->first();
        if($users){
            return response()->json([
                'status' => '200',
                'data' =>  $users,
                'msg' => 'fetch succesffuly'
            ]);
        }
}








public function upload(Request $request){
   
   

    $request->validate([
       'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
    ]);

    $fileUpload = new FileUpload;

    if($request->hasfile('file'))
    {
        $file = $request->file('file');
     
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        
        $file->move('uploads/products/', $filename);
         
        $fileUpload->file = $filename;
        $fileUpload->save();
        if(!$fileUpload){
            return response()->json([
                'status' => '500',
               'error'=>'upload file succesfull',
               'success'=>'upload file succesfull',
                'msg' => 'fetch succesffuly'
            ]);
        }else {
            return response()->json([
                'status' => '200',
                'data' =>  $fileUpload,
               'success'=>'upload file succesfull',
                'msg' => 'fetch succesffuly'
            ]);
            
        }
       
    }
}

public function jointable(Request $request){
   $users = DB::table('Addpages')
    ->select('Addpages.id','Addpages.First_name','Addpages.Last_name','Addpages.phone','countries.shortname','states.name','cities.names')
    ->join('countries','Addpages.Country','=','countries.id')
    ->join('states','Addpages.state','=','states.id')
    ->join('cities','Addpages.city','=','cities.id')
    
    ->get();
     
    if($users){
        return response()->json([
            'status' => '200',
            'data' =>  $users,
            'msg' => 'fetch succesffuly'
        ]);
    }
}


public function paginate()
{
        $users = Addpage::paginate(5);
    	return response()->json($users);
    }
   





    public function contact(Request $request){
      
       $user = new contact;

       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->phone= $request->input("phone");
       $user->message= $request->input("message");
       $user->save();
       if(!$user){
         return response()->back();
       } else{
        return response()->json([
            'status'=>200,
            'msg'=>'succesfull create new data',
            'data'=>$user
        ]);
       }  
    }
    
    
  

    public function uploadfetch(Request $request) {
        $users = DB::select('select * from Addpages');
        if($users){
            return response()->json([
                'status' => '200',
                
                'data' =>  $users,
                'msg' => 'fetch succesffuly'
            ]);
        }
     }
     
     public function passwordupdate(Request $request,$id)
     {
      
         $product=User::find($id);
         
        
         $product->password = $request->password;

         $product->save();
        
         return $product;
 
     }

     public function imagefatch(Request $request){
   
        $users = DB::select('select * from file_uploads');
        if($users){
            return response()->json([
                'status' => '200',
                
                'data' =>  $users,
                'msg' => 'fetch succesffuly'
            ]);
        }
     }



     public function appointment(Request $request){
       
           $user =new appointment;
           $user->First_name=$request->First_name;
           $user->Last_name=$request->Last_name;
           $user->email=$request->email;
           $user->doctor=$request->doctor;
           $user->service=$request->service;
           $user->appointment_date=$request->appointment_date;
           $user->payment_method=$request->payment_method;
           $user->time=$request->time;
            $user->save();
              if($user){
                return response()->json([
                    'msg'=>"successfull",
                    'data'=>$user,
                    'status'=>200

                ]);
              }
     }
    
       
}



    