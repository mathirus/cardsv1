require('./bootstrap');
import {createApp} from 'vue'


import Home from './components/Home';
import Crear from './components/Crear';





const app = createApp({
    components: {
        Home,
        Crear
    }
});

app.mount("#app");
