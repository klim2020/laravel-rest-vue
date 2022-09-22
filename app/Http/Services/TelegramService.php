<?php
namespace App\Http\Services;

use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramService
{
    private $serv;
    public function __construct(){
        $this->serv = Telegram::getMe();
    }
    public function getInfo(){
        return [
            'botId' => $this->serv->getId(),
            'firstName' => $this->serv->getFirstName(),
            'username' => $this->serv->getUsername()
        ];
    }
    public function sendMsg($text,$opts=[]){
        $chat_id = config('telegram.bots.mybot.maintance_chat');
        Telegram::setAsyncRequest(true)->sendMessage(array_merge(['chat_id' => $chat_id,'text'=>$text],$opts));
    }

}
