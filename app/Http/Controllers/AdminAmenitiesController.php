<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use Illuminate\Http\Request;

class AdminAmenitiesController extends Controller
{
    public function displayAdminAmenities() {
        $Amenity = Amenities::where('status', 'Available')->get();

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

    //EDIT AMENITY
    public function updateAmenity(Request $request){
        $request->validate([
            'type',
            'id'
        ]);

        //Find the id on the bed_type table
        $exist = Amenities::where('id', $request->input('id'))->count();

        if($exist > 0){
            //Update the newly updated data

            $Amenity = Amenities::where('id', $request->input('id'))->update([
                'amenity' => $request->input('amenity')
            ]);

            //check if success
            if($Amenity){
                echo 'success';
            }else{
                echo 'Fail to update Amenity. Try Again.';
            }

        }else{
            echo 'No Amenity found!';
        }

    }

    //ARCHIVE AMENITY
    public function archiveAmenity(Request $request){
        $request->validate([
            'id'
        ]);

        //Find the id on the bed_type table
        $exist = Amenities::where('id', $request->input('id'))->count();

        if($exist > 0){
            //Update the newly updated data

            $Amenity = Amenities::where('id', $request->input('id'))->update([
                'status' => 'Not Available'
            ]);

            //check if success
            if($Amenity){
                echo 'success';
            }else{
                echo 'Fail to update Amenity. Try Again.';
            }

        }else{
            echo 'No Amenity found!';
        }

    }
}
