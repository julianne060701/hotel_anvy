<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class LandingRoomController extends Controller
{
    public function displayLandingRoom(){
        // return view('Landing.LandingRoom');
        
        $Room = Room::with('getBedType')->get();

        return view('Landing.LandingRoom', [
            'Room' => $Room
        ]);
    }
}
