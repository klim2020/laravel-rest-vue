<template>
    <div id="langselector" class="flex justify-center">
        <div>
            <div class="dropdown relative">
                <button
         class="
          dropdown-toggle
          px-6
          py-2.5
          bg-emerald-500
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-emerald-600 hover:shadow-lg
          focus:bg-emerald-600 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-emerald-900 active:shadow-lg active:text-white
          transition
          duration-150
          ease-in-out
          flex
          items-center
          whitespace-nowrap
        "
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    @click.stop = "this.expand=!this.expand;"
                >
                    <span>Dropdown button</span>
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="caret-down"
                        class="w-2 ml-2"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                    >
                        <path
                            fill="currentColor"
                            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                        ></path>
                    </svg>
                </button>
                <ul v-if = "expand"
                    class="
                      dropdown-menu
                      min-w-max
                      absolute

                      bg-white
                      text-base
                      z-50
                      float-left
                      py-2
                      list-none
                      text-left
                      rounded-lg
                      shadow-lg
                      mt-1

                      m-0
                      bg-clip-padding
                      border-none
                    "
                    aria-labelledby="dropdownMenuButton1"
                >
                    <li v-for="item in lang" :key="item.code" @click.prevent = "selectLanguage(item);" >
                        <a
                            class="
                                  dropdown-item
                                  text-sm
                                  py-2
                                  px-4
                                  font-normal
                                  block
                                  w-full
                                  whitespace-nowrap
                                  bg-transparent
                                  text-gray-700
                                  hover:bg-gray-100
                                "
                            href="#">

                            <span :class="item.class"></span> {{ item.name }}
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>


</template>

<script>
import 'flag-icons/css/flag-icons.min.css';


export default {



    props:{

    },
    emits: ['languageChange'],
    name: "LanguageSelector",
    beforeMount(){

    },
    data(){
      return {
          lang:[
              {name:"Язык",code:"ru",flag:"🇷🇺",class:"fi fi-ru"},
              {name:"Мова",code:"ua",flag:"🇺🇦",class:"fi fi-ua"},
              {name:"Language",code:"en",flag:"🇺🇸",class:"fi fi-gb"},
              {name:"Język",code:"pl",flag:"🇵🇱",class:"fi fi-pl"},
          ],
        expand : false,

        }
    },
    mounted() {
        window.addEventListener('click', this.registerOutsideClick);
        this.selectLanguage(this.lang[1]);

    },
    unmounted() {
        window.removeEventListener('click', this.registerOutsideClick);

    },
    methods:{
        registerOutsideClick(e){
            if (!document.querySelector("#langselector").contains(e.target)){
                this.expand = false;
            }
        },
        selectLanguage(lang){
            document.querySelector("#dropdownMenuButton1 span").innerHTML = `<span class="${lang.class}"></span> ${lang.name}`;
            this.expand = false;
            this.$emit('languageChange',lang);

        }
    }

}
</script>

<style scoped>

</style>
