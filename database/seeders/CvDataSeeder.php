<?php

namespace Database\Seeders;

use App\Models\CvData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvDataSeeder extends Seeder
{

    private $items_en=[
            "contacts_text"=>"Contacts",
            "contacts"=>[
                ["name"=>"Telephone","link"=>"tel:+380977813910","text"=>"<i class=\"fa fa-phone\"></i>"],
                ["name"=>"Mail","link"=>"mailto:klimworkss@gmail.com","text"=>"<i class=\"fa fa-envelope\"> </i>"],
                ["name"=>"Telegram","link"=>"https://t.me/KlimSmithh","text"=>"<i class=\"fa fa-telegram\"></i> "],
                ["name"=>"Viber","link"=>"viber://chat/?number=%2B380977813910","text"=>"<i class=\"fa fa-viber\"></i> "],
                ["name"=>"LinkedIn","link"=>"https://www.linkedin.com/in/klim-mansurov-995b94183/","text"=>"<i class=\"fa fa-linkedin\"></i>"],
                ["name"=>"Github","link"=>"https://github.com/klim2020/telegram_notifier","text"=>"<i class=\"fa fa-github\"></i>"]
            ],
            "about_text"=>"About Myself",
            "about"=>"Hi, My name is Klim, I am 35, I'm a fullstack PHP developer, looking for a good team with new opportnities to grow myself up as a developer. Please feel free to download this resume as pdf, using button above",
            "skills_text"=>"Expert Skills",
            "skills"=>[
                ["name"=>"HTML/CSS","percent"=>70],
                ["name"=>"JavaScript","percent"=>50],
                ["name"=>"JQuery","percent"=>60],
                ["name"=>"PHP","percent"=>90],
                ["name"=>"Java","percent"=>50],
                ["name"=>"Git","percent"=>40],
                ["name"=>"Laravel","percent"=>40]
            ],
            "education_text"=>"Education",
            "education"=>[
                "Bachelour, Automatic systems, 2009",
                "<a href=\"https://ru.hexlet.io/courses/php-mvc\">https://ru.hexlet.io/courses/php-mvc</a> - PHP Course",
                "<a href=\"https://ru.hexlet.io/courses/php-laravel\">https://ru.hexlet.io/courses/php-laravel</a> - PHP Lavarel Course"],
            "work_experience_text"=>"Work Experience",
            "work_experience"=>[
                "<span style = \"color:darkolivegreen;\">03.05.2009 - 04.10.2012</span> - “advertising company” junior assistant, commercial booklet design, programs: <span style=\"font-weight:bold; color:darkblue\">3DMax, Photoshop, CorelDraw, Word, Excel</span>",
                "<span style = \"color:darkolivegreen;\">07.08.2014 - 04.10.2016</span> - e-commerce shop administrator, order managment, work with customers.",
                "<span style = \"color:darkolivegreen;\">2018 - 2019</span> - Fullstack PHP Developer at small e-commerce shop <a href=\"www.airboats.ru\">www.airboats.ru</a>. I was involved in development and setting up modules for this web site. Also my duties was creating graphical elements through <span style=\"font-weight:bold; color:darkblue\">HTML/CSS/Javascript</span> involving elements with <span style=\"font-weight:bold; color:darkblue\">Jquery library</span> for front part of this site. E-commerce shop was powered by<span style=\"font-weight:bold; color:darkblue\"> Opencart CMS (written on PHP) </span>",
                "<span style = \"color:darkolivegreen;\">2020 - 2021</span> - Fullstack PHP Developer at e-commerce shop <a href=\"www.tjanshi.com\">www.tjanshi.com</a>, Powered by Opencart CMS. I had same duties as above, also I had to work with <span style=\"font-weight:bold; color:darkblue\"> Git Flow - a branching model for Git CVS system</span>, to track changes on  website  code.",
                "<span style = \"color:darkolivegreen;\">2021 - today</span> - Fullstack PHP Developer at e-commerce shop <a href=\"www.bulbul.ua\">www.bulbul.ua</a>,<span style=\"font-weight:bold; color:darkblue\"> Opencart CMS</span> pursuits me 🚔 :). Same duties as above :), also I was involving in creating <span style=\"font-weight:bold; color:darkblue\">of different REST API integrations </span> with our suppliers, banks and other companies, also in our we start using <span style=\"font-weight:bold; color:darkblue\"> CI/CD</span> development model."
            ],
            "my_works_text"=>"My works",
            "my_works"=>[
                "work #1",
                "work #2"
            ],
            "download_PDF"=>"download PDF",
            "name"=>"Klym Mansurov",
            "job_title"=>"fullstack PHP developer",
            "language_text"=>"Language",
        ];
    private $items_ru=[
        "contacts_text"=>"Контакты",
        "contacts"=>[
            ["name"=>"Телефон","link"=>"tel:+380977813910","text"=>"<i class=\"fa fa-phone\"></i>"],
            ["name"=>"Почта","link"=>"mailto:klimworkss@gmail.com","text"=>"<i class=\"fa fa-envelope\"> </i>"],
            ["name"=>"Telegram","link"=>"https://t.me/KlimSmithh","text"=>"<i class=\"fa fa-telegram\"></i> "],
            ["name"=>"Viber","link"=>"viber://chat/?number=%2B380977813910","text"=>"<i class=\"fa fa-viber\"></i> "],
            ["name"=>"LinkedIn","link"=>"https://www.linkedin.com/in/klim-mansurov-995b94183/","text"=>"<i class=\"fa fa-linkedin\"></i>"],
            ["name"=>"Github","link"=>"https://github.com/klim2020/telegram_notifier","text"=>"<i class=\"fa fa-github\"></i>"]
        ],
        "about_text"=>"О себе",
        "about"=>"Здравствуйте, меня зовут Клим, мне 35 я работаю fullstack PHP developer, опыт около 2-х лет, ищу хорошую команду с которой мог бы развивать свои навыки. вы можете сохранить эту страницу сверху справа как  pdf.",
        "skills_text"=>"Мои навыки",
        "skills"=>[
            ["name"=>"HTML/CSS","percent"=>70],
            ["name"=>"JavaScript","percent"=>50],
            ["name"=>"JQuery","percent"=>60],
            ["name"=>"PHP","percent"=>90],
            ["name"=>"Java","percent"=>50],
            ["name"=>"Git","percent"=>40],
            ["name"=>"Laravel","percent"=>40]
        ],
        "education_text"=>"Образование",
        "education"=>[
            "<a href=\"https://ru.hexlet.io/courses/php-mvc\">https://ru.hexlet.io/courses/php-mvc</a> - Курс по PHP",
            "<a href=\"https://ru.hexlet.io/courses/php-laravel\">https://ru.hexlet.io/courses/php-laravel</a> - курс по Lavarel"],
        "work_experience_text"=>"Опыт работы",
        "work_experience"=>[
            "<span style = \"color:darkolivegreen;\">03.05.2009 - 04.10.2012</span> - КП “реклама и парковка” младший специалист, создание эскизных проектов, программы: <span style=\"font-weight:bold; color:darkblue\">3DMax, Photoshop, CorelDraw, Word, Excel</span>",
            "<span style = \"color:darkolivegreen;\">07.08.2014 - 04.10.2016</span> - администратор интернет магазина, сопровождение заказов, добавление контента, работа с товарами.",
            "<span style = \"color:darkolivegreen;\">2018 - 2019</span> - Programista PHP fullstack в небольшом интернет магазине <a href=\"www.airboats.ru\">www.airboats.ru</a>. В мои обязанности входило создание и доработка модулей, а также создание графических элементов на <span style=\"font-weight:bold; color:darkblue\">HTML/CSS/Javascript</span> с использованием библиотеки <span style=\"font-weight:bold; color:darkblue\">Jquery</span>. Интернет  магазин работает на <span style=\"font-weight:bold; color:darkblue\"> Opencart CMS (PHP) </span>",
            "<span style = \"color:darkolivegreen;\">2020 - 2021</span> - Fullstack PHP Developer в интернет магазине <a href=\"www.tjanshi.com\">www.tjanshi.com</a>,Opencart CMS. У меня были такие же обязанности, что и нв предыдущей работе,  а также дополнительно научился работать с <span style=\"font-weight:bold; color:darkblue\"> Git Flow для Git </span>, для мониторинга изменений в коде.",
            "<span style = \"color:darkolivegreen;\">2021 - today</span> - Fullstack PHP Developer at e-commerce shop <a href=\"www.bulbul.ua\">www.bulbul.ua</a>,<span style=\"font-weight:bold; color:darkblue\"> Opencart CMS</span> гонится за мной все это время 🚔 :). Те же обязанности :), но тут я уже писал всевозможные интеграции к сервисам на <span style=\"font-weight:bold; color:darkblue\">REST API</span> от наших поставщиков, банков и других компаний, ну и дополнительно мы используем разработку на основе<span style=\"font-weight:bold; color:darkblue\"> CI/CD</span>."
        ],
        "my_works_text"=>"Мои работы",
        "my_works"=>[
            "work #1",
            "work #2"
        ],
        "download_PDF"=>"скачать PDF",
        "name"=>"Клим Мансуров",
        "job_title"=>"fullstack PHP Developer",
        "language_text"=>"Язык",
    ];

    private $items_ua=[
        "contacts_text"=>"Контакти",
        "contacts"=>[
            ["name"=>"Телефон","link"=>"tel:+380977813910","text"=>"<i class=\"fa fa-phone\"></i>"],
            ["name"=>"E-mail","link"=>"mailto:klimworkss@gmail.com","text"=>"<i class=\"fa fa-envelope\"> </i>"],
            ["name"=>"Telegram","link"=>"https://t.me/KlimSmithh","text"=>"<i class=\"fa fa-telegram\"></i> "],
            ["name"=>"Viber","link"=>"viber://chat/?number=%2B380977813910","text"=>"<i class=\"fa fa-viber\"></i> "],
            ["name"=>"LinkedIn","link"=>"https://www.linkedin.com/in/klim-mansurov-995b94183/","text"=>"<i class=\"fa fa-linkedin\"></i>"],
            ["name"=>"Github","link"=>"https://github.com/klim2020/telegram_notifier","text"=>"<i class=\"fa fa-github\"></i>"]
        ],
        "about_text"=>"О собi",
        "about"=>"Вiтаю вас на моiй сторiнцi, мене звати Клим, менi 35, я працюю fullstack PHP розробником в неаеличкому iнтернет магазинi, маю досвiд працi з PHP - близько 2-х рокiв, в основному з CMS Opencart, Wordpress. Наразi шукаю файну команду для подальшого розвитку. Зараз вывчаю стек Laravel+Vue.  вы можете загрузити цю сторiнку як резюме в форматi pdf натиснув кнопку зверху  справа ",
        "skills_text"=>"Мои навики",
        "skills"=>[
            ["name"=>"HTML/CSS","percent"=>70],
            ["name"=>"JavaScript","percent"=>50],
            ["name"=>"JQuery","percent"=>60],
            ["name"=>"PHP","percent"=>90],
            ["name"=>"Java","percent"=>50],
            ["name"=>"Git","percent"=>40],
            ["name"=>"Laravel","percent"=>40]
        ],
        "education_text"=>"Освiта",
        "education"=>[
            "<a href=\"https://ru.hexlet.io/courses/php-mvc\">https://ru.hexlet.io/courses/php-mvc</a> - Курс по PHP",
            "<a href=\"https://ru.hexlet.io/courses/php-laravel\">https://ru.hexlet.io/courses/php-laravel</a> - курс по Lavarel"],
        "work_experience_text"=>"Досвiд",
        "work_experience"=>[
            "<span style = \"color:darkolivegreen;\">03.05.2009 - 04.10.2012</span> - КП “реклама и парковка” молодший спецiалист, створення буклетiв и проектiв для будiвництва, програми: <span style=\"font-weight:bold; color:darkblue\">3DMax, Photoshop, CorelDraw, Word, Excel</span>",
            "<span style = \"color:darkolivegreen;\">07.08.2014 - 04.10.2016</span> - администратор iнтернет магазину, праця с заказами, додавання контенту, праця з клiентами.",
            "<span style = \"color:darkolivegreen;\">2018 - 2019</span> - Fullstack PHP Developer в невеличкому интернет магазинi <a href=\"www.airboats.ru\">www.airboats.ru</a>. Тут в моi обов'язки входило створення, а також налаштування рiзних модулей до <span style=\"font-weight:bold; color:darkblue\"> Opencart CMS (PHP) </span>, а також додавання рiзних частин дiзайна интернет магазину, використання  <span style=\"font-weight:bold; color:darkblue\">HTML/CSS/Javascript</span> та праця с бiблiотекою <span style=\"font-weight:bold; color:darkblue\">Jquery</span>.",
            "<span style = \"color:darkolivegreen;\">2020 - 2021</span> - Fullstack PHP Developer в интернет магазинi <a href=\"www.tjanshi.com\">www.tjanshi.com</a>,Opencart CMS. Мав тi самi обов'язки шо i в попередньому мiсцi працi, але тут ще було потрiбно  <span style=\"font-weight:bold; color:darkblue\"> Git Flow для Git </span>, для мониторинга изменений в коде.",
            "<span style = \"color:darkolivegreen;\">2021 - по цей час</span> - Fullstack PHP Developer в интернет магазинi <a href=\"www.bulbul.ua\">www.bulbul.ua</a>,Менi здаэться <span style=\"font-weight:bold; color:darkblue\"> Opencart CMS</span> женеться за мною 🚔 :). Такi самi обов'язки що й вище, а також додатково навчился створювати рiзнi iнтеграцii з сервiсами <span style=\"font-weight:bold; color:darkblue\">REST API</span> вiд наших постачальныкiв, банкiв та iнших компанiй. Також була впроваджена система розробки <span style=\"font-weight:bold; color:darkblue\"> CI/CD</span>."
        ],
        "my_works_text"=>"Моi роботи",
        "my_works"=>[
            "work #1",
            "work #2"
        ],
        "download_PDF"=>"скачати PDF",
        "name"=>"Клим Мансуров",
        "job_title"=>"розробник PHP",
        "language_text"=>"Мова",
    ];

    private $items_pl=[
        "contacts_text"=>"Kontakty",
        "contacts"=>[
            ["name"=>"Tel","link"=>"tel:+380977813910","text"=>"<i class=\"fa fa-phone\"></i>"],
            ["name"=>"E-mail","link"=>"mailto:klimworkss@gmail.com","text"=>"<i class=\"fa fa-envelope\"> </i>"],
            ["name"=>"Telegram","link"=>"https://t.me/KlimSmithh","text"=>"<i class=\"fa fa-telegram\"></i> "],
            ["name"=>"Viber","link"=>"viber://chat/?number=%2B380977813910","text"=>"<i class=\"fa fa-viber\"></i> "],
            ["name"=>"LinkedIn","link"=>"https://www.linkedin.com/in/klim-mansurov-995b94183/","text"=>"<i class=\"fa fa-linkedin\"></i>"],
            ["name"=>"Github","link"=>"https://github.com/klim2020/telegram_notifier","text"=>"<i class=\"fa fa-github\"></i>"]
        ],
        "about_text"=>"O sobie",
        "about"=>"Witam, mam na imię Klim, mam 35 lat, pracuję jako fullstack PHP developer w sklepie internetowym, mam 2 letnie doświadczenie (CMS Opencart, Wordpress), teraz szukam zespołu w którym mógłbym rozwijać się jako programista. Możesz pobierac tę stronę jako CV w formacie PDF, używając przycisku powyżej",
        "skills_text"=>"Umiejętności",
        "skills"=>[
            ["name"=>"HTML/CSS","percent"=>70],
            ["name"=>"JavaScript","percent"=>50],
            ["name"=>"JQuery","percent"=>60],
            ["name"=>"PHP","percent"=>90],
            ["name"=>"Java","percent"=>50],
            ["name"=>"Git","percent"=>40],
            ["name"=>"Laravel","percent"=>40]
        ],
        "education_text"=>"Edukacja",
        "education"=>[
            "<a href=\"https://ru.hexlet.io/courses/php-mvc\">https://ru.hexlet.io/courses/php-mvc</a> - PHP Kursy",
            "<a href=\"https://ru.hexlet.io/courses/php-laravel\">https://ru.hexlet.io/courses/php-laravel</a> - Kursy Lavarel"],
        "work_experience_text"=>"Doświadczenie",
        "work_experience"=>[
            "<span style = \"color:darkolivegreen;\">03.05.2009 - 04.10.2012</span> - firma \"reklama i parking\". Stanowisko - młodszy specjalista, tworzenie projektów i broszur, programy: <span style=\"font-weight:bold; color:darkblue\">3DMax, Photoshop, CorelDraw, Word, Excel</span>",
            "<span style = \"color:darkolivegreen;\">07.08.2014 - 04.10.2016</span> - administrator sklepu internetowego, praca z zamówieniami, dodawanie różnych materiałów do serwisu, praca z towarami.",
            "<span style = \"color:darkolivegreen;\">2018 - 2019</span> - Fullstack PHP Developer w sklepie internetowym <a href=\"www.airboats.ru\">www.airboats.ru</a>. Do moich obowiązków należało tworzenie i konfiguracja modułów na <span style=\"font-weight:bold; color:darkblue\"> Opencart CMS (PHP) </span>,  oraz tworzenie elementów graficznych przez  <span style=\"font-weight:bold; color:darkblue\">HTML/CSS/Javascript</span> oraz prace z bibliotekamy <span style=\"font-weight:bold; color:darkblue\">Jquery</span>.",
            "<span style = \"color:darkolivegreen;\">2020 - 2021</span> - Fullstack PHP Developer w sklepie internetowym <a href=\"www.tjanshi.com\">www.tjanshi.com</a>,Opencart CMS. Miałem takie same obowiązki jak w poprzedniej pracy, również zaczął pracowac z  <span style=\"font-weight:bold; color:darkblue\"> Git Flow для Git </span>, zeby pracować ze zmianami w projekcie.",
            "<span style = \"color:darkolivegreen;\">2021 - today</span> - Fullstack PHP Developer w sklepie internetowym <a href=\"www.bulbul.ua\">www.bulbul.ua</a>, rowniez <span style=\"font-weight:bold; color:darkblue\"> Opencart CMS</span> :). Miałem takie same obowiązki jak w poprzedniej pracy, a  takzie dodatkowo nauczyłem się tworzyć integracje z <span style=\"font-weight:bold; color:darkblue\">REST API</span> naszych dostawców, bankowymi systemami płatności i innymi zewnętrznymi źródłami. Zintegrowano również system rozwoju oparty na <span style=\"font-weight:bold; color:darkblue\"> CI/CD</span>."
        ],
        "my_works_text"=>"Моi роботи",
        "my_works"=>[
            "work #1",
            "work #2"
        ],
        "download_PDF"=>"Ładowanie PDF",
        "name"=>"Klym Mansurov",
        "job_title"=>"Fullstack PHP Developer",
        "language_text"=>"Język",
    ];




    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_data')->delete();

        $items = array(
            "ru"=>$this->items_ru,
            "en"=>$this->items_en,
            "pl"=>$this->items_pl,
            "ua"=>$this->items_ua
        );
        foreach($items as $lang=>$value){
            foreach ($value as $key=>$item){
                $isarray = is_array($item);
                CvData::create([
                    'lang'=>$lang,
                    'valuename'=>$key,
                    'type'=>($isarray) ? 'json' : 'string',
                    'value'=>($isarray) ? json_encode($item, JSON_UNESCAPED_UNICODE) : $item
                 ]);
            }
        }


    }
}
