<template>
  <VueHeader></VueHeader>
  <router-view/>
  <VueFooter></VueFooter>
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

</style>

<script>
import VueHeader from "@/components/VueHeader";
export default {
    components: {VueHeader}
}
</script>
