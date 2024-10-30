<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingAboutUsController extends Controller
{
    public function displayLandingAbout(){
        return view('Landing.LandingAboutUs');
    }
}
