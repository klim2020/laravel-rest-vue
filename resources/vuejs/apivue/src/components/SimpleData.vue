<template>
    
    <BeakerIcon class="h-5 w-5 text-blue-500"/>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Author Name</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <a v-on:click = "sort('name', $event)" href ="#">Title</a>
                                <div class = "inline-block">
                                    <svg v-if="ascend" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3" />
                                    </svg>
                                    <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7l4-4m0 0l4 4m-4-4v18" />
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Created at</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="val in data" :key = "val.id">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" :src="url+'/'+val.authors.image" alt="">
                                    </div>

                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ val.authors.name }}</div>
                                    <div class="text-sm text-gray-500">jane.cooper@example.com</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ val.name }}</div>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> {{ val.created_at }} </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"></td>

                        </tr>

                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { BeakerIcon } from '@heroicons/vue/solid';
import dataProvider from '/src/libs/dataProvider';
export default {

    name: "SimpleData",
    components: { BeakerIcon },
    data:function(){
        return{
            ascend:false,
            data:'',
            url:dataProvider.url
        }
    },
    mounted(){
        dataProvider.getSimpleData().then(data => {
            console.log(data);
            this.data = data;
        });

    },
    methods:{
        sort: function (type) {
            this.data.sort((a,b)=>{
                if (this.ascend === true){

                    return (a[type] > b[type] ? 1 : (a[type] === b[type] ? 0 : -1));
                }else {
                    return (b[type] > a[type] ? 1 : (a[type] === b[type] ? 0 : -1));
                }
                //;

            });
            this.ascend = !this.ascend;

        }
    }
}
</script>

<style scoped>
#sss:hover {
    background-color: black;
}
</style>
