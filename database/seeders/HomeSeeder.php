<?php

namespace Database\Seeders;

use App\Models\CvData;
use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{

    private $items_en=[
        "hello_text"=>"Hello Everyone",
        "who_text"=>"I'am Klim",
        "short_desc_text"=>"And this is my programmers blog",
        "portfolio_button_text"=>"Check portfolio",
        "next_text"=>"Go next",

        "about_short_text"=>"They say that if I make my own blog using Laravel + Vue, then it would be much easier to find a job with this stack.
                        For 3 years I was working as a  PHP developer on a small projects(e-commerce mostly) powered by Opencart and Wordpress CMS.
                        And now I get bored with this CMS, so am looking forward for a new opportunities, I need to grow and discover new horizonts.
                        So I started my own blog, using Laravel + Vue stack. So welcome aboard, hope it will be interesting for you :)",
        "about_my_name"=>"My name is Klym.",
        "about_who_i_am"=>"Who am I",
        "services_desc"=>"Short skill brief",
        "services_what_i_can_text"=>"What can I do...",
        "services_what_i_can"=>[
            [
                "title"=>"BACK_END","desc"=>"Web development including different PHP CMS Such as Wordpress, Opencart, Laravel.",
                "img"=>"/img/icon-development-white.svg","img_hover"=>"/img/icon-development-black.svg","img_alt"=>"Back end development"
            ],
            [
                "title"=>"SERVER_DEPLOYMENT","desc"=>"Server deployment including Apache/NGINX hosting, Heroku, Amazon AWS.",
                "img"=>"/img/deploy-white.svg","img_hover"=>"/img/deploy-black.svg","img_alt"=>"Server Deployment"
            ],
            [
                "title"=>"FRONT_END","desc"=>"  Web Development including HTML/CSS/Javascript Stack, VueJS, Angular, AlpineJS",
                "img"=>"/img/icon-graphics-white.svg","img_hover"=>"/img/icon-graphics-black.svg","img_alt"=>"Front End Development"
            ],
        ],
        "my_works_title"=>"Check out my Portfolio",
        "my_works_short_desc"=>"Here's what I have done with the past",
        "my_works"=>[
            ["href"=>"bulbul.ua","img"=>"/img/bulbul.png","img_alt"=>"small e-commerce website"],
            ["href"=>"airboats.ru","img"=>"/img/airboats.png","img_alt"=>"another small e-commerce website"],
        ],
        "cf_title"=>"Here's a contact form",
        "cf_desc"=>"<h4
                        class=\"pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl\"
                    >
                        Have Any Questions?
                    </h4>
                    <div class=\"mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6\">
                        <p class=\"font-body text-grey-10\">
                            Please leave me a message and I will contact you ASAP:)
                        </p>
                    </div>",
        "cf_input_name"=>"Name",
        "cf_input_email"=>"E-mail",
        "cf_input_phone"=>"Phone",
        "cf_input_msg"=>"Message",
        "cf_input_text_send"=>"Message",
    ];

    private $items_ru=[
        "hello_text"=>"Всем привет",
        "who_text"=>"Меня Зовут Клим",
        "short_desc_text"=>"И это мой небольшой блог",
        "portfolio_button_text"=>"Портфолио",
        "next_text"=>"Дальше",

        "about_short_text"=>"Здравствуйте, я работаю курьером, а по вечерам пишу свой блог и  это не дефолтный текст для сайта Wordpress :).
                        Потому что я три  года  работаю с CMS Opencart/Wordpress и хочу попробовать что то новенькое.
                        Поэтому, чтобы расширить свои навыки программирования я решил написать небольшой блог на связке Laravel+Vue.
                        Поэтому добро пожаловать на мою страницу :)",
        "about_my_name"=>"Меня зовут Клим.",
        "about_who_i_am"=>"О себе",
        "services_desc"=>"Мои навыки",
        "services_what_i_can_text"=>"Что я умею",
        "services_what_i_can"=>[
            [
                "title"=>"BACK_END","desc"=>"Web разработка сайтов на разных CMS, таких как Wordpress, Opencart, Laravel, Symfony.",
                "img"=>"/img/icon-development-white.svg","img_hover"=>"/img/icon-development-black.svg","img_alt"=>"Back end development"
            ],
            [
                "title"=>"SERVER_DEPLOYMENT","desc"=>"Услуга устновки на различные хостинги: Apache/NGINX, Heroku, Amazon AWS.",
                "img"=>"/img/deploy-white.svg","img_hover"=>"/img/deploy-black.svg","img_alt"=>"Server Deployment"
            ],
            [
                "title"=>"FRONT_END","desc"=>"Web разработка графических интерфейсов на стеке HTML/CSS/Javascript, VueJS, Angular, AlpineJS",
                "img"=>"/img/icon-graphics-white.svg","img_hover"=>"/img/icon-graphics-black.svg","img_alt"=>"Front End Development"
            ],
        ],
        "my_works_title"=>"Мои работы",
        "my_works_short_desc"=>"Ниже представлены мои работы",
        "my_works"=>[
            ["href"=>"bulbul.ua","img"=>"/img/bulbul.png","img_alt"=>"небольшой интрнет магазин opencart"],
            ["href"=>"airboats.ru","img"=>"/img/airboats.png","img_alt"=>"еще один небольшой интрнет магазин opencart"],
        ],
        "cf_title"=>"Форма для связи",
        "cf_desc"=>"<h4
                        class=\"pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl\"
                    >
                        У вас возникли вопросы?
                    </h4>
                    <div class=\"mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6\">
                        <p class=\"font-body text-grey-10\">
                            Пожалуйста оставьте их сдесь и я свяжусь с вами в скором времени.
                        </p>
                    </div>",
        "cf_input_name"=>"Имя",
        "cf_input_email"=>"Почта",
        "cf_input_phone"=>"Телефон",
        "cf_input_msg"=>"Сообщение",
        "cf_input_text_send"=>"Отправить",
    ];

    private $items_ua=[
        "hello_text"=>"Вiтаю",
        "who_text"=>"Мене звати Клим",
        "short_desc_text"=>"И це мiй невиличкий блог",
        "portfolio_button_text"=>"Портфолiо",
        "next_text"=>"Далi",

        "about_short_text"=>"Я працюю PHP розробником вже 3 роки, В основному с CMS на PHP такими як  Opencart, Wordpress, Joomla.
                        А тому я вирiшив спробувати шось новеньке, наприклад написати блог  на Laravel, це дуже прогресивний фреймворк, до того ж вiн дуже добре интегруеться з VueJS.
                        Для програмiста дуже важливо не стояти на одному мiсцi i завжди розширювати свої горизонти.
                        А тому хочу привiтати вас у себе на сторінці  :)",
        "about_my_name"=>"Мене звати Клим.",
        "about_who_i_am"=>"О собі",
        "services_desc"=>"Що я вмiю",
        "services_what_i_can_text"=>"",
        "services_what_i_can"=>[
            [
                "title"=>"BACK_END","desc"=>"Web розробка сайтiв для ризних CMS, таких как Wordpress, Opencart, Laravel, Symfony. Створення різноманітних модулів",
                "img"=>"/img/icon-development-white.svg","img_hover"=>"/img/icon-development-black.svg","img_alt"=>"Back end development"
            ],
            [
                "title"=>"SERVER_DEPLOYMENT","desc"=>"Встановлення сайтів  на різні хостинги: Apache/NGINX, Heroku, Amazon AWS.",
                "img"=>"/img/deploy-white.svg","img_hover"=>"/img/deploy-black.svg","img_alt"=>"Server Deployment"
            ],
            [
                "title"=>"FRONT_END","desc"=>"Web разработка різноманітних графiчних iнтерфейсiв на стеке HTML/CSS/Javascript, VueJS, Angular, AlpineJS",
                "img"=>"/img/icon-graphics-white.svg","img_hover"=>"/img/icon-graphics-black.svg","img_alt"=>"Front End Development"
            ],
        ],
        "my_works_title"=>"Портфолiо",
        "my_works_short_desc"=>"Нижче приведені мої роботи",
        "my_works"=>[
            ["href"=>"bulbul.ua","img"=>"/img/bulbul.png","img_alt"=>"невеличкий інтернет  магазин на opencart"],
            ["href"=>"airboats.ru","img"=>"/img/airboats.png","img_alt"=>"еще один небольшой интрнет магазин opencart"],
        ],
        "cf_title"=>"Форма для зв'язку",
        "cf_desc"=>"<h4
                        class=\"pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl\"
                    >
                        Якшо э питання
                    </h4>
                    <div class=\"mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6\">
                        <p class=\"font-body text-grey-10\">
                            Будь ласка залиште їх тут, і я обов'язково зв'яжусь з вами
                        </p>
                    </div>",
        "cf_input_name"=>"Им'я",
        "cf_input_email"=>"Почта",
        "cf_input_phone"=>"Телефон",
        "cf_input_msg"=>"повідомлення",
        "cf_input_text_send"=>"Вiдправити",
    ];

    private $items_pl=[
        "hello_text"=>"Witam",
        "who_text"=>"Nazywam się Klim",
        "short_desc_text"=>"Witam na moim blogu",
        "portfolio_button_text"=>"Portfolio",
        "next_text"=>"Dalej",

        "about_short_text"=>"Od 3 lat pracuję jako programista PHP, Pracuję głównie z CMS w języku PHP takim jak Opencart, Wordpress, Joomla.
                        Teraz chcę poszerzyć swoje horyzonty, i dlatego wybierz ścieżkę dalszego rozwoju. Mój wzrok padł na laravel. To jest bardzo dobry framework napisany w jezyku php.
                        Dlatego postanowiłem pisać bloga za pomocą laravel+vuejs.
                        Więc witaj na mojej stronie internetowej",
        "about_my_name"=>"Nazywam się Klim.",
        "about_who_i_am"=>"O sobie",
        "services_desc"=>"Moje umiejętności",
        "services_what_i_can_text"=>"",
        "services_what_i_can"=>[
            [
                "title"=>"BACK_END","desc"=>"Tworzenie stron internetowych na różnych systemach CMS: Wordpress, Opencart, Laravel, Symfony.",
                "img"=>"/img/icon-development-white.svg","img_hover"=>"/img/icon-development-black.svg","img_alt"=>"Back end development"
            ],
            [
                "title"=>"SERVER_DEPLOYMENT","desc"=>"instalacja CMS system na różni hostingi:  Apache/NGINX, Heroku, Amazon AWS.",
                "img"=>"/img/deploy-white.svg","img_hover"=>"/img/deploy-black.svg","img_alt"=>"Server Deployment"
            ],
            [
                "title"=>"FRONT_END","desc"=>"Tworzenie graficznych interfejsów przez HTML/CSS/Javascript, VueJS, Angular, AlpineJS",
                "img"=>"/img/icon-graphics-white.svg","img_hover"=>"/img/icon-graphics-black.svg","img_alt"=>"Front End Development"
            ],
        ],
        "my_works_title"=>"Portfolio",
        "my_works_short_desc"=>"Poniżej sa moje prace",
        "my_works"=>[
            ["href"=>"bulbul.ua","img"=>"/img/bulbul.png","img_alt"=>"mały sklep internetowy stworzony przy pomocy cms opencart"],
            ["href"=>"airboats.ru","img"=>"/img/airboats.png","img_alt"=>"mały sklep internetowy stworzony przy pomocy cms opencart"],
        ],
        "cf_title"=>"Formularz  dla komunikacji",
        "cf_desc"=>"<h4
                        class=\"pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl\"
                    >
                       Czy masz jakieś pytania?
                    </h4>
                    <div class=\"mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6\">
                        <p class=\"font-body text-grey-10\">
                            Zostaw je tutaj, a wkrótce się z Tobą skontaktuję.
                        </p>
                    </div>",
        "cf_input_name"=>"Imie",
        "cf_input_email"=>"Poczta",
        "cf_input_phone"=>"Telefon",
        "cf_input_msg"=>"Wiadomość",
        "cf_input_text_send"=>"Wysłać",
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->delete();

        $items = array(
            "ru"=>$this->items_ru,
            "en"=>$this->items_en,
            "pl"=>$this->items_pl,
            "ua"=>$this->items_ua
        );
        foreach($items as $lang=>$value){
            foreach ($value as $key=>$item){
                $isarray = is_array($item);
                Home::create([
                    'lang'=>$lang,
                    'valuename'=>$key,
                    'type'=>($isarray) ? 'json' : 'string',
                    'value'=>($isarray) ? json_encode($item, JSON_UNESCAPED_UNICODE) : $item
                ]);
            }
        }
    }
}
