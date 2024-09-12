<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSampleLoginView(){
        return view('SampleLogin');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)){
            return redirect()->route('default');
        };
        return redirect()->back()->withErrors(['username' => 'Login Failed']);
    }
}
