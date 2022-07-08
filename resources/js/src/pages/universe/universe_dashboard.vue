<template>
    <DefaultLayout>
        
        <div class="grid grid-cols-5 gap-5 mb-5">
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_9275" 
                    :query_counter_valid="query_permit_9275_valid" 
                    :query_counter_expired="query_permit_9275_expired" 
                    :query_counter_undefined="query_permit_9275_undefined" 
                    :firm_type="firm_type" 
                    label="WITH 9275">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_8749" 
                    :query_counter_valid="query_permit_8749_valid" 
                    :query_counter_expired="query_permit_8749_expired" 
                    :query_counter_undefined="query_permit_8749_undefined" 
                    :firm_type="firm_type" 
                    label="WITH 8749">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_6969" 
                    :firm_type="firm_type" 
                    label="WITH 6969">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_permit_1586" 
                    :firm_type="firm_type" 
                    label="WITH 1586">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_registered_industries" 
                    :firm_type="firm_type" 
                    label="REGISTERED FIRMS">
                </MainDashboard>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-5">
            <div>
                <MainDashboard 
                    :query_counter_total="query_monitoring_all" 
                    :query_counter_1586="query_monitoring_1586" 
                    :query_counter_8749="query_monitoring_8749" 
                    :query_counter_9275="query_monitoring_9275" 
                    :query_counter_6969="query_monitoring_6969" 
                    :query_counter_9003="query_monitoring_9003" 
                    :firm_type="firm_type" 
                    label="MONITORING">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_nov_all" 
                    :query_counter_1586="query_nov_1586" 
                    :query_counter_8749="query_nov_8749" 
                    :query_counter_9275="query_nov_9275" 
                    :query_counter_6969="query_nov_6969" 
                    :query_counter_9003="query_nov_9003" 
                    :firm_type="firm_type" 
                    label="WITH NOV">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_order_issued" 
                    :firm_type="firm_type" 
                    label="WITH ORDER">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_pco_all" 
                    :firm_type="firm_type" 
                    label="WITH PCO">
                </MainDashboard>
            </div>
            <div>
                <MainDashboard 
                    :query_counter_total="query_complaint" 
                    :firm_type="firm_type" 
                    label="COMPLAINT">
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
        firm_type: String,
        query_registered_industries: Number,
        query_all_firm: Number,
        query_permit_1586: Number,
        query_permit_8749: Number,
        query_permit_9275: Number,
        query_permit_6969: Number,
        query_permit_8749_valid: Number,
        query_permit_9275_valid: Number,
        query_permit_8749_expired: Number,
        query_permit_9275_expired: Number,
        query_permit_8749_undefined: Number,
        query_permit_9275_undefined: Number,
        query_pco_all: Number,
        query_nov_all: Number,
        query_nov_1586: Number,
        query_nov_8749: Number,
        query_nov_9275: Number,
        query_nov_6969: Number,
        query_nov_9003: Number,
        query_order_issued: Number,
        query_monitoring_all: Number,
        query_monitoring_1586: Number,
        query_monitoring_8749: Number,
        query_monitoring_9275: Number,
        query_monitoring_6969: Number,
        query_monitoring_9003: Number,
        query_complaint: Number,
    },
    data: () => ({}),
};
</script>
