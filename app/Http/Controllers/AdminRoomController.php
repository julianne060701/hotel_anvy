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


}
