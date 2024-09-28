<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    
    public function displayAbout() {
        return view('Customer.AboutUs');
    }
}
