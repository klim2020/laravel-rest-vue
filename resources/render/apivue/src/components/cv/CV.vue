

<template src = './CV.tpl'> </template>

<script>


import html2pdf from 'html2pdf.js';
import { BeakerIcon } from '@heroicons/vue/solid';
import  ProgressBar  from '@/components/ProgressBar'
import dataService from "@/libs/dataService";

export default {
    props:{
      cvdata:Object,
    },
    data(){

        return{
            cvdata2 : false,//массив с данными
        }

    },

    name: "CV",
    components:{ BeakerIcon,ProgressBar },
    mounted() {
            // Код, который будет запущен только после
            // отрисовки всех представлений
        dataService.switchPage('cv');
        //this.loadLanguage();

        this.getData();

    },
    watch:{
        $route (){
            this.getData();
        }
    },
    methods: {
        getData: async function(){
            this.cvdata2 =  await dataService.getData();
        },

        languageChange: function (event){
            let val = event.target.value
            this.$router.push({ name: 'CV', params: { lang: val } })
            this.getData();

        },
        exportToPDF:function () {

            html2pdf(this.$refs.document, {
                margin: [0, -0.08],
                filename: 'document.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { dpi: 192, letterRendering: true },
                //jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
                jsPDF: { unit: 'in', format: [16.54,11.69], orientation: 'landscape' },
                pagebreak: {before: '.newPage', avoid: ['h2', 'h3', 'h4', '.field']},
            })
        }

    }
}
</script>

<style scoped lang="scss" src = './CV.scss'></style>
