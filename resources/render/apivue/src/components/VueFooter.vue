<template>

<footer id="footer" class="bg-emerald-400">
<div class="powered">
    <p>powered by <a href="https://vuejs.org">VueJs</a>  & <a href="https://www.laravel.com">Laravel</a> </p>
</div>
<div class="copyright">
    <p>Copyright © by Klim Mansurov 2022</p>
</div>

</footer>
</template>

<script>

export default {
    name: "VueFooter",

}
</script>

<style scoped lang="scss">

 #footer {
     display:flex;
     flex-direction:column;
     justify-content:center;
     height:100px;


    a {
        font-weight: bold;
        color: #2c3e50;
    }


 }
</style>
