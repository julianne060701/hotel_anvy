<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function AdminBooking(){
        return view('Admin.AdminBooking');
    }
}
