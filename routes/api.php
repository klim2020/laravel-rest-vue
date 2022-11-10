<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\MaintanceController;
use App\Http\Middleware\CheckForHiddenField;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Requests\ContactFormRequest;
use App\Http\Services\TelegramService;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware([
    CheckForHiddenField::class,
])->group(function () {

    Route::post('sendmsg/', [MaintanceController::class, 'sendMessage']);

    Route::post('sendcontactdata/', [MaintanceController::class, 'sendContactData']);

});

Route::get('/getErrors/{lang}', [ErrorController::class,'index']);

Route::get('/token',function () {return response()->json(["xcrf"=>csrf_token()]);});

