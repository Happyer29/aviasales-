<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AirCarrier;
use Illuminate\Http\Request;

class AirCarrierController extends Controller
{
    public function index(){
        return AirCarrier::all();
    }

    public function show(AirCarrier $airCarrier){
        return $airCarrier;
    }

    public function flights(AirCarrier $airCarrier){
        return response()->json($airCarrier->flights, 200);
    }
}
