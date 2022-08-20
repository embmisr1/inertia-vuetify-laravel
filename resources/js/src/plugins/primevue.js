import Vue from "vue";
import PrimeVue from "primevue/config";
import "primevue/resources/primevue.min.css";
import "primeicons/primeicons.css";
import InputMask from "primevue/inputmask";

Vue.use(PrimeVue, { ripple: true });
Vue.component("InputMask", InputMask);
