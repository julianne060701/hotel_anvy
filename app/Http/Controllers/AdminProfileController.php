<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function displayAdminProfile(){
        return view('Admin.AdminProfile');
    }
}
