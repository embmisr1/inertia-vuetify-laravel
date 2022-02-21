// import { createApp, h } from 'vue'
// import { createInertiaApp } from '@inertiajs/inertia-vue3'
// import { InertiaProgress } from '@inertiajs/progress'

// InertiaProgress.init()

// createInertiaApp({
//   resolve: name => import(`./src/${name}`),
//   setup({ el, App, props, plugin }) {
//     createApp({ render: () => h(App, props) })
//       .use(plugin)
//       .mount(el)
//   },
// })

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import vuetify from './src/plugins/vuetify'
import buefy from './src/plugins/buefy'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()

createInertiaApp({
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