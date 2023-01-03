<template>
    <DefaultLayout :access="access">
        <b-field label="INDIVIDUAL ACTIVITIES">
        </b-field>
            <v-data-table
                dense
                :headers="headers"
                :items="all_logs"
                item-key="all_logs"
                class="elevation-1"
            >
            </v-data-table>
    </DefaultLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
import { page, toasts } from "../../mixins/";
export default {
  mixins: [page, toasts],
  components: {
    DefaultLayout,
    Link,
  },
  props: {
    data: Object,
    filters: Object,
    all_logs: Array,
  },
    data: () => ({
        headers: [
            {
                text: "Category",
                align: "start",
                sortable: false,
                value: "model",
            },
            {
                text: "Activities",
                align: "start",
                sortable: false,
                value: "activity_count",
            },
        ],

    }),
};
</script>
