<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    public function displayAdminRoom() {

        //This is how you query with inner join to Bed Table
        $Room = Room::with('getBedType')->get();

        return view('Admin.Rooms', [
            'Room' => $Room
        ]);
    }

    public function addNewRoom(Request $request){
        $request->validate([
            'room_number' => 'required',
            'roomType' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);

        //Check if it is already existing

        $RoomNumberExist = Room::where('room_number', $request->input('room_number'))->count();

        if($RoomNumberExist <=0){
            //Create Room

            $RoomNew = Room::create([
                'room_name' => 'Sample',
                'unit' => '0',
                'capacity' => $request->input('capacity'),
                'bed_type_id' => '1',
                'Rate' => $request->input('price'),
                'Status' => $request->input('status'),
                'Pts_earned' => '0',
                'Pts_value' => '0',
                'room_type' => 'Suite',
                'room_number' => $request->input('room_number')
            ]);

            if($RoomNew){
                echo 'success';
            }else{
                echo 'error';
            }
        }else{
            echo 'duplicate';
        }
    }

    public function updateRoom(Request $request){

        $request->validate([
                'room_number' ,
                'room_type' ,
                'capacity',
                'price_per_night' ,
                'status_1'
        ]);

       //Find the id on the bed_type table
       $exist = Room ::where('id', $request->input('id'))->count();

       if($exist > 0){
           //Update the newly updated data

           $Room = Room::where('id', $request->input('id'))->update([
               'room_name' => 'Sample',
                'unit' => '0',
                'capacity' => $request->input('capacity'),
                'bed_type_id' => '1',
                'Rate' => $request->input('price'),
                'Status' => $request->input('status'),
                'Pts_earned' => '0',
                'Pts_value' => '0',
                'room_type' => 'Suite',
                'room_number' => $request->input('room_number')
           ]);
           //check if success
           if($Room){
               echo 'success';
           }else{
               echo 'error';
           }

       }else{
           echo 'No Room found!';
       }

   }

   //ARCHIVE BED
   public function archiveRoom(Request $request){
    $request->validate([
        'id'
    ]);

    //Find the id on the bed_type table
    $exist = Room::where('id', $request->input('id'))->count();

    if($exist > 0){
        //Update the newly updated data

        $Room = Room::where('id', $request->input('id'))->update([
            'status' => 'Not Available'
        ]);

        //check if success
        if($Room){
            echo 'success';
        }else{
            echo 'Fail to update Bed. Try Again.';
        }

    }else{
        echo 'No Bed found!';
    }

}
       
}


