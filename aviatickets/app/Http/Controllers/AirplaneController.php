<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    public function index(){
        return Airplane::all();
    }

    public function show(Airplane $airplane){
        return $airplane;
    }

    public function airplaneModel(Airplane $airplane){
        return response()->json($airplane->airplaneModel, 200);
    }
}
