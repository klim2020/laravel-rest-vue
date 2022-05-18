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

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->delete();

        $items = array(
           // "ru"=>$this->items_ru,
            "en"=>$this->items_en,
            //"pl"=>$this->items_pl,
            //"ua"=>$this->items_ua
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
