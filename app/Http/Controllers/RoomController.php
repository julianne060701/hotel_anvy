<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function displayRoom() {
        return view('Customer.Room'); //Customer/Room.php
    }

}
