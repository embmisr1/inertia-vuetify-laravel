<template>
    <DefaultLayout>
        <v-toolbar flat dark>
            <v-toolbar-title>User Profile</v-toolbar-title>
        </v-toolbar>

        <v-tabs
            vertical
            show-arrows
            active-class="black"
            background-color="primary"
            class="h-fit"
        >
            <v-tab v-for="n in tabs" :key="n">{{ n }} </v-tab>

            <v-tab-item active-class="bg-#F4F5FA">
                <v-container>
                    <v-card>
                        <v-card-text class="grid grid-cols-5 gap-x-2">
                            <div class="col-span-1">
                                <box-icon
                                    pull="burst"
                                    type="solid"
                                    name="user-account"
                                    size="200px"
                                    border="square"
                                ></box-icon>
                            </div>

                            <div class="col-span-4 font-extrabold">
                                <div class="pl-2">
                                    <div>Name</div>
                                    <div>
                                        <span class="text-sm italic"
                                            >{{ this.lce_details.lce_title }}.
                                        </span>
                                        <span class="text-black text-2xl">{{
                                            lce_complete_name
                                        }}</span>
                                    </div>
                                </div>
                                <div class="pl-2 text-black">
                                    <span class="text-sm italic"
                                        >{{ this.lce_details.lce_salutation }}.
                                    </span>
                                    <span class="text-sm italic"
                                        >{{ this.lce_details.lce_position }}.
                                    </span>
                                </div>
                                <div>
                                    <div class="text-sm italic">Address:</div>
                                    <span class="text-xl italic pl-2 text-black"
                                        >{{ lce_address }}
                                    </span>
                                </div>

                                <div class="py-4">
                                    <div class="text-black">
                                        <p>Focal Person</p>
                                    </div>
                                    <div>
                                        <div>
                                            Name:
                                            <span
                                                class="font-bold text-lg text-black"
                                                >{{
                                                    lce_details.lce_focal_person
                                                }}</span
                                            >
                                        </div>
                                        <div>
                                            Contact No.:
                                            <span
                                                class="font-bold text-lg text-black"
                                                >{{
                                                    lce_details.lce_contact_number
                                                }}</span
                                            >
                                        </div>
                                        <div>
                                            Email:
                                            <span
                                                class="font-bold text-lg text-black"
                                                >{{
                                                    lce_details.lce_email_address
                                                }}</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </v-card-text>
                    </v-card>
                </v-container>
            </v-tab-item>
            <v-tab-item>
                <v-container>
                    <a href="/app/swm/slf_create" target="_blank">
                        <v-btn dark>Add SLF</v-btn>
                    </a>
                </v-container></v-tab-item
            >
            <v-tab-item> </v-tab-item>
        </v-tabs>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../mixins/";
export default {
    props: {
        lce_edit: Array,
    },
    components: {
        DefaultLayout,
        Link,
    },
    mixins: [page, toasts, swm, dialogs],
    data() {
        return {
            tabs: ["LCE", "SLF", ""],
        };
    },
};
</script>

<style></style>
