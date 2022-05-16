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
            Short skill brief
        </h2>
        <h3
            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
        >
            What can I do...
        </h3>

        <div
            class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
        >
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img
                            src="/img/icon-development-white.svg"
                            alt="development icon"
                        />
                    </div>
                    <div class="block group-hover:hidden">
                        <img
                            src="/img/icon-development-black.svg"
                            alt="development icon"
                        />
                    </div>
                </div>
                <div class="text-center">
                    <h3
                        class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow-300 lg:text-xl"
                    >
                        BACK_END
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Web development including different PHP CMS Such as Wordpress, Opencart, Laravel.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img
                            src="/img/deploy-white.svg"
                            alt="content marketing icon"
                        />
                    </div>
                    <div class="block group-hover:hidden">
                        <img
                            src="/img/deploy-black.svg"
                            alt="content marketing icon"
                        />
                    </div>
                </div>
                <div class="text-center">
                    <h3
                        class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow-300 lg:text-xl"
                    >
                        SERVER_DEPLOYMENT
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Server deployment including Apache/NGINX hosting, Heroku, Amazon AWS.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img
                            src="/img/icon-graphics-white.svg"
                            alt="Graphic Design icon"
                        />
                    </div>
                    <div class="block group-hover:hidden">
                        <img
                            src="/img/icon-graphics-black.svg"
                            alt="Graphic Design icon"
                        />
                    </div>
                </div>
                <div class="text-center">
                    <h3
                        class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow-300 lg:text-xl"
                    >
                        WEB_DESIGN
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Web Development including HTML/CSS/Javascript Stack, VueJS, Angular, AlpineJS
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
            Check out my Portfolio
        </h2>
        <h3
            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
        >
            Here's what I have done with the past
        </h3>

        <div
            class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2"
        >
            <a
                href="/"
                class="mx-auto transform transition-all hover:scale-105 md:mx-0"
            >
                <img
                    src="/img/bulbul.png"
                    class="shadow"
                    alt="portfolio image"
                />
            </a>
            <a
                href="/"
                class="mx-auto transform transition-all hover:scale-105 md:mx-0"
            >
                <img
                    src="/img/airboats.png"
                    class=" shadow"
                    alt="portfolio image"
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
            Here's a contact form
        </h2>
        <h4
            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
        >
            Have Any Questions?
        </h4>
        <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
            <p class="font-body text-grey-10">
                Please leave message and I will contact you ASAP:)
            </p>
        </div>
        <form class="mx-auto w-full pt-10 sm:w-3/4">
            <div class="flex flex-col md:flex-row">
                <input
                    class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                    placeholder="Name"
                    type="text"
                    id="name"
                />
                <input
                    class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                    placeholder="Email"
                    type="text"
                    id="email"
                />
            </div>
            <textarea
                class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
                placeholder="Message"
                id="message"
                cols="30"
                rows="10"
            ></textarea>
            <button
                class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
            >
                Send
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
                        My Phone
                    </p>
                </div>
                <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                    <a href = "tel:+380977813910">+38(097) 781 39 10</a>
                </p>
            </div>
            <div
                class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
            >
                <div class="flex items-center">
                    <i class="bx bx-envelope text-2xl text-grey-40"></i>
                    <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                        My Email
                    </p>
                </div>
                <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                    <a href = "mailto:klimworkss@gmail.com">klimworkss@gmail.com</a>
                </p>
            </div>

        </div>
    </div>

</template>

<script>
/* eslint-disable */
// @ is an alias to /src

//Parralax




import dataService from "@/libs/dataService";



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
