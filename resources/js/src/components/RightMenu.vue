<template>
    <div>
        <v-list>
            <v-list-item v-for="(item, index) in items" :key="index">
                <v-list-item-icon>
                    <v-icon v-text="item.icon"></v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <Link
                        :href="item.link"
                        class="text-gray-900"
                        as="button"
                        v-html="item.title"
                        :method="item.title !== 'Log Out' ? 'get':'delete'"
                    />
                    <!-- {{item.title}} -->
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
export default {
    components: {
        Link,
    },
    props: {
        items: {
            type: Array,
            require: true,
            default: [],
        },
        themeColor: {
            type: Boolean,
            require: false,
            default: true,
        },
    },
};
</script>

<style></style>
