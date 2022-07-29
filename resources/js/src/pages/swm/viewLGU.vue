<template>
    <DefaultLayout>
        <v-toolbar flat dark>
            <v-toolbar-title>User Profile </v-toolbar-title>
        </v-toolbar>

        <v-tabs
            vertical
            show-arrows
            active-class="black"
            background-color="primary"
            class="h-96"
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
                            <div class="space-x-4">
                                <Link
                                v-if="!query_closed_dumpsite_id"
                                :href="`/app/swm/cd_register/${lce_id}`"

                                ><v-btn border outlined color="red lighten-2"
                                    >Close Dumpsite</v-btn
                                ></Link
                            >
                            <Link
                                v-else
                                :href="`/app/swm/cd_edit/${query_closed_dumpsite_id}`"

                                ><v-btn border outlined color="red lighten-2"
                                    >Close Dumpsite</v-btn
                                ></Link
                            >
                            <Link
                                :href="`/app/swm/lce_edit/${lce_id}`"

                                ><v-btn color="orange lighten-2"
                                    >Update LCE</v-btn
                                ></Link>
                            </div>
                        </v-card-actions>
                    </v-card>
                </v-container>
            </v-tab-item>
            <v-tab-item>
                <v-container>
                    <a
                        :href="`/app/swm/slf_register/${lce_id}`"

                    >
                        <v-btn dark>Add SLF</v-btn>
                    </a>
                    <b-table
                        :data="query_slf"

                        :per-page="query_slf.per_page"
                        pagination-size="is-small"
                        page-input
                        hoverable
                        backend-pagination
                        :total="query_slf.total"
                        :current-page.sync="query_slf.current_page"
                        pagination-position="top"
                        pagination-rounded
                        @page-change="onPageChange"
                        narrowed
                        :loading="loading"
                        bordered
                        sticky-header
                        scrollable
                        :row-class="
                            (row, index) =>
                                isTheme ? 'bg-black text-white' : ''
                        "
                        :header-class="isTheme ? 'bg-black text-white' : ''"
                        height="420"
                    >
                        <b-table-column
                            field="slf_ecc_number"
                            label="ECC Number"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_ecc_number }}
                            </template>
                        </b-table-column>
                        <b-table-column
                            field="slf_project_operator"
                            label="Project Operator"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_project_operator }}
                            </template>
                        </b-table-column>
                        <b-table-column
                            field="slf_contact_person"
                            label="Contact Person"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_contact_person }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="slf_contact_number"
                            label="Contact Number"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_contact_number }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="slf_category"
                            label="Category"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_category }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="slf_site_hectares"
                            label="Site Hectares(ha)"
                        >
                            <template #searchable="props">
                                <b-input
                                    lce_cityMun_id
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_site_hectares }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="slf_total_capacity"
                            label="Site Total Capacity"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.slf_total_capacity }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="action"
                            label=""
                            v-slot="props"
                        >
                            <Link
                                :href="`/app/swm/slf_edit/${props.row.id}`"

                            >
                                <box-icon
                                    name="edit"
                                    color="orange"
                                    animation="tada-hover"
                                ></box-icon
                            ></Link>
                            <v-btn icon small @click="removeSLF(props.row.id)"
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
                </v-container>
            </v-tab-item>
            <v-tab-item
                ><v-container>
                    <a
                        :href="`/app/swm/mrf_register/${lce_id}?form_type=mrf`"

                    >
                        <v-btn dark>Add MRF</v-btn>
                    </a>
                    <b-table
                        :data="query_mrf"

                        :per-page="query_mrf.per_page"
                        pagination-size="is-small"
                        page-input
                        hoverable
                        backend-pagination
                        :total="query_mrf.total"
                        :current-page.sync="query_mrf.current_page"
                        pagination-position="top"
                        pagination-rounded
                        @page-change="onPageChange"
                        narrowed
                        :loading="loading"
                        bordered
                        sticky-header
                        scrollable
                        :row-class="
                            (row, index) =>
                                isTheme ? 'bg-black text-white' : ''
                        "
                        :header-class="isTheme ? 'bg-black text-white' : ''"
                        height="420"
                    >

                        <b-table-column
                            field="mrf_emb_funded"
                            label="EMB Funded"
                            centered
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                            &#8369 {{props.row.mrf_emb_funded.toLocaleString('en-US')}}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="mrf_status_operation"
                            label="Status Operation"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.mrf_status_operation }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="mrf_service_area"
                            label="Service Area"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.mrf_service_area }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="action"
                            label=""
                            v-slot="props"
                        >
                            <Link
                                :href="`/app/swm/mrf_edit/${props.row.id}?form_type=mrf`"

                            >
                                <box-icon
                                    name="edit"
                                    color="orange"
                                    animation="tada-hover"
                                ></box-icon
                            ></Link>
                            <v-btn icon small @click="removeMRF(props.row.id)"
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
                </v-container></v-tab-item
            >
            <v-tab-item
                ><v-container>
                    <a
                        :href="`/app/swm/mrf_register/${lce_id}?form_type=rca`"

                    >
                        <v-btn dark>Add RCA</v-btn>
                    </a>
                    <b-table
                        :data="query_rca"

                        :per-page="query_rca.per_page"
                        pagination-size="is-small"
                        page-input
                        hoverable
                        backend-pagination
                        :total="query_rca.total"
                        :current-page.sync="query_rca.current_page"
                        pagination-position="top"
                        pagination-rounded
                        @page-change="onPageChange"
                        narrowed
                        :loading="loading"
                        bordered
                        sticky-header
                        scrollable
                        :row-class="
                            (row, index) =>
                                isTheme ? 'bg-black text-white' : ''
                        "
                        :header-class="isTheme ? 'bg-black text-white' : ''"
                        height="420"
                    >

                        <b-table-column
                            field="mrf_emb_funded"
                            label="EMB Funded"
                            centered
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                            &#8369 {{props.row.mrf_emb_funded.toLocaleString('en-US')}}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="mrf_status_operation"
                            label="Status Operation"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.mrf_status_operation }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="mrf_service_area"
                            label="Service Area"
                        >
                            <template #searchable="props">
                                <b-input
                                    placeholder="Search..."
                                    icon="magnify"
                                    size="is-small"
                                />
                            </template>
                            <template v-slot="props">
                                {{ props.row.mrf_service_area }}
                            </template>
                        </b-table-column>

                        <b-table-column
                            field="action"
                            label=""
                            v-slot="props"
                        >
                            <Link
                                :href="`/app/swm/mrf_edit/${props.row.id}?form_type=rca`"

                            >
                                <box-icon
                                    name="edit"
                                    color="orange"
                                    animation="tada-hover"
                                ></box-icon
                            ></Link>
                            <v-btn icon small @click="removeMRF(props.row.id)"
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
                </v-container></v-tab-item
            >
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
            tabs: ["LCE", "SLF", "MRF","RCA"],
        };
    },
    methods: {
        async removeSLF(slf_id) {
            try {
                this.loading = true;
                await this.confirmDelete(
                    "This action  cannot be undone",
                    async () => {
                        await this.$inertia.delete(
                            `/app/swm/slf_delete/${slf_id}`
                        );
                    }
                );
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.response.data.message);
            }
        },
        async removeMRF(mrf_id) {
            try {
                this.loading = true;
                await this.confirmDelete(
                    "This action  cannot be undone",
                    async () => {
                        await this.$inertia.delete(
                            `/app/swm/mrf_delete/${mrf_id}`
                        );
                    }
                );
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.response.data.message);
            }
        },
    },
};
</script>

<style></style>
