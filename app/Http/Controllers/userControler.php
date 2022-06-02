<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControler extends Controller
{
    public function userdata(Request $request){
        return response()->json(["res"=>$request->all()]);

    }
}
