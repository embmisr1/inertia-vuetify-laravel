<template>
    <DefaultLayout>
        <MainTab
            :form_basic_info="form_basic_info" 
            :form_permit_info="form_permit_info" 
            :form_monitoring_info="form_monitoring_info" 
            :form_legal_info="form_legal_info" 
            :form_hazwaste_info="form_hazwaste_info" 

            :permit_table="permit_table"
            :monitoring_table="monitoring_table"
            :legal_table="legal_table"
            :hazwaste_table="hazwaste_table"
            
            :submit_basic_info="submit_basic_info"
        ></MainTab>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import MainTab from "./tabs/main_tab";
import UniverseInfo from "../../mixins/universe_info";
import { Link } from "@inertiajs/inertia-vue";
export default {
    mixins: [
        UniverseInfo,
    ],
    components: {
        DefaultLayout,
        Link,
        MainTab,
    },
    props: {
        query: Object,
        permit_table: Array,
        monitoring_table: Array,
        legal_table: Array,
        hazwaste_table: Array,
    },
    data: () => ({}),
};
</script>
