import './bootstrap';

import {createApp} from 'vue'
import router from './component/router.js'
import App from './component/App.vue'

createApp(App).use(router).mount("#app")
