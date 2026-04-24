<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    
    public function login(Request $request)
    {
        $request->session()->put('all',$request->input());
        return "logged in successfully";
    }

    public function logout(){
        session()->pull('user1');
        return view('sessiondisplay');
    }

}
