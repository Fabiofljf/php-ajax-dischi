import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

/* Bootstrap */
const bootstrap = require('bootstrap')
Vue.use(bootstrap)

new Vue({
    render: h => h(App),
}).$mount('#app')