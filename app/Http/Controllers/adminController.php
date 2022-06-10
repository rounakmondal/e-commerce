<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\admindata;
use App\models\productdata;
// use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function admindashboard(){
        if (session()->has('email')) {
            return view('admin/admin');
        }else{
            return redirect()->back();
        }
    }
    public function adminlogin(){
       if( session()->has('email')) {
         return view('admin/admin');

       }
        return view('admin/adminlogin');
    }




    public function adminlogindata(Request $request){

       
    
        $admindata=new admindata;
        $email=$request->email;
        $password=$request->password;
        $user = DB::table('admindatas')->where('email', $email)->exists();
        $userdata = DB::table('admindatas')->where('email', $email)->first();
        
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
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('adminlogin');
    }

    public function adminproduct(){
        return view('admin/adminproduct');
    }
public function productapproved(Request $request ,$id){
 
    
    $port=DB::table('productdatas')->where('id', $id)->update(array('approval'=>1));
if($port){
    
    return back()->with("success","product approved sucessfully...");
}
else{
    return back()->with("error","product already approved ...");
}

}

public function productdel(Request $request ,$id){
 
    
    $port=DB::table('productdatas')->where('id', $id)->update(array('approval'=>0));
if($port){

    return back()->with("info","product removed sucessfully...");
}
else{
    return back()->with("error","not done yet...");
}

}
 
public function sellers(){
    return view('admin/sellers');
}




public function customers(){
    return view('admin/customers');
}

}
