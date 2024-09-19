<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoyaltyController extends Controller
{
    public function displayLoyaltyCard(){
        return view('Customer.LoyaltyCard');
    }
}
