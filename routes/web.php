<?php

use App\Http\Controllers\CvDataController;
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

Route::apiResource('cv/{lang?}', CvDataController::class );


