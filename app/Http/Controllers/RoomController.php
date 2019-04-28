<?php

namespace App\Http\Controllers;

use App\Room;

class RoomController extends Controller
{
    public function index()
    {
        return response()->json(Room::all()->toArray());
    }
}
