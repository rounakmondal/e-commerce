<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\models\userData;
use App\models\sellerdata;
use App\models\productdata;
use App\models\cart;


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


          

        $admindata=new userData;
        $email=$request->email;
        $password=$request->password;
        $phone=$request->has('phone');
     
   
    
        $user = DB::table('sellerdatas')->where('email', $email)->exists();
        $userdata = DB::table('sellerdatas')->where('email', $email)->first();
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



public function productup(Request $req)
{
    $product = new productdata();
    $product->product_name=$req->product_name;
    $product->category=$req->category;
    $product->email=session()->get('email');
    $product->product_price=$req->product_price;
    $product->product_desc=$req->product_desc;


    $file=$req->file('fileone');
    $extention=$file->getClientOriginalExtension();
    $filename='one'.time().'.'.$extention;
    $file->move('images/', $filename);
    $product->product_oneimg=$filename;
    $su=$product->save();
    if ($su) {
        return back()->with("success","product added sucessfully...");
    } else {
        return redirect('selldashboard')->with("error","product not added ");
    }
}


public function sellerprofile() {
  
  return view('seller/sellerprofile');


}
public function sellerupdate(Request $req){
  dd($req->all());
  $userdata=new sellerdata;
  $userdata->fname=$req->full_name; 
  $userdata->email=$req->emailaddress; 
  $userdata->phone_number=$req->phone; 
  $userdata->location=$req->location; 
  $userdata->password=$req->password; 
  $res=$userdata->save();
  if($res){
    return back()->with('success', 'Success! User updated');
}
else{

    return back()->with('error', 'not updated .... ');
}

}

}





