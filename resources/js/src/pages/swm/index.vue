<template>
    <DefaultLayout>
        <Link href="rce_register_process">Add LCE</Link>
        {{lce_list}}
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../mixins/";
export default {
    props:{
        lce_list:Object
    },
    components: {
        DefaultLayout,
        Link,
    },
    mixins: [page, toasts, swm, dialogs],
    methods: {
        async saveLCEForm() {
            try {
                const data = { ...this.lce };
                await this.$inertia.post("/app/swm/rce_register_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.dat.response.messsage);
            }
        },
    },
};
</script>

<style></style>
