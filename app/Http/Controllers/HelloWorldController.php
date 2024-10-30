<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function HelloWorld(){

        //Select * from Name
        //$Names = Name::all();

        //SELECT * FROM Name INNER JOIN ROLE ON ROLE.id = NAME.id
        //$Names = Name::with('getRole')->get();

        //SELECT * FROM Name INNER JOIN ROLE ON ROLE.id = NAME.id WHERE ROLE.Role LIKE '%Admin%'
        $Names = Name::with('getRole')->whereHas('getRole', function($query) {
                    $query->where('role', 'Cute');
                })->get();


        return view('HelloWorld', [
            'Name' => $Names
        ]);
    }
}
