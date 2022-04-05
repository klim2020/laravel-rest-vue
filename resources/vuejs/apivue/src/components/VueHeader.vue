<template>
    <div class ="wrapper">
        <div id="nav">
            <router-link to="/">Home</router-link> |
            <router-link to="/about">About</router-link> |
            <router-link to="/data">Data</router-link> |
            <router-link to ="/cv">Portfolio</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "VueHeader"
}
</script>

<style scoped lang='scss'>
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
