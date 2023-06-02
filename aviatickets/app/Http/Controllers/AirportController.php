<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(){
        Airport::all();
    }

    public function city(Airport $airport){
        return response()->json($airport->city, 200);
    }
}
