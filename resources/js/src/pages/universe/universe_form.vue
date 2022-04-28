<template>
    <DefaultLayout>
            <MainTab :form_basic_info="form_basic_info" :submit_basic_info="submit_basic_info"></MainTab>
        <!-- {{query}} -->
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
// import ModalConfirm from "./modals/confirm_modal";
import MainTab from "./tabs/main_tab";
import BasicInfo from "../../mixins/basic_info";
import { Link } from "@inertiajs/inertia-vue";
// import _ from "lodash";
export default {
    mixins: [
        BasicInfo,
    ],
    components: {
        DefaultLayout,
        Link,
        MainTab,
        // ModalConfirm,
    },
    props: {
        query: Object,
    },
    data: () => ({}),
};
</script>
