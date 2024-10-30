<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingAvailabilityController extends Controller
{
    public function displayLandingAvailability() {
        return view('Landing.LandingAvailability');
    }
}
