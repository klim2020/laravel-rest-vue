<template>
    <!-- Contact Form -->
    <div v-if="homedata && contacts" class="container py-16 md:py-20" id="contact">
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
                    v-mask="['+38(0##)###-##-##', '##.###.###/####-##']"
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
</template>

<script>
import {mask} from 'vue-the-mask'
import validator from "validator";
import {POSITION, TYPE, useToast} from "vue-toastification";
import dataService from "@/libs/dataService";
import errorService from "@/libs/errorService";
import languageProvider from "@/libs/languageProvider";

export default {
    directives: {mask},
    name: "ContactForm",
    data() {
        return{
          errorData:[],
        }
    },
    props:[`homedata`,`contacts`],
    methods:{
        sendContactData(){

            let errors = [];
            let form ={
                modal_form_name :document.querySelector("#form-name").value,
                modal_form_telephone : document.querySelector("#form-phone").value,
                modal_form_email : document.querySelector("#form-email").value,
                modal_form_msg : document.querySelector("#form-message").value,
            };
            if (!validator.isEmail(form.modal_form_email)){errors.push(this.errorData.error_email[0])}
            //if (!validator.isMobilePhone(form.modal_form_telephone,['uk-UA'])){errors.push(this.errorData.error_phone[0])}
            if (!validator.isLength(form.modal_form_msg,{min:20, max: undefined})){errors.push(this.errorData.error_message[0])}
            if (!validator.isAlpha(form.modal_form_name)){errors.push(this.errorData.error_name[0])}
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
    },

    mounted() {
        languageProvider.onLanguageChange(async ()=>{
            this.errorData = await errorService.getData();
        });
        errorService.getData().then(data=>{
            this.errorData = data;

        });

    }
}
</script>

<style scoped>

</style>
