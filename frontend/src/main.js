// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import VueEllipseProgress from 'vue-ellipse-progress'
import { store } from './store/store'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';


const options = {
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  toast: true,
};

Vue.use(VueSweetalert2, options);
Vue.use(VueEllipseProgress);
Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
