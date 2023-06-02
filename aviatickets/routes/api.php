<?php

use App\Http\Controllers\AirCarrierController;
use App\Http\Controllers\AirplaneController;
use App\Http\Controllers\AirplaneModelController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('airplaneModels', [AirplaneModelController::class, 'index']);
Route::get('/airplaneModel/{airplaneModel}', [AirplaneModelController::class, 'show']);
Route::get('/airplaneModel/{airplaneModel}/airplanes', [AirplaneModelController::class, 'airplanes']);

Route::get('/airplane/', [AirplaneController::class, 'index']);
Route::get('/airplane/{airplane}', [AirplaneController::class, 'show']);
Route::get('/airplane/{airplane}/airplaneModel', [AirplaneController::class, 'airplaneModel']);

Route::get('/cities', [CitiesController::class, 'index']);
Route::get('/cities/{city}', [CitiesController::class, 'show']);
Route::get('/cities/{cities}/airports', [CitiesController::class, 'airports']);

Route::get('/airport/', [AirportController::class, 'index']);
Route::get('/airport/{airport}', [AirportController::class, 'show']);
Route::get('/airport/{airport}/city', [AirportController::class, 'city']);

Route::get('/airCarrier/', [AirCarrierController::class, 'index']);
Route::get('/airCarrier/{airCarrier}', [AirCarrierController::class, 'show']);


Route::get('/flight/', [FlightController::class, 'index']);
Route::get('/flight/{flight}', [FlightController::class, 'show']);
Route::get('/flight/{flight}/airplane', [FlightController::class, 'airplane']);
Route::get('/flight/{flight}/airCarrier', [FlightController::class, 'airCarrier']);
Route::get('/flight/{flight}/fromAirport', [FlightController::class, 'fromAirport']);
Route::get('/flight/{flight}/toAirport', [FlightController::class, 'toAirport']);





//tests
Route::get('/test', function (){
    return response()->json(\App\Models\Cities::find(1)->airports);
});
