<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function Landingindex(){
    return view('Landing.LandingPage');
}
}
