<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\userinfodata;
use Illuminate\support\Facades\DB;
use App\models\cart;


class userControler extends Controller
{
    public function userdata(Request $request){
    
        $userdata=new userinfodata;
        $userdata->name=$request->name; 
        $userdata->email=$request->email; 
        $userdata->phone_number=$request->phone_number; 
        $userdata->location=$request->location; 
        $userdata->password=$request->password; 
        $res=$userdata->save();
        if($res){
            return back()->with('success', 'Success! User created');
        }
        else{

            return back()->with('error', 'error not registered.... ');
        }


    }
    public function userlogin(Request $req){
        $email=$req->email;
        $password=$req->password;
        $userData = DB::table('userinfodatas')->where('email',$req->email)->first();
        $userD = DB::table('userinfodatas')->where('email',$req->email)->exists();
       if($userD){
         
        if($password==$userData->password){
            session()->put('useremail', $email);
            return back()->with('success', 'Success! User login...');
        }
        else{
            return back()->with("error",'password mismatched...');


        }
        
        }

      
       else{
           return back()->with("error",'email does not exist...');
       }




    }
    public function userlogout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('info','logout sucessfully');

    }

    public function allproduct(){
        return view('user/allproduct');
    }
    public function about(){
        return view('user/about');
    }

    public function cart(){
        return view ('user/cart');
    }
    public function checkout(){
        return view('user/checkout');
    }
    public function contact(){
        return view('user/contact');
    }
    public function profile(){
        return view('user/profile');
    }


    public function userinfodata(Request $request){
        $id=$request->id;
        $userdata=userinfodata::find($id);

        $userdata->name=$request->name; 
        $userdata->email=$request->email; 
        $userdata->phone_number=$request->phone_number; 
        $userdata->location=$request->location; 
        $userdata->password=$request->password; 
        $res=$userdata->save();
        if($res){
            return back()->with('success', 'data updated sucessfully');
        }
        else{

            return back()->with('error', 'error not updated.... ');
        }
        
    }



    public function addcart(Request $req ,$id){

        $cartdata=new cart;
        $cartdata->product_id	=$id;
        $cartdata->email=session()->get('useremail');
        $cartdata->save();
        return back()->with("success","product added to catr..");
  
  
  
  
  
  }
                        public function removecart(Request $request ,$id){
                            $res=cart::find($id)->delete();
                          if($res){

                              return back()->with("success","deleted sucessfully");
                          }

                        }



                        public function product_single(){
                            return view('user/product_single');
                        }

 
}
