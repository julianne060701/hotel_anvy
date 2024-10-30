<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingContactUsController extends Controller
{
    public function displayLandingContact(){
        return view('Landing.LandingContactUs');
    }
}
