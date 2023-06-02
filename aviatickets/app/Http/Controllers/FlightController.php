<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){
        return Flight::all();
    }

    public function show(Flight $flight){
        return $flight;
    }

    public function airplane(Flight $flight){
        return response()->json($flight->airplane, 200);
    }

    public function airCarrier(Flight $flight){
        return response()->json($flight->airCarrier, 200);
    }

    public function fromAirport(Flight $flight){
        return response()->json($flight->fromAirport, 200);
    }

    public function toAirport(Flight $flight){
        return response()->json($flight->toAirport, 200);
    }
}
