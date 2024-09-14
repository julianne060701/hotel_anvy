<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('Customer.index'); //Customer/index.php
    }

    public function displayRoom() {
        return view('Customer.Room'); //Customer/Room.php
    }

    public function displayAbout() {
        return view('Customer.AboutUs');
    }

    public function displayContact() {
        return view('Customer.ContactUs'); 
    }
}
