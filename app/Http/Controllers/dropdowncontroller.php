<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use DB;
use App\Models\City;
class dropdowncontroller extends Controller
{
    public function dropdown(Request $request){
       
      $countries = Country::get(['shortname','id'])->all();
     return response()->json([
           'data'=>$countries,
     ]);
    }

    public function getStates(Request $request)
    {
        $data = State::where("country_id", $request->country_id)
        ->get();
        return response()->json([
            'data'=>$data
        ]);

}

public function getcity(Request $request)
{
    $data = City::where("state_id", $request->state_id)
    ->get();
    return response()->json([
        'data'=>$data
    ]);

}


public function searchjoin(Request $request){
   
    $query = $request->First_name;
    $users = DB::table("Addpages")
     ->select('Addpages.id','Addpages.First_name','Addpages.Last_name','Addpages.phone','countries.shortname','states.name','cities.names')
     ->join('countries','Addpages.Country','=','countries.id')
     ->join('states','Addpages.state','=','states.id')
     ->join('cities','Addpages.city','=','cities.id')
      ->where('First_name', 'like', '%' . $query . '%')
      ->orwhere('Last_name', 'like', '%' . $query . '%')
      ->orwhere('phone', 'like', '%' . $query . '%')
      ->orwhere('shortname', 'like', '%' . $query . '%')
      ->orwhere('names', 'like', '%' . $query . '%')
      ->orwhere('states.name', 'like', '%' . $query . '%')
 
     ->get();
      
     if($users){
         return response()->json([
             'status' => '200',
             'data' =>  $users,
             'msg' => 'fetch succesffuly'
         ]);
     }
 }
}

