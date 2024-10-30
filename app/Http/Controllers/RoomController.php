<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function displayRoom() {
        //return view('Customer.Room'); //Customer/Room.php
        
        $Room = Room::with('getBedType')->where('Status', 'Available')->get();

        return view('Customer.Room', [
            'Room' => $Room
        ]);
    }

}
