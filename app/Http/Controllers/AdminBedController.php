<?php

namespace App\Http\Controllers;

use App\Models\Bed_Type;
use Illuminate\Http\Request;

class AdminBedController extends Controller
{

    public function displayAdminBed() {
        $Bed = Bed_Type::all();

        return view('Admin.Beds',[
            'Bed' => $Bed
        ]);
    }

    public function addNewBed(Request $request){
        $request->validate([
            'type' => 'required'
        ]);

        //Check if existing
        $exist = Bed_Type::
            where('type', $request->input('type'))
            ->count();

        if($exist <=0){
            //Add the data
            $BedNew = Bed_Type::create([
                'type' => $request->input('type')
            ]);

            if($BedNew){
                echo 'success';
            }else{
                echo 'error';
            }

        }else{
            echo 'error';
        }
    }
}
