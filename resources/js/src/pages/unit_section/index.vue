<template>
    <DefaultLayout>
        <b-table
            :data="unit_section_data.data"
            paginated
            :per-page="unit_section_data.meta.per_page"
            pagination-size="is-small"
            page-input
            hoverable
            backend-pagination
            :total="unit_section_data.meta.total"
            :current-page.sync="unit_section_data.meta.current_page"
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
                <v-btn
                    elevation="10"
                    small
                    @click="setModal(unit_section_field, 'Add')"
                >
                    <box-icon
                        name="plus"
                        animation="tada-hover"
                        :color="isTheme ? 'white' : 'black'"
                    ></box-icon>
                    Add Unit Section
                </v-btn>
            </template>

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

            <b-table-column field="division" label="Division" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filters.division"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.division ? props.row.division : "N/A" }}
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
        <CUDUnitSection
            :modal="unit_section_modal"
            :division_data="division_data"
            :close="resetUserModal"
        />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDUnitSection from "../../components/UnitSection/CUD.vue";
import { Link } from "@inertiajs/inertia-vue";
import PageMixins from "../../mixins/page";
import Unit_Section_Mixins from "../../mixins/unit_section_modal";
import _ from "lodash";
export default {
    mixins: [PageMixins, Unit_Section_Mixins],
    props: ["unit_section_data", "filters", "division_data"],
    components: {
        DefaultLayout,
        Link,
        CUDUnitSection,
    },
    data() {
        return {
            unit_section_field: {
                name: "",
                division_id: "",
            },
        };
    },
    methods: {
        get: _.debounce(async function (params) {
            try {
                await this.$inertia.get("/app/unit_section", { ...params });
            } catch (error) {
                this.error(error.response.data.message)
            }
        }, 1500),
    },
};
</script>

<style></style>
