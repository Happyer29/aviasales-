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
}
