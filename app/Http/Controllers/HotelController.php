<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    return view('hotels')->with('hotels', $hotels);
    $hotels = Hotel::function_to_pull_data();

}
