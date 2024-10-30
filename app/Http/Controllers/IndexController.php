<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        
        $Room = Room::with('getBedType')->where('Status', 'Available')->take(3)->get();

        return view('Customer.index', [
            'Room' => $Room
        ]);
    }
}
