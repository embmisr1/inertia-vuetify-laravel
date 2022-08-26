<template>
    <div class="font-bold text-2xl flex items-center">
        <b-tooltip label="Back" type="is-dark" :delay="2000">
            <Link :href="`${route}`" class="px-3">
                <box-icon name="arrow-back" animation="tada-hover"></box-icon>
            </Link>
        </b-tooltip>
        {{ title }}
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
export default {
    props: {
        route: String,
        title: String,
    },
    components: {
        Link,
    },
};
</script>

<style></style>
