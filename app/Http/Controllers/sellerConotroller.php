<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\models\userData;
use App\models\sellerdata;


class sellerConotroller extends Controller
{
    public function selllogin(){
        // dd('ranjan');
        return view('seller/sellerlogin');
    }
    public function selldashboard(){
        return view('seller/sellerdashboard');
    }
    public function userlogindata(Request $request){


      // dd($requset->all());

        $admindata=new userData;
        $email=$request->email;
        $password=$request->password;
        $phone=$request->phone;
        if ($phone) {
          $user = DB::table('user_data')->where('ph_number', $phone)->exists();
          $userdata = DB::table('user_data')->where('ph_number', $phone)->get();
          if($user){
            $request->session()->put('email', $email);
          $adminpassword = $userdata->password;
       if( $adminpassword == $password){
        return response()->json(["success" =>"log in sucessfully"]);
       }
       else{
        return response()->json(["error" => "password is incorrect"]);
       }
        
  
      }
      else{
        return response()->json(["phone" => "phone_number not found"]);
      }
  



        }
        else{
        $user = DB::table('user_data')->where('useremail', $email)->exists();
        $userdata = DB::table('user_data')->where('useremail', $email)->get();
        if($user){
          $request->session()->put('email', $email);
        $adminpassword = $userdata->password;
     if( $adminpassword == $password){
      return response()->json(["success" =>"log in sucessfully"]);
     }
     else{
      return response()->json(["error" => "password is incorrect"]);
     }
      

    }
    else{
      return response()->json(["emailnotfound" => "email not found"]);
    }
  }

    }
public function logoutseller(Request $req){

  $req->session()->flush();
  return redirect('selllogin');



}
public function sellreg(){
  return view('seller/sellerRegister');
}
public function selldata(Request $req){
  $userdata=new sellerdata;
  $userdata->fname=$req->full_name; 
  $userdata->email=$req->email; 
  $userdata->phone_number=$req->phone; 
  $userdata->location=$req->location; 
  $userdata->password=$req->password; 
  $res=$userdata->save();
if($res){

  return response()->json(["sus"=>"register done"]);
}
else{
  return response()->json(["rnc"=>"register not done"]);
}
}


}





