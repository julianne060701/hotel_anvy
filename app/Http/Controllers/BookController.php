<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Book() {
        return view('Customer.Book');
    }
}