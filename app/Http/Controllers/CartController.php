<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function displayCart(){
        return view('Customer.Cart');
    }
}
