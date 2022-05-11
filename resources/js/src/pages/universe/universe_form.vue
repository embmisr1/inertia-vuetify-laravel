<template>
    <DefaultLayout>
        <MainTab
            :form_permit_info="form_permit_info" 
            :form_basic_info="form_basic_info" 
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
    },
    data: () => ({}),
};
</script>
