<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoyaltyCardController extends Controller
{
    public function AdminLoyalty() {
        return view('Admin.AdminLoyaltyCard'); 
    }
}
