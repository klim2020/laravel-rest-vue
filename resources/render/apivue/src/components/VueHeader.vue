<template>

        <div :class="{'sticky top-0':scrolled}"
             :style="{'top':'-'+(!scrolled)*100+'px'}"
             style="z-index:99999" class="bg-emerald-400 text-white
                                                            transition-all ease-in-out delay-300 duration-2000
                                                            ">

            <nav class="flex container mx-auto px-5 py-5">
                <ul class="flex flex-grow space-x-4">
                    <li>
                        <a
                            href="/"
                            class="flex items-center space-x-3 text-gray-700 md:mr-5"
                        >
              <span
                  class="text-white hover:text-gray-300 text-2xl font-semibold py-1"
              >klim.ml</span
              >
                        </a>
                    </li>
                </ul>
                <ul class="flex items-center space-x-5">
                    <li class="hidden sm:flex">
                         <router-link class="text-white hover:text-gray-400 text font-semibold py-1 px-3" to="/">Home</router-link>
                    </li>
                    <li class="hidden sm:flex">
                        <router-link class="text-white hover:text-gray-400 text font-semibold py-1 px-3" to="/cv">Portfolio</router-link>
                    </li>
         <!--       <li class="hidden sm:flex">
                        <router-link class="text-white hover:text-gray-400 text font-semibold py-1 px-3" to="/about">About</router-link>
                    </li> -->
          <!--      <li class="hidden sm:flex">
                        <div class="dropdown inline-block relative">
                             <button class="text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                  <span class="mr-1">Articles</span>
                                  <svg class="fill-current h-4 w-4 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                              </button>
                              <ul class="bg-emerald-400 dropdown-menu absolute hidden text-white pt-1
                                                 ">
                                  <li class=""><a class="rounded-t bg-emerald-400 hover:text-gray-400 text font-semibold py-2 px-4 block whitespace-no-wrap" href="#">One</a></li>
                                  <li class=""><a class="bg-emerald-400 hover:text-gray-400 text font-semibold py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
                                  <li class=""><a class="rounded-b bg-emerald-400 hover:text-gray-400 text font-semibold py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
                              </ul>
                        </div>
                    </li>-->
                </ul>
                <ul class="flex grow md:grow-0 space-x-4">
                    <LanguageSelector  @languageChange="onSwitchlanguage"></LanguageSelector>
                </ul>
                <ul class="flex sm:hidden" @click="showMenu = !showMenu">
                    <li>
                        <a href="#" class="flex-none absolute right-0 px-5 z-30"
                        >
                            <p
                                class="text-white font-semibold tracking-wide hover:bg-gray-900 hover:bg-opacity-30 rounded px-2 py-2"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16m-7 6h7"
                                    ></path>
                                </svg>
                            </p
                            >
                        </a>
                        <div
                            class="absolute top-0 right-0 z-10 h-screen w-full bg-black transition"
                            :class="{
              'invisible opacity-0': !showMenu,
              'visible opacity-40': showMenu,
              }"
                        ></div>
                        <div
                            class="absolute right-0 z-20 w-full px-5 mt-16 transition"
                            :class="{
              'invisible opacity-0': !showMenu,
              'visible opacity-100': showMenu,
              }"
                        >
                            <ul
                                class="flex flex-col bg-gray-100 w-full rounded shadow-md overflow-hidden"
                            >
                                <li class="flex">
                                    <h3 class="flex flex-1 text-gray-600 font-semibold px-5 py-4">
                                        Navigation
                                    </h3>
                                </li>
                                <li class="flex border-t">
                                    <a
                                        href="/"
                                        class="flex flex-1 text-lg text-gray-700 hover:bg-white font-semibold px-8 py-4"
                                    >Home</a
                                    >
                                </li>
                                <li class="flex">
                                    <a
                                        href="/cv"
                                        class="flex flex-1 text-lg text-gray-700 hover:bg-white font-semibold px-8 py-4"
                                    >Portfolio</a
                                    >
                                </li>
                                <li class="flex">
                                    <a
                                        href="/"
                                        class="flex flex-1 text-lg text-gray-700 hover:bg-white font-semibold px-8 py-4"
                                    >Articles</a
                                    >
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>


</template>

<script>
import LanguageSelector from "@/components/LanguageSelector";
import languageProvider from "@/libs/languageProvider";
export default {
    name: "VueHeader",
    components: {LanguageSelector},
    data(){
        return{
            showMenu: false,
            scrolled:false
        }
    },

    beforeMount () {
        window.addEventListener('scroll', this.handleScroll);
    },

    methods:{
        handleScroll(){
            if(window.scrollY>120){

                if(!this.scrolled) this.scrolled = true
            }else{

                if(this.scrolled) this.scrolled = false
            }
        },
        onSwitchlanguage(lang){
            this.$router.push({  params: { lang: lang.code } });
            languageProvider.changeLanguage(lang);
        }
    }
}
</script>

<style scoped lang='scss'>
.router-link-active{
    @apply text-gray-600;
}

.dropdown:hover .dropdown-menu {
    display: block;
}
#nav {
    padding: 30px;

    a {
        font-weight: bold;
        color: #2c3e50;

        &.router-link-exact-active {
         color: #42b983;
     }
    }
}
.wrapper {
    background-color:lightgreen;
}
</style>
