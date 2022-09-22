<?php

use App\Http\Requests\ContactFormRequest;
use App\Http\Services\TelegramService;
use Illuminate\Http\Request;
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
Route::post('sendmsg/', function (ContactFormRequest $request, TelegramService $telegram) {
   //$validatedData = $request->validated();
    $response = Telegram::getMe();
   // Telegram::setAsyncRequest(true)
    //    ->sendMessage(['chat_id' => '-1001736171447', 'text' => 'system test']);
    $validatedData = $request->validated();

    $telegram->sendMsg("ℹ️ Внимание прилетела заявка от клиента: ℹ️

\t🙋‍♂️ Имя:{$validatedData['modal_form_name']}

📞 Телефон:{$validatedData['modal_form_telephone']}
");

     return response()->json(array_merge(
         ["xcrf" => csrf_token()],
         $telegram->getInfo()
     ));
});

