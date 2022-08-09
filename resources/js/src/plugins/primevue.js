import Vue from "vue";
import PrimeVue from "primevue/config";
import "primevue/resources/themes/saga-blue/theme.css";
import "primevue/resources/primevue.min.css";
import "primeicons/primeicons.css";
import Dialog from "primevue/dialog";
import FileUpload from "primevue/fileupload";
import Calendar from "primevue/calendar";

Vue.use(PrimeVue, { ripple: true });

Vue.component("Dialog", Dialog);
Vue.component("FileUpload", FileUpload);
Vue.component("Calendar", Calendar);
