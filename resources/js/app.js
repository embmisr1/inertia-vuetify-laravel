import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
// import Vuetify from 'vuetify'
// import 'vuetify/dist/vuetify.min.css'
import vuetify from './src/plugins/vuetify'
import buefy from './src/plugins/buefy'

InertiaProgress.init()
// Vue.use(Vuetify)
createInertiaApp({
  // resolve: name => require(`./Pages/${name}`),
  resolve: name => import(`./src/${name}`),
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)

    new Vue({
      vuetify,
      buefy,
      render: h => h(App, props),
    }).$mount(el)
  },
})