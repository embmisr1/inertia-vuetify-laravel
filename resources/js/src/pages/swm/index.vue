<template>
    <DefaultLayout>
        <Link href="lce_register_process">Add LCE</Link>
        <!-- {{ Object.keys(lce_list.data[0]) }} -->

        <b-table
            :data="lce_list.data"
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
            :row-class="(row, index) => (isTheme ? 'bg-black text-white' : '')"
            :header-class="isTheme ? 'bg-black text-white' : ''"
            height="420"
        >
            <b-table-column field="province" label="Province" searchable>
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
            <b-table-column field="barangay" label="Barangay" searchable>
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

            <b-table-column field="district" label="District Code" searchable>
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

            <b-table-column field="action" label="" sortable v-slot="props">
                <Link
                    :href="`/app/swm/lce_edit/${props.row.id}`"
                    taget="_blank"
                >
                    <box-icon
                        name="edit"
                        color="orange"
                        animation="tada-hover"
                    ></box-icon
                ></Link>
                <v-btn icon small @click="deleteLCEForm(props.row.id)"
                    ><box-icon
                        name="trash"
                        color="red"
                        animation="tada-hover"
                    ></box-icon
                ></v-btn>
            </b-table-column>
            <template #empty>
                <div class="text-center text-3xl text-gray-500 font-extrabold">
                    No lce_list Found
                </div>
            </template>
        </b-table>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../mixins/";
export default {
    props: {
        lce_list: Object,
    },
    components: {
        DefaultLayout,
        Link,
    },
    mixins: [page, toasts, swm, dialogs],
    methods: {
        async saveLCEForm() {
            try {
                const lce_list = { ...this.lce };
                await this.$inertia.post(
                    "/app/swm/rce_register_process",
                    lce_list
                );
            } catch (error) {
                console.error(error.message);
                this.error(error.dat.response.messsage);
            }
        },
        async deleteLCEForm(LCE_id) {
            try {
                await this.$inertia.get(`/app/swm/lce_delete/${LCE_id}`);
            } catch (error) {
                console.error(error.message);
                this.error(error.dat.response.messsage);
            }
        },
    },
};
</script>

<style></style>
