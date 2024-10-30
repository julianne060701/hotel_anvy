<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewRoomController extends Controller
{
    public function viewRoom(){

        return view('Customer.ViewRoom');
    }
}
