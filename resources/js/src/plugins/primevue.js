import Vue from "vue";
import PrimeVue from "primevue/config";
import "primevue/resources/themes/saga-blue/theme.css";
import "primevue/resources/primevue.min.css";
import "primeicons/primeicons.css";
import InputMask from "primevue/inputmask";
import Chart from 'primevue/chart';


Vue.use(PrimeVue, { ripple: true });
Vue.component("InputMask", InputMask);
Vue.component("Chart", Chart);
