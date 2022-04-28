<template>
    <div class=" b-4  w-full bg-gray-200 rounded-full dark:bg-gray-700 h-4">
        <div  ref = "bar" :class="progressColor" class="text-xs font-medium  text-center font-bold p-0.5 leading-none rounded-full" :style="{width: percent+'%'}">
            {{ percent }}%</div>
    </div>
</template>

<style scope="scss"></style>

<script>

export default {
    props:{
        percent:Number
    },
    computed: {
        progressColor () {
            //let color = 'bg-blue-800';

            if (this.percent >= 0 && this.percent < 20 ){
                return {'bg-red-900 text-white':true};
            }else if(this.percent < 30)
            {
                return {'bg-red-700 text-white':true};
            }else if(this.percent < 40)
            {
                return {'bg-yellow-700 text-black':true};
            }else if(this.percent < 50)
            {
                return {'bg-yellow-600 text-black':true};
            }else if(this.percent <= 60)
            {
                return {'bg-yellow-500 text-black':true};
            }else if(this.percent <= 70)
            {
                return {'bg-green-600 text-white':true};
            }else if(this.percent < 90)
            {
                return {'bg-green-700 text-white':true};
            }else if(this.percent <= 100)
            {
                return 'bg-green-700 text-white';
            }
            return 'bg-green-900';

        }
    },
    name: "ProgressBar",
    mounted() {


    },
}
</script>
