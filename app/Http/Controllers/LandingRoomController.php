<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingRoomController extends Controller
{
    public function displayLandingRoom(){
        return view('Landing.LandingRoom');
    }
}
