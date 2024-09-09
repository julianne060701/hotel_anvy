<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{



    public function getUserManagementView(){
        $Users = Person::all();

        return view('Admin.UserManagement',[
            'User' => $Users
        ]);
    }
}
