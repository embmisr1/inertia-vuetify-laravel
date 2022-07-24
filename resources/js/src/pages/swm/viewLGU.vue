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
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <a
                                :href="`/app/swm/lce_edit/${lce_id}`"
                                target="_blank"
                                ><v-btn color="orange lighten-2"
                                    >Update LCE</v-btn
                                ></a
                            >
                        </v-card-actions>
                    </v-card>
                </v-container>
            </v-tab-item>
            <v-tab-item>
                <v-container>
                    <a
                        :href="`/app/swm/slf_register/${lce_id}`"
                        target="_blank"
                    >
                        <v-btn dark>Add SLF</v-btn>
                    </a>
                </v-container>
                <b-table
                    :data=""
                    paginated
                    :per-page="lce_list.per_page"
                    pagination-size="is-small"
                    page-input
                    hoverable
                    backend-pagination
                    :total="lce_list.total"
                    :current-page.sync="lce_list.current_page"
                    pagination-position="top"
                    pagination-rounded
                    @page-change="onPageChange"
                    narrowed
                    :loading="loading"
                    bordered
                    sticky-header
                    scrollable
                    :row-class="
                        (row, index) => (isTheme ? 'bg-black text-white' : '')
                    "
                    :header-class="isTheme ? 'bg-black text-white' : ''"
                    height="420"
                >
                    <b-table-column
                        field="province"
                        label="Province"
                        searchable
                    >
                        <template #searchable="props">
                            <b-input
                                v-model="filters.provDesc"
                                placeholder="Search..."
                                icon="magnify"
                                size="is-small"
                            />
                        </template>
                        <template v-slot="props">
                            {{ props.row.provDesc }}
                        </template>
                    </b-table-column>
                    <b-table-column
                        field="municipality"
                        label="Municipality"
                        searchable
                    >
                        <template #searchable="props">
                            <b-input
                                v-model="filters.citymunDesc"
                                placeholder="Search..."
                                icon="magnify"
                                size="is-small"
                            />
                        </template>
                        <template v-slot="props">
                            {{ props.row.citymunDesc }}
                        </template>
                    </b-table-column>
                    <b-table-column
                        field="barangay"
                        label="Barangay"
                        searchable
                    >
                        <template #searchable="props">
                            <b-input
                                v-model="filters.brgyDesc"
                                placeholder="Search..."
                                icon="magnify"
                                size="is-small"
                            />
                        </template>
                        <template v-slot="props">
                            {{ props.row.brgyDesc }}
                        </template>
                    </b-table-column>

                    <b-table-column
                        field="district"
                        label="District Code"
                        searchable
                    >
                        <template #searchable="props">
                            <b-input
                                v-model="filters.districtCode"
                                placeholder="Search..."
                                icon="magnify"
                                size="is-small"
                            />
                        </template>
                        <template v-slot="props">
                            {{ props.row.districtCode }}
                        </template>
                    </b-table-column>

                    <b-table-column
                        field="action"
                        label=""
                        sortable
                        v-slot="props"
                    >
                        <a
                            :href="`/app/swm/lce_show/${props.row.id}`"
                            target="_blank"
                        >
                            <box-icon
                                name="edit"
                                color="orange"
                                animation="tada-hover"
                            ></box-icon
                        ></a>
                        <v-btn icon small
                            ><box-icon
                                name="trash"
                                color="red"
                                animation="tada-hover"
                            ></box-icon
                        ></v-btn>
                    </b-table-column>
                    <template #empty>
                        <div
                            class="text-center text-3xl text-gray-500 font-extrabold"
                        >
                            No lce_list Found
                        </div>
                    </template>
                </b-table>
            </v-tab-item>
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
