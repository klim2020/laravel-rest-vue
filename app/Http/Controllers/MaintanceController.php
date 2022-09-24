<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Services\TelegramService;
use Illuminate\Http\Request;

class MaintanceController extends Controller
{
    public function sendMessage(ContactFormRequest $request, TelegramService $telegram){

        $validatedData = $request->validated();

        //dd($request->session()->token());

        $telegram->sendMsg(
"ℹ️ Внимание прилетела заявка от клиента: ℹ️

🙋‍♂️ Имя:{$validatedData['modal_form_name']}

📞 Телефон:{$validatedData['modal_form_telephone']}
");

        return response()->json(array_merge(
            ["xcrf" => csrf_token()],
            $telegram->getInfo()
        ));
    }

}
