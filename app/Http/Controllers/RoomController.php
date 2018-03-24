<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Accommodation;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index', ['rooms' => $rooms ]);
    }

    // Create room form 
    public function create(Accommodation $accommodation)
    {
        // $accommodations = Accommodation::all(); 

        return view('rooms.create', compact('accommodation'));
    }

    // Save room - Store 
    public function store(Request $request)
    {
        $room = new Room();
        $room->title = $request->input('title');
        $room->accommodation_id = $request->input('accommodation');
        $room->save();

        return redirect('/accommodations/' . $room->accommodation_id);
    }
}
