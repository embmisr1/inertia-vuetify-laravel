<template>
    <DefaultLayout :access="access">
        <v-btn elevation="10" small @click="subClassModal.active = true">
            <box-icon
                name="plus"
                animation="tada-hover"
                :color="isTheme ? 'white' : 'black'"
            ></box-icon>
            Add Sub Class
        </v-btn>

        <b-table
            :data="data.data"
            paginated
            :per-page="data.meta.per_page"
            pagination-size="is-small"
            page-input
            hoverable
            backend-pagination
            :total="data.meta.total"
            :current-page.sync="data.meta.current_page"
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
            <b-table-column
                field="psic_group_desc"
                label="Description"
                searchable
            >
                <template #searchable="props">
                    <b-input
                        v-model="filters.psic_subclass_desc"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.psic_subclass_desc }}
                </template>
            </b-table-column>

            <b-table-column
                field="psic_group_desc"
                label="Class"
                searchable
            >
                <template #searchable="props">
                    <b-input
                        v-model="filters.psic_class_desc"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.psic_class.desc }}
                </template>
            </b-table-column>

            <b-table-column field="action" label="" sortable v-slot="props">
                <v-btn
                    small
                    icon
                    @click="set_psic_sub_class(props.row, 'patch')"
                >
                    <box-icon
                        name="edit"
                        color="orange"
                        animation="tada-hover"
                    ></box-icon>
                </v-btn>
                <v-btn
                    icon
                    small
                    @click="set_psic_sub_class(props.row, 'delete')"
                    ><box-icon
                        name="trash"
                        color="red"
                        animation="tada-hover"
                    ></box-icon
                ></v-btn>
            </b-table-column>
            <template #empty>
                <div class="text-center text-3xl text-gray-500 font-extrabold">
                    No Data Found
                </div>
            </template>
        </b-table>
        <SubClass
            :modal="subClassModal"
            :close="subClassClose"
            :submit="submitSubClass"
            :loading="loading"
            :items="psicClass"
            @search="searchClass"
        />
        <!-- :search="searchClass" -->
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, psic, dialogs } from "../../mixins/";
import Group from "../../components/PSIC/Group.vue";
import SubClass from "../../components/PSIC/SubClass.vue";
export default {
    components: { DefaultLayout, Group, SubClass },
    mixins: [page, toasts, psic, dialogs],
    props: {
        data: Object,
    },
    data() {
        return {};
    },
    methods: {
        get: _.debounce(async function (params) {
            try {
                this.loading = true;
                await this.$inertia.get("#", { ...params });
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error("PSIC Group Class Get - error")
            }
        }, 1500),
    },
};
</script>

<style></style>
