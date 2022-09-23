<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\CvDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintanceController;
use App\Http\Controllers\SimpleDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vue.index');
});
Route::apiResource('simpldata', SimpleDataController::class);

Route::get('getcontacts/{lang?}', [CvDataController::class, 'contacts']);


Route::get('token/',function(){ return response()->json(["xcrf"=>csrf_token()]);});

Route::get('cv/{lang?}', [CvDataController::class, 'index'] );


Route::post('addcontacts/',[ContactRequestController::class,'index']);

Route::get('getcontactdata/',[ContactRequestController::class,'show']);

Route::apiResource('home/{lang?}', HomeController::class);


Route::post('sendmsg/', [MaintanceController::class, 'sendMessage']);



