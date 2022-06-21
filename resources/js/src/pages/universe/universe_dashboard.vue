<template>
    <DefaultLayout>
        
        <div class="grid grid-cols-4 gap-4">
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_1586" 
                    label="WITH 1586">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_8749" 
                    :query_counter_valid="query_permit_8749_valid" 
                    :query_counter_expired="query_permit_8749_expired" 
                    label="WITH 8749 ">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_9275" 
                    :query_counter_valid="query_permit_9275_valid" 
                    :query_counter_expired="query_permit_9275_expired" 
                    label="WITH 9275">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_6969" 
                    label="WITH 6969">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_pco_all" 
                    label="WITH PCO">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_nov_all" 
                    label="WITH NOV">
                </MainDashboard>
            </div>
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
        query_permit_1586: Number,
        query_permit_8749: Number,
        query_permit_9275: Number,
        query_permit_6969: Number,
        query_permit_8749_valid: Number,
        query_permit_9275_valid: Number,
        query_permit_8749_expired: Number,
        query_permit_9275_expired: Number,
        query_pco_all: Number,
        query_nov_all: Number,
    },
    data: () => ({}),
};
</script>
