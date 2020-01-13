import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
//import BootstrapVue from 'bootstrap-vue'

//Vue.use(BootstrapVue)

//import 'bootstrap/dist/css/bootstrap.css'
//import 'bootstrap-vue/dist/bootstrap-vue.css'
var truncate = function(text, length, clamp){
  clamp = clamp || '...';
  var node = document.createElement('div');
  node.innerHTML = text;
  var content = node.textContent;
  return content.length > length ? content.slice(0, length) + clamp : content;
};

Vue.filter('truncate', truncate);

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')