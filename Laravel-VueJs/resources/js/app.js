

require('./bootstrap');
import {createApp} from 'vue';
let app = createApp({});
app.component('register-component',require('./components/Register.vue').default);
app.mount('#app');
export default app;
