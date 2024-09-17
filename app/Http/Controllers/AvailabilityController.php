<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function displayAvailability() {
        return view('Customer.Availability');
    }
}
