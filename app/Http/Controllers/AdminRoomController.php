<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    public function displayAdminRoom() {
        return view('Admin.Rooms'); 
    }
}
