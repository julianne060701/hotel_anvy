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
        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)){

            $user = Auth::user();

            if($user->user_level_id == 3){
                return redirect()->route('index');
            }else{
                return redirect()->route('dashboard');
            }

        };
        return redirect()->back()->withErrors(['username' => 'Login Failed']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('LandingPage');
    }
}
