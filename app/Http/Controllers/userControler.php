<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\userinfodata;
use Illuminate\support\Facades\DB;


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
}
