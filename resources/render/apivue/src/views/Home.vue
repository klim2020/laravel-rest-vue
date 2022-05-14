<template>
    <!-- This is an example component -->
    <div class="w-full h-screen bg-fixed bg-center bg-no-repeat bg-cover" :style="{'background-image': `url(${this.image})`}">
        <div class="w-full h-screen backdrop-blur backdrop-contrast-50 bg-opacity-50 bg-black flex justify-center items-center">
            <div class="mx-4 backdrop-brightness-125  p-8 text-center text-white">
                <h1 class=" font-mono font-bold  text-6xl mb-4">Hello Everyone</h1>
                <h2 class=" font-mono font-bold text-3xl mb-12">I'am Klim</h2>
                <p class="font-mono font-bold text-xl mb-12"> And this is my programmers blog</p>
                <div>
                    <router-link class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2" :to="{ path: '/cv' }">
                        Check portfolio</router-link>

                    <a href="" class="bg-green-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-red-600 ml-2">
                        Go next
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
/* eslint-disable */
// @ is an alias to /src


export default {
  name: 'Home',
  methods: {
     // геттер вычисляемого значения
     getRand: function () {
         // `this` указывает на экземпляр vm
         return 'paralax'+Math.floor(Math.random() * 10)+'.jpg';
     }
  },
    data(){
      return{
          image:'./paralax1.jpg'
      }
    },
  beforeMount(){
    this.image = './img/'+this.getRand();
  }

}
</script>
