<template>
    <div v-if="homedata">
        <!-- This is an example component -->
        <div  class="w-full h-screen bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.getImage()})`}">
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
                           {{ homedata.about_who_i_am[0] }}
                        </h2>
                        <img src="img/fullstack.jpg" class="border-2 rounded" style="width: 300px;padding: 10px;float: left;border:1px solid gray;">
                        <h4 class=" pl-4 overflow-hidden pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                            {{ homedata.about_my_name[0] }}
                        </h4>

                        <p class=" pl-4 overflow-hidden pt-6 font-body leading-relaxed text-grey-20">
                           {{ homedata.about_short_text[0] }}
                        </p>
                        <div v-if="contacts" class="flex pl-4 overflow-hidden flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                            <div  class="flex items-center justify-center sm:justify-start">
                                <p  class="font-body text-lg font-semibold uppercase text-grey-20">
                                    {{ contacts.contacts_text[0] }} >
                                </p>
                                <div  class ="p-2 text-xl" v-for="(contact,index) in contacts.contacts[0]" :key="index"> <a :href="contact.link" class="social-icon" v-html="contact.text"></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Parralax -->
        <div class="w-full h-32 bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.getImage()})`}">
            <div class="w-full h-32 backdrop-blur backdrop-contrast-50 bg-opacity-50 bg-black flex justify-center items-center">

            </div>
        </div>

        <!-- good at block -->
        <div class="container py-16 md:py-20" id="services">
            <h2
                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
            >
                {{ homedata.services_desc[0] }}
            </h2>
            <h3
                class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
            >
                {{ homedata.services_what_i_can_text[0] }}
            </h3>

            <div
                class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
            >
                <div v-for="(item, index) in homedata.services_what_i_can[0]" :key="index" class="group rounded px-8 py-12 shadow hover:bg-primary">
                    <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                        <div class="hidden group-hover:block">
                            <img
                                :src="item.img"
                                :alt="item.img_alt"
                            />
                        </div>
                        <div class="block group-hover:hidden">
                            <img
                                :src="item.img_hover"
                                :alt="item.img_alt"
                            />
                        </div>
                    </div>
                    <div class="text-center">
                        <h3
                            class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow-300 lg:text-xl"
                        >
                            {{ item.title }}
                        </h3>
                        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                            {{ item.desc }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Parralax -->
        <div class="w-full h-32 bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.getImage()})`}">
            <div class="w-full h-32 backdrop-blur backdrop-contrast-50 bg-opacity-50 bg-black flex justify-center items-center">

            </div>
        </div>

        <!-- My Works -->
        <div class="container py-16 md:py-20" id="portfolio">
            <h2
                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
            >
                {{ homedata.my_works_title[0] }}
            </h2>
            <h3
                class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
            >
                {{ homedata.my_works_short_desc[0] }}
            </h3>

            <div
                class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2"
            >
                <a v-for="(item, index) in homedata.my_works[0]" :key="index"
                     :href="item.href"
                     class="mx-auto transform transition-all hover:scale-105 md:mx-0"
                >
                   <img
                      :src="item.img"
                      class="shadow"
                      :alt="item.img_alt"
                   />
                </a>


            </div>
        </div>

        <!-- Parralax -->
        <div class="w-full h-32 bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.getImage()})`}">
            <div class="w-full h-32 backdrop-blur backdrop-contrast-50 bg-opacity-50 bg-black flex justify-center items-center">

            </div>
        </div>

        <!-- Contact Form -->
        <div class="container py-16 md:py-20" id="contact">
            <h2
                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
            >
                {{ homedata.cf_title[0] }}
            </h2>
            <div v-html = "homedata.cf_desc[0]">

            </div>
            <form @submit="checkForm()" class="mx-auto w-full pt-10 sm:w-3/4" id="submitform">
                <div class="flex flex-col md:flex-row">
                    <input
                        class="mr-3 w-full rounded border-2 border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                        :placeholder="this.homedata.cf_input_name[0]"
                        type="text"
                        id="form-name"
                    />
                    <input
                        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                        :placeholder="this.homedata.cf_input_email[0]"
                        type="text"
                        id="form-email"
                    />
                    <input
                        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                        :placeholder="this.homedata.cf_input_phone[0]"
                        type="text"
                        id="form-phone"
                    />
                </div>

                <textarea
                    class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
                    :placeholder="this.homedata.cf_input_msg[0]"
                    id="form-message"
                    cols="30"
                    rows="10"
                ></textarea>
                <button type="submit" @click.prevent = "sendContactData()"
                    class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
                >
                    {{  homedata.cf_input_text_send[0]  }}
                    <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
                </button>
            </form>
            <div class="flex flex-col justify-around pt-16 lg:flex-row">
                <div
                    class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
                >
                    <div class="flex items-center">
                        <i class="bx bx-phone text-2xl text-grey-40"></i>
                        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                            {{ homedata.cf_input_phone[0] }}
                        </p>
                    </div>
                    <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                        <a :href = "contacts.contacts[0][0]['link']">{{ contacts.contacts[0][0]["name"] }}</a>
                    </p>
                </div>
                <div
                    class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
                >
                    <div class="flex items-center">
                        <i class="bx bx-envelope text-2xl text-grey-40"></i>
                        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                            {{ homedata.cf_input_email[0] }}
                        </p>
                    </div>
                    <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                        <a :href = "contacts.contacts[0][1]['link']">{{ contacts.contacts[0][1]["name"] }}</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
/* eslint-disable */
// @ is an alias to /src

//Parralax




import dataService from "@/libs/dataService";
import errorService from "@/libs/errorService";

import { useToast, POSITION, TYPE } from "vue-toastification";

import validator from 'validator';

export default {
  name: 'Home',
  methods: {

      checkForm(){

      },

      sendContactData(){

        let errors = [];
        let form ={
             name :document.querySelector("#form-name").value,
             phone : document.querySelector("#form-phone").value,
             email : document.querySelector("#form-email").value,
             msg : document.querySelector("#form-message").value,
        };
        if (!validator.isEmail(form.email)){errors.push("Please enter a valid email")};
        if (!validator.isMobilePhone(form.phone)){errors.push("Please enter a valid phone")};
        if (!validator.isLength(form.msg,{min:20, max: undefined})){errors.push("Please provide a Message")};
        if (!validator.isAlpha(form.name)){errors.push("Please provide a valid name")};
        const toast = useToast();
        if(errors.length>0){
            toast("Error: " + errors.join('|| '), {
                position: POSITION.TOP_CENTER,
                type:TYPE.ERROR,

                toastClassName: "top-16",
                timeout: 10000});
        }else{
            toast("Everything is ok please wait while we send your request to a server: ", {
                position: POSITION.TOP_CENTER,
                type:TYPE.SUCCESS,

                toastClassName: "top-16",
                timeout: 10000});
        }
        dataService.sendContactRequest(form)




      },
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
        //console.log(this.homedata);
     },
     async getContacts(){
         this.contacts = await dataService.getContacts();
         //console.log(this.contacts);
     }
  },
  data(){
    return{
        errorservice:errorService,
        image:'./paralax1.jpg',
        homedata:false,
        contacts:false,
    }
  },
  beforeMount(){
    //this.image = './img/'+this.getRand();
  },
  mounted(){
    //console.log("home");
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
<style>

.my-container-class
{
    top: 10em;
}
</style>
