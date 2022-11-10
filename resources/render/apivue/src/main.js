import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { input_mask } from './directives/input-mask';



import '../index.css'

//notifications
import Toast from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";



let app = createApp(App);

app.directive('input-mask', input_mask);

app = app.use(router);

const options = {
    // You can set your default options here
};

app.use(Toast, options);


app.mount('#app');






