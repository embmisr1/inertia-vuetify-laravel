<template>
    <DefaultLayout :access="access">
        Individual Logs
        {{all_logs}}
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
    sample: String,
  },
};
</script>
