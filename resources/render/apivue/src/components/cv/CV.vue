

<template src = './CV.tpl'> </template>

<script>

import dataProvider from '/src/libs/dataProvider';
import html2pdf from 'html2pdf.js';
import { BeakerIcon } from '@heroicons/vue/solid';
import  ProgressBar  from '@/components/ProgressBar'

export default {
    data(){
        return{
            cvdata:{
              contacts_text:`Contacts`,
              contacts:[
                  {name:'Telephone',link:`tel:+380977813910`,text:`<i class="fa fa-phone"></i>`},
                  {name:'Mail',link:`mailto:klimworkss@gmail.com`,text:`<i class="fa fa-envelope"> </i>`},
                  {name:'Telegram',link:`https://t.me/KlimSmithh`,text:`<i class="fa fa-telegram"></i> `},
                  {name:'Viber',link:`viber://chat/?number=%2B380977813910`,text:`<i class="fa fa-viber"></i> `},
                  {name:'LinkedIn',link:`https://www.linkedin.com/in/klim-mansurov-995b94183/`,text:`<i class="fa fa-linkedin"></i>`},
                  {name:'Github',link:`https://github.com/klim2020/telegram_notifier`,text:`<i class="fa fa-github"></i>`}
              ],
              about_text:'About Myself',
              about:`Hi, My name is Klim, I am 35, I'm a fullstack PHP developer, looking for a good team with new opportnities to grow myself up as a developer. Please feel free to download this resume as pdf, using button above`,
              skills_text:'Expert Skills',
              skills:[
                {name:'HTML/CSS',percent:70},
                {name:'JavaScript',percent:50},
                {name:'JQuery',percent:60},
                {name:'PHP',percent:90},
                {name:'Java',percent:50},
                {name:'Git',percent:40},
                {name:'Laravel',percent:40}
              ],
                education_text:'Education',
                education:[
                 `Bachelour, Automatic systems, 2009`,
                 `<a href = "https://ru.hexlet.io/courses/php-mvc">https://ru.hexlet.io/courses/php-mvc</a> - PHP Course`,
                 `<a href = "https://ru.hexlet.io/courses/php-laravel">https://ru.hexlet.io/courses/php-laravel</a> - PHP Lavarel Course`],
                work_experience_text:'Work Experience',
                work_experience:[
                    `<span style = "color:darkolivegreen;">03.05.2009 - 04.10.2012</span> - “advertising company” junior assistant, commercial booklet design, programs: <span style="font-weight:bold; color:darkblue">3DMax, Photoshop, CorelDraw, Word, Excel</span>`,
                    `<span style = "color:darkolivegreen;">07.08.2014 - 04.10.2016</span> - e-commerce shop administrator, order managment, work with customers.`,
                    `<span style = "color:darkolivegreen;">2018 - 2019</span> - Fullstack PHP Developer at small e-commerce shop <a href="www.airboats.ru">www.airboats.ru</a>. I was involved in development and setting up modules for this web site. Also my duties was creating graphical elements through <span style="font-weight:bold; color:darkblue">HTML/CSS/Javascript</span> involving elements with <span style="font-weight:bold; color:darkblue">Jquery library</span> for front part of this site. E-commerce shop was powered by<span style="font-weight:bold; color:darkblue"> Opencart CMS (written on PHP) </span>`,
                    `<span style = "color:darkolivegreen;">2020 - 2021</span> - Fullstack PHP Developer at e-commerce shop <a href="www.tjanshi.com">www.tjanshi.com</a>, Powered by Opencart CMS. I had same duties as above, also I had to work with <span style="font-weight:bold; color:darkblue"> Git Flow - a branching model for Git CVS system</span>, to track changes on  website  code.`,
                    `<span style = "color:darkolivegreen;">2021 - today</span> - Fullstack PHP Developer at e-commerce shop <a href="www.bulbul.ua">www.bulbul.ua</a>,<span style="font-weight:bold; color:darkblue"> Opencart CMS</span> pursuits me 🚔 :). Same duties as above :), also I was involving in creating <span style="font-weight:bold; color:darkblue">of different REST API integrations </span> with our suppliers, banks and other companies, also in our we start using <span style="font-weight:bold; color:darkblue"> CI/CD</span> development model.`
                ],
            },
            cvdata2 : false,
        }

    },
    name: "CV",
    components:{ BeakerIcon,ProgressBar },
    mounted() {
        console.log(this.$route.params.lang);
            // Код, который будет запущен только после
            // отрисовки всех представлений
        this.loadLanguage();

    },
    methods: {
        loadLanguage: function (lang = 'ru'){
            dataProvider.getCVData(lang).then((data)=>{this.cvdata2 = data}).then(()=>{console.log(this.cvdata2)});
        },
        languageChange: function (event){
            let val = event.target.value
            this.$router.push({ name: 'CV', params: { lang: val } })
            this.loadLanguage(val);

        },
        exportToPDF:function () {
            console.log(this.$refs.document);
            html2pdf(this.$refs.document, {
                margin: 0,
                filename: 'document.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { dpi: 192, letterRendering: true },
                jsPDF: { unit: 'in', format: [16.54,11.69], orientation: 'landscape' }
            })
        }

    }
}
</script>

<style scoped lang="scss" src = './CV.scss'></style>
