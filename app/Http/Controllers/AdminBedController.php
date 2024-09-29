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

    //ADD BED
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

    //EDIT BED
    public function updateBed(Request $request){
        $request->validate([
            'type',
            'id'
        ]);

        //Find the id on the bed_type table
        $exist = Bed_Type::where('id', $request->input('id'))->count();

        if($exist > 0){
            //Update the newly updated data

            $Bed = Bed_Type::where('id', $request->input('id'))->update([
                'type' => $request->input('type')
            ]);

            //check if success
            if($Bed){
                echo 'success';
            }else{
                echo 'Fail to update Bed. Try Again.';
            }

        }else{
            echo 'No Bed found!';
        }

    }
}
