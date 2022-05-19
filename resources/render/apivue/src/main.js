import { createApp } from 'vue'
import App from './App.vue'
import router from './router'




import '../index.css'

//notifications
import Toast from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";



let app = createApp(App);



app = app.use(router);

const options = {
    // You can set your default options here
};

app.use(Toast, options);


app.mount('#app');






