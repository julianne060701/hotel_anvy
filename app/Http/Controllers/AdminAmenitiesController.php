<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use Illuminate\Http\Request;

class AdminAmenitiesController extends Controller
{
    public function displayAdminAmenities() {
        $Amenity = Amenities::all();

        return view('Admin.Amenities',[
            'Amenity' => $Amenity
        ]);
    }

    //ADD AMENITY
    public function addNewAmenity(Request $request){
        $request->validate([
            'amenity' => 'required'
        ]);

        //Check if existing
        $exist = Amenities::
            where('amenity', $request->input('amenity'))
            ->count();

        if($exist <=0){
            //Add the data
            $Amenity = Amenities::create([
                'amenity' => $request->input('amenity'),
                'status' => 'Available'
            ]);

            if($Amenity){
                echo 'success';
            }else{
                echo 'error';
            }

        }else{
            echo 'duplicate';
        }
    }
}
