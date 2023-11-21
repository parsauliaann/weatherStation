<?php

use App\Models\SensorData;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sensor-datas', function(Request $request){
    $sensorDatas = SensorData::select(['value', 'time'])
        ->where('parameter', $request->parameter)
        ->whereDate('time', Carbon::now())
        ->get();

    $sensorDatas = $sensorDatas->map(function($sensor){
        return [$sensor->time, $sensor->value];
    });

    return response()->json(['data' => $sensorDatas]);
});