<template>
    <DefaultLayout :access="access">
        <b-table
            :data="division_data.data"
            paginated
            :per-page="division_data.meta.per_page"
            pagination-size="is-small"
            page-input
            hoverable
            backend-pagination
            :total="division_data.meta.total"
            :current-page.sync="division_data.meta.current_page"
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
            c
        >
            <template #top-left>
                <v-btn elevation="10" small @click="setModal(division_fields, 'Add')">
                    <box-icon
                        name="plus"
                        animation="tada-hover"
                        :color="isTheme ? 'white' : 'black'"
                    ></box-icon>
                    Add DIvision
                </v-btn>
            </template>
            <b-table-column
                field="id"
                label="ID"
                width="70"
                sortable
                numeric
                searchable
            >
                <template #searchable="props">
                    <b-input
                        v-model="filters.id"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.id }}
                </template>
            </b-table-column>

            <b-table-column field="name" label="Name" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filters.name"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.name }}
                </template>
            </b-table-column>

            <b-table-column field="action" label="" sortable v-slot="props">
                <v-btn icon @click="setModal(props.row, 'Update')"
                    ><box-icon
                        name="edit"
                        color="orange"
                        animation="tada-hover"
                    ></box-icon
                ></v-btn>
                <v-btn icon @click="setModal(props.row, 'Delete')"
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
        <CUDDivision :modal="division_modal" :close="resetDivisionModal" />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDDivision from "../../components/Division/CUD.vue";
import { Link } from "@inertiajs/inertia-vue";
import PageMixins from "../../mixins/page";
import Division_Mixins from "../../mixins/division_modal";
import _ from "lodash";
export default {
    mixins: [PageMixins, Division_Mixins],
    props: ["division_data", 'filters'],
    components: {
        DefaultLayout,
        Link,
        CUDDivision,
    },
    data(){
        return{
            division_fields:{
                name:""
            }
        }
    },
      methods: {
        get: _.debounce(async function (params) {
            try {
                await this.$inertia.get("/app/division", { ...params });
            } catch (error) {
                console.log(error);
            }
        }, 1500),
    },
    watch: {
        filtersObject() {
            this.loading = true;
            this.get({ ...this.filtersObject });
            this.loading = false;
            // this.$inertia.get("/app/users", {
            //     filters: { ...this.filtersObject },
            // });
        },
    },
};
</script>

<style></style>
