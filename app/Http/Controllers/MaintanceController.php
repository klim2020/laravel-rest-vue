<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Services\TelegramService;
use App\Http\Services\TelegramServiceTemplates\TelegramMessage;
use App\Http\Services\TelegramServiceTemplates\TelegramMessageCallBackTemplate;
use Illuminate\Http\Request;

/**
 *
 */
class MaintanceController extends Controller
{
    /**
     * Sends a message to telegram chat
     * @param ContactFormRequest $request
     * @param TelegramService $telegram
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage(ContactFormRequest $request, TelegramService $telegram, TelegramMessageCallBackTemplate $msgtpl){

        //name and phone is correct
        $validatedData = $request->validated();
// Имя:{$validatedData['modal_form_name']}
//
//📞 Телефон:{$validatedData['modal_form_telephone']}
        //dd($request->session()->token());
        $msg = $msgtpl->getMessage([
                    '%header_text%'=>'Внимание прилетела заявка',
                    '%name_text%'=>'Имя',
                    '%name_val%'=>$validatedData['modal_form_name'],
                    '%phone_text%'=>'телефон',
                    '%phone_val%'=>$validatedData['modal_form_telephone']
        ]);
        $telegram->sendMsg($msg);

        return response()->json(array_merge(
            ["status"=>"success"],
            ["data"=>$telegram->getInfo()]
        ));
    }


    public function sendContactData(ContactFormRequest $request, TelegramService $telegram, TelegramMessageCallBackTemplate $msgtpl){

        //name and phone is correct
        $validatedData = $request->validated();
        // Имя:{$validatedData['modal_form_name']}
        //📞Телефон:{$validatedData['modal_form_telephone']}
        //dd($request->session()->token());
        $msg = $msgtpl->getMessage([
            '%header_text%'=>'Внимание прилетела заявка c сайта-портфолио email - '.$validatedData['modal_form_email'].' сообщение - '.$validatedData['modal_form_message'],
            '%name_text%'=>'Имя',
            '%name_val%'=>$validatedData['modal_form_name'],
            '%phone_text%'=>'телефон',
            '%phone_val%'=>$validatedData['modal_form_telephone']
        ]);
        $telegram->sendMsg($msg);

        return response()->json(array_merge(
            ["status"=>"success"],
            ["data"=>$telegram->getInfo()]
        ));
    }


}
