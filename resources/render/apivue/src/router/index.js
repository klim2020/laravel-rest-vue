import {createRouter, createWebHistory} from 'vue-router'
import Home from '../views/Home.vue'
//import SimpleData from "@/components/SimpleData";
import CV from '../components/cv/CV'

const routes = [
  {
    path: '/:lang*',
    name: 'Home',
    component: Home
  },
  //{
//    path: '/about/:lang*',
//    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
//    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
//  },

 // {
 //   path:'/data/:lang*',
 //   name:'SimpleData',
 //   component: SimpleData
 // },
    {
        path:'/cv/:lang*',
        name:'CV',
        component: CV,

    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
