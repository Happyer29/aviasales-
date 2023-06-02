<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AirplaneModel;
use Illuminate\Http\Request;

class AirplaneModelController extends Controller
{
    public function index()
    {
        return AirplaneModel::all();
    }

    public function show(AirplaneModel $airplaneModel){
        return $airplaneModel;
    }

    public function airplanes(AirplaneModel $airplaneModel){
        return response()->json($airplaneModel->airplanes, 200);
    }
}
