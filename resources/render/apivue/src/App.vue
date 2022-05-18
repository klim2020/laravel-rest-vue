<template>
  <VueHeader ></VueHeader>
  <router-view  class = "flex-1"/>
  <VueFooter></VueFooter>
</template>

<style lang="scss">

#app {
  @apply flex flex-col min-h-screen;
}
.container {
    flex: 1; //or 1 0 auto
}
#footer {
    flex-shrink: 0;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

</style>

<script>
import VueFooter from "@/components/VueFooter";
import VueHeader from "@/components/VueHeader";

export default {
    components: {VueHeader , VueFooter},
    data(){
        return{
            msg:"hello wor;ls"
        }
    },




}
</script>
