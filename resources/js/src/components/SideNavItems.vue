<template>
    <div>
        <v-list
            v-for="(item, index) in items"
            :key="index"
            dense
            class="overflow-hidden"
        >
            <v-subheader>{{ item.header }}</v-subheader>
            <v-list-group
                v-for="(child, i) in item.child"
                :key="i"
                dark
                :prepend-icon="child.icon"
                :value="false"
                :append-icon="child.child.length ? 'mdi-chevron-down' : null"
            >
                <template v-slot:activator>
                    <v-list-item-content>
                        <v-list-item-subtitle
                            v-if="!child.link"
                            v-text="child.name"
                        ></v-list-item-subtitle>
                        <v-list-item-subtitle v-else>
                            <Link :href="child.link" as="button" preserve-scroll>{{ child.name }}</Link>
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </template>
                <v-list-item
                    v-for="childItem in child.child"
                    :key="childItem.name"
                    dense
                >
                    <v-list-item-icon>
                        <v-icon>
                            {{ childItem.icon }}
                        </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title
                            v-text="childItem.name"
                        ></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list-group>
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
        },
    },
    data() {
        return {
            selected: 0,
            admins: [
                ["Management", "mdi-account-multiple-outline"],
                ["Settings", "mdi-cog-outline"],
            ],
            cruds: [
                ["Create", "mdi-plus-outline"],
                ["Read", "mdi-file-outline"],
                ["Update", "mdi-update"],
                ["Delete", "mdi-delete"],
            ],
        };
    },
};
</script>

<style></style>
