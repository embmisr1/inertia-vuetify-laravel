<template>
    <DefaultLayout>
        
        <div class="grid grid-cols-4 gap-4">
            <div><MainDashboard :query_counter_active="query_permit_1586" :query_counter_expired="null_value" label="With 1586"></MainDashboard></div>
            <div><MainDashboard :query_counter_active="query_permit_8749" :query_counter_expired="query_permit_8749_expired" label="With 8749 "></MainDashboard></div>
            <div><MainDashboard :query_counter_active="query_permit_9275" :query_counter_expired="query_permit_9275_expired" label="With 9275"></MainDashboard></div>
            <div><MainDashboard :query_counter_active="query_permit_6969" :query_counter_expired="null_value" label="With 6969"></MainDashboard></div>
        </div>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import UniverseDashboard from "../../mixins/universe_dashboard";
import MainDashboard from "./dashboard_cards/main_dashboard_card";
import { Link } from "@inertiajs/inertia-vue";
export default {
    mixins: [
        UniverseDashboard,
    ],
    components: {
        DefaultLayout,
        Link,
        MainDashboard,
    },
    props: {
        null_value: Number,
        query_permit_1586: Number,
        query_permit_8749: Number,
        query_permit_9275: Number,
        query_permit_6969: Number,
        query_permit_8749_expired: Number,
        query_permit_9275_expired: Number,
    },
    data: () => ({}),
};
</script>
