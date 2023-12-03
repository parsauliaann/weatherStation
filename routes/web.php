<?php

use App\Http\Controllers\AuthController;
use App\Models\Admin;
use App\Models\SensorData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::controller(AuthController::class)->group(function(){
    Route::middleware('guest')->as('login')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store')->name('.store');
    });

    Route::delete('/', 'logout')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(Request $request){
        if($request->isJson()){
            $parameters = ['wind_speed', 'wind_direction', 'temperature', 'humidity', 'presure', 'rainfall', 'solar_radiation', 'par_sensor'];

            if($request->last){
                $sensor = SensorData::where('time', '>', $request->last)->first();
                $data = [];

                foreach($parameters as $parameter){
                    $sensorData = SensorData::where('time', $sensor?->time)->where('parameter', $parameter)->first();
                    $data[] = $sensorData ? $sensorData->value : 0;
                }

                return response()->json([
                    'label' => $sensor?->time,
                    'data' => $data,
                ]);
            }

            $labels = array_reverse(SensorData::select('time')->orderBy('time', 'DESC')->groupBy('time')->take(10)->pluck('time')->toArray());
    
            $data = [];
            foreach($labels as $label){
                foreach($parameters as $parameter){
                    $sensorData = SensorData::where('time', $label)->where('parameter', $parameter)->first();
                    $data[$parameter][] = $sensorData ? $sensorData->value : 0;
                }
            }

            return response()->json([
                'labels' => $labels,
                'data' => $data,
            ]);
        }

        return view('dashboard');
    })->name('dashboard');
    
    Route::middleware('dosen')->group(function(){
        Route::get('/admins', function(){
            $admins = Admin::all();
    
            return view('admins', [
                'admins' => $admins,
            ]);
        })->name('admins');
    
        Route::post('/admins', function(Request $request){
            Admin::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'status' => $request->status,
            ]);
    
            return back();
        })->name('admins.store');
    
        Route::get('/dataanalysis', function(){
            return view('dataanalysis');
        })->name('dataanalysis');

        Route::get('/about', function(){
            return view('about');
        })->name('about');
    });
});