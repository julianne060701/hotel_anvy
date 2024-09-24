<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function AdminMenu(){
        return view('Admin.AdminMenu');
    }
    
}
