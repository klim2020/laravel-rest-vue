<template>
    <!-- This is an example component -->
    <div   v-if="homedata" class="w-full h-screen bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.getImage()})`}">
        <div class="w-full h-screen backdrop-blur backdrop-contrast-50 bg-opacity-50 bg-black flex justify-center items-center">
            <div class="mx-4 backdrop-brightness-125  p-8 text-center text-white">
                <h1 class=" font-mono font-bold  text-6xl mb-4">{{ homedata.hello_text[0] }}</h1>
                <h2 class=" font-mono font-bold text-3xl mb-12">{{ homedata.who_text[0] }}</h2>
                <p class="font-mono font-bold text-xl mb-12">{{ homedata.short_desc_text[0] }}</p>
                <div>
                    <router-link class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2" :to="{ path: '/cv' }">
                        {{ homedata.portfolio_button_text[0] }}</router-link>

                    <a @click.prevent = "scrollTo('#about')" class="cursor-pointer bg-green-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-red-600 ml-2">
                        {{ homedata.next_text[0] }}
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--hello world-->
    <div>
        <div class="bg-emerald-50 font-mono p-4" id="about">
            <div class="border-4 rounded p-4 container flex  justify-center py-16 md:py-20 lg:flex-row">
                <div class="w-full text-center w-4/5  text-center lg:text-left">
                    <h2 class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                        Who am I?
                    </h2>
                    <img src="img/fullstack.jpg" class="border-2 rounded" style="width: 300px;padding: 10px;float: left;border:1px solid gray;">
                    <h4 class=" pl-4 overflow-hidden pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                        My name is Klym.
                    </h4>

                    <p class=" pl-4 overflow-hidden pt-6 font-body leading-relaxed text-grey-20">
                        They say that if I make my own blog using Laravel + Vue, then it would be much easier to find a job with this stack.
                        For 3 years I was working as a  PHP developer on a small projects(e-commerce mostly) powered by Opencart and Wordpress CMS  mostly.
                        And now I get bored with this CMS, so am looking forward for a new opportunities, I need to grow and discover new horizonts.
                        So I started my own blog, using Laravel + Vue stack. So welcome aboard, hope it will be interesting for you :)
                    </p>
                    <div v-if="contacts" class="flex pl-4 overflow-hidden flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                        <div  class="flex items-center justify-center sm:justify-start">
                            <p  class="font-body text-lg font-semibold uppercase text-grey-20">
                                {{ contacts.contacts_text[0] }} >
                            </p>
                            <div class ="p-2" v-for="(contact,index) in contacts.contacts[0]" :key="index"> <a :href="contact.link" class="social-icon" v-html="contact.text"></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div   v-if="homedata" class="w-full h-32 bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.getImage()})`}">
        <div class="w-full h-32 backdrop-blur backdrop-contrast-50 bg-opacity-50 bg-black flex justify-center items-center">

        </div>
    </div>
</template>

<script>
/* eslint-disable */
// @ is an alias to /src

//Parralax



import {watch} from "vue";
import dataService from "@/libs/dataService";
import languageProvider from "@/libs/languageProvider";

export default {
  name: 'Home',
  methods: {
      scrollTo(id){
           document.querySelector(id).scrollIntoView({behavior: 'smooth'});
      },
      getImage(){
          return './img/'+this.getRand();
      },
     // геттер вычисляемого значения
     getRand: function () {
         // `this` указывает на экземпляр vm
         return 'paralax'+Math.floor(Math.random() * 10)+'.jpg';
     },
     async getData(){
        this.homedata = await dataService.getData();
     },
     async getContacts(){
         this.contacts = await dataService.getContacts();
     }
  },
  data(){
    return{
        image:'./paralax1.jpg',
        homedata:false,
        contacts:false,
    }
  },
  beforeMount(){
    this.image = './img/'+this.getRand();
  },
  mounted(){
    dataService.switchPage('home');
    this.getContacts();
    this.getData();
  },
  watch:{
      $route(){
          this.getContacts();
          this.getData();
      }
  }

}
</script>
