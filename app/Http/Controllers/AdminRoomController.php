<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    public function displayAdminRoom() {
        $Room = Room::with('getBedType')->get();

        return view('Admin.Rooms', [
            'Room' => $Room
        ]);
    }

   public function addNewRoom(Request $request) {
    $request->validate([
        'room_number' => 'required',
        'room_type' => 'required', 
        'capacity' => 'required|integer',
        'rate' => 'required',
        'status' => 'required',
        'room_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120' //5mb ni siya
    ]);

    if ($request->hasFile('room_image')) {
        $image = $request->file('room_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $imageName);
        $filePath = $imageName;
    } else {
        return response()->json(['message' => 'Image upload failed.'], 400);
    }

    $RoomNew = Room::create([
        'room_name'=> 'sampleee',
        'unit'=> '1',
        'bed_type_id'=> '1',
        'Pts_earned' => '0',
        'Pts_value' => '0',
        'room_number' => $request->input('room_number'),
        'room_type' => $request->input('room_type'),
        'capacity' => $request->input('capacity'),
        'rate' => $request->input('rate'),
        'status' => $request->input('status'),
        'room_image' => $filePath
    ]);

    return response()->json(['success' => true], 201);
}

public function updateRoom(Request $request)
{
    $request->validate([
        'id' => 'required',
        'room_number' => 'required',
        'room_type' => 'required',
        'capacity' => 'required|integer',
        'rate' => 'required|numeric', 
        'status' => 'required'
    ]);

    $room = Room::find($request->input('id'));

    if ($room) {
        // Handle image upload if provided
        if ($request->hasFile('room_image')) {
            $image = $request->file('room_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
            $room->room_image = $imageName; // Update the image path
        }

        // Update room data
        $room->capacity = $request->input('capacity');
        $room->rate = $request->input('rate');
        $room->status = $request->input('status');
        $room->room_type = $request->input('room_type');
        $room->room_number = $request->input('room_number');
        $room->bed_type = $request->input('bed_type'); // Handle bed type

        $room->save(); // Save changes

        return response()->json(['success' => 'Room updated successfully!'], 200);
    }

    return response()->json(['error' => 'No room found!'], 404);
}

// Archive Room
    public function archiveRoom(Request $request) {
        $request->validate(['id' => 'required|exists:rooms,id']); // Ensure ID exists

        $Room = Room::where('id', $request->input('id'))->first();

        if ($Room) {
            $Room->Status = 'Not Available'; 
            $Room->save(); 

            return response()->json(['success' => 'Room archived successfully!'], 200);
        }

        return response()->json(['error' => 'No Room found!'], 404);
    }
}