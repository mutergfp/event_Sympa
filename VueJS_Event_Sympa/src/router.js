import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Event from './views/Event.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/Event/:id',
      name: 'Event',
      component: Event
    }
  ]
})
