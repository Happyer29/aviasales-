<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        return Cities::all();
    }

    public function show(){
        return Cities::find(1);
    }


}
