<?php

namespace Database\Seeders;

use App\Models\Error;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErrorSeeder extends Seeder
{
    //https://docs.google.com/spreadsheets/d/1Vk_asLDHXnu1hyuwYRKyxAaIE9gSU4yIOGp_wA2MC3Q/edit#gid=0  //KlimPrograms
    private $items_en=[
        "error_email"=>"Please enter a valid email",
        "error_phone"=>"Please enter a valid phone",
        "error_message"=>"Please provide a Message",
        "error_name"=>"Please provide a valid name",
        "success"=>"Thank you, I will contact You soon"

    ];

    private $items_ru=[
        "error_email"=>"Пожалуйста, введите действительный адрес электронной почты",
        "error_phone"=>"Пожалуйста, введите действительный телефон",
        "error_message"=>"Пожалуйста, предоставьте сообщение",
        "error_name"=>"Пожалуйста, предоставьте действительное имя",
        "success"=>"Спасибо, скоро свяжусь с вами"
    ];

    private $items_ua=[
        "error_email"=>"Введіть дійсну електронну пошту",
        "error_phone"=>"Будь ласка, введіть дійсний телефон",
        "error_message"=>"Будь ласка, надайте повідомлення",
        "error_name"=>"Будь ласка, вкажіть дійсне ім’я",
        "success"=>"Дякую, я скоро зв’яжусь з вами"
    ];

    private $items_pl=[
        "error_email"=>"Proszę wpisać prawidłowy email",
        "error_phone"=>"Wprowadź ważny telefon",
        "error_message"=>"Proszę podać wiadomość",
        "error_name"=>"Podaj ważną nazwę",
        "success"=>"Dziękuję, wkrótce się z Tobą skontaktuję"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('errors')->delete();

        $items = array(
            "ru"=>$this->items_ru,
            "en"=>$this->items_en,
            "pl"=>$this->items_pl,
            "ua"=>$this->items_ua
        );

        foreach($items as $lang=>$value){
            foreach ($value as $key=>$item){
                $isarray = is_array($item);
                Error::create([
                    'lang'=>$lang,
                    'valuename'=>$key,
                    'type'=>($isarray) ? 'json' : 'string',
                    'value'=>($isarray) ? json_encode($item, JSON_UNESCAPED_UNICODE) : $item
                ]);
            }
        }
    }

}
