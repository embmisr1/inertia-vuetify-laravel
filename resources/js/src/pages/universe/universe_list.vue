<template>
    <DefaultLayout :access="access">
        <v-btn color="primary" dark class="mb-2" @click="dialog = !dialog">
            <v-icon dark> mdi-filter </v-icon>
            {{ !dialog ? "Open Filter" : "Close Filter" }}
        </v-btn>

        <b-table
            :data="query.data"
            :total="query.total"
            :per-page="query.per_page"
            :current-page.sync="query.current_page"
            pagination-position="both"
            default-sort-direction="asd"
            sort-icon="arrow-up"
            sort-icon-size="is-small"
            :loading="loading"
            paginated
            backend-pagination
            @page-change="onPageChange"
            aria-next-label="Next page"
            aria-previous-label="Previous page"
            aria-page-label="Page"
            aria-current-label="Current page"

        >
            <template #top-left>
                <b-field  type="is-dark">
                    <b-select
                        placeholder="Rows Per Page"
                        v-model="filter.per_page"
                        size="is-small"
                    >
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                    </b-select>
                </b-field>
            </template>
            <template #bottom-left>
                <b-field type="is-dark">
                    <b-select
                        placeholder="Rows Per Page"
                        v-model="filter.per_page"
                        size="is-small"
                    >
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                    </b-select>
                </b-field>
            </template>
            <b-table-column field="un_firmname" label="Firmname" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filter.un_firmname"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.un_firmname }}
                </template>
            </b-table-column>
            <b-table-column field="un_crs_number" label="CRS No." searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filter.un_crs_number"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.un_crs_number }}
                </template>
            </b-table-column>
            <b-table-column field="un_proponent" label="Proponent" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filter.un_proponent"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.un_proponent }}
                </template>
            </b-table-column>

            <b-table-column field="un_status" label="Firm Status" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filter.un_status"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.un_status }}
                </template>
            </b-table-column>

            <b-table-column field="provDesc" label="Province">
                <template #searchable="props">
                    <b-select
                        v-model="filter.PK_province_ID"
                        placeholder="Select a Province"
                        size="is-small"
                    >
                        <option
                            v-for="option in province_list"
                            :value="option.PK_province_ID"
                            :key="option.PK_province_ID"
                        >
                            {{ option.provDesc }}
                        </option>
                    </b-select>
                </template>
                <template v-slot="props">
                    {{ props.row.provDesc }}
                </template>
            </b-table-column>
            <b-table-column field="citymunDesc" label="City/Municipality">
                <template #searchable="props">
                    <b-select
                        v-model="filter.PK_citymun_ID"
                        placeholder="Select a Municipality"
                        expanded
                        label-position="inside"
                        size="is-small"
                    >
                        <option
                            v-for="option in municipality_list_alter"
                            :value="option.PK_citymun_ID"
                            :key="option.PK_citymun_ID"
                            size="is-small"
                        >
                            {{ option.citymunDesc }}
                        </option>
                    </b-select>
                </template>
                <template v-slot="props">
                    {{ props.row.citymunDesc }}
                </template>
            </b-table-column>

            <b-table-column field="brgyDesc" label="Barangay">
                <template #searchable="props">
                    <b-select
                        v-model="filter.PK_brgy_ID"
                        placeholder="Select a Barangay"
                        expanded
                        label-position="inside"
                        size="is-small"
                    >
                        <option
                            v-for="option in barangay_list_alter"
                            :value="option.PK_brgy_ID"
                            :key="option.PK_brgy_ID"
                        >
                            {{ option.brgyDesc }}
                        </option>
                    </b-select>
                </template>
                <template v-slot="props">
                    {{ props.row.brgyDesc }}
                </template>
            </b-table-column>

            <!-- <b-table-column
                        field="provDesc"
                        label="Barangay"
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.brgyDesc }}
                    </b-table-column> -->

            <b-table-column label="Action" v-slot="props">
                <span>
                    <Link
                        :href="`/app/universe_form/${props.row.id}`"
                        as="button"
                    >
                        <v-btn link small icon>
                            <b-tooltip
                                type="is-dark"
                                :label="`Edit - ${props.row.un_firmname}`"
                            >
                                <box-icon
                                    name="edit"
                                    color="orange"
                                    animation="tada-hover"
                                >
                                </box-icon>
                            </b-tooltip>
                        </v-btn>
                    </Link>
                </span>
            </b-table-column>
        </b-table>
        <v-dialog v-model="dialog" max-width="500" persistent>
            <v-card>
                <v-card-title class="text-h5">
                    <v-icon> mdi-filter </v-icon> Filter Options
                </v-card-title>
                <v-card-text>
                    <div class="space-y-4">
                        <div>
                            <b-field
                                label="Province"
                                label-position="inside"
                                type="is-dark"
                            >
                                <b-select
                                    v-model="filter.PK_province_ID"
                                    placeholder="Select a Province"
                                    expanded
                                >
                                    <option
                                        v-for="option in province_list"
                                        :value="option.PK_province_ID"
                                        :key="option.PK_province_ID"
                                    >
                                        {{ option.provDesc }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div>
                            <b-field
                                label="Municipality"
                                label-position="inside"
                                type="is-dark"
                            >
                                <b-select
                                    v-model="filter.PK_citymun_ID"
                                    placeholder="Select a Municipality"
                                    expanded
                                    label-position="inside"
                                >
                                    <option
                                        v-for="option in municipality_list_alter"
                                        :value="option.PK_citymun_ID"
                                        :key="option.PK_citymun_ID"
                                    >
                                        {{ option.citymunDesc }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div>
                            <b-field
                                label="Barangay"
                                label-position="inside"
                                type="is-dark"
                            >
                                <b-select
                                    v-model="filter.PK_brgy_ID"
                                    placeholder="Select a Barangay"
                                    expanded
                                    label-position="inside"
                                >
                                    <option
                                        v-for="option in barangay_list_alter"
                                        :value="option.PK_brgy_ID"
                                        :key="option.PK_brgy_ID"
                                    >
                                        {{ option.brgyDesc }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>
                    <div>
                        <v-autocomplete
                            :loading="loading"
                            :items="searchStatus"
                            label="Status"
                            v-model="filter.searchStatus"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-autocomplete
                            :loading="loading"
                            :items="searchType"
                            label="Firm Type"
                            v-model="filter.searchType"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-autocomplete
                            :loading="loading"
                            :items="searchCategory"
                            label="Category"
                            v-model="filter.selectedSearchCategory"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div
                        v-if="
                            selectedSearchCategory == 'PERMIT' ||
                            selectedSearchCategory == 'MONITORING' ||
                            selectedSearchCategory == 'NOV'
                        "
                    >
                        <v-checkbox
                            v-model="filter.search1586"
                            label="PD 1586"
                            value="PD 1586"
                            class="p-0 m-0 mt-5"
                        ></v-checkbox>
                        <v-checkbox
                            v-model="filter.search8749"
                            label="RA 8749"
                            value="RA 8749"
                            class="p-0 m-0"
                        ></v-checkbox>
                        <v-checkbox
                            v-model="filter.search9275"
                            label="RA 9275"
                            value="RA 9275"
                            class="p-0 m-0"
                        ></v-checkbox>
                        <v-checkbox
                            v-model="filter.search6969"
                            label="RA 6969"
                            value="RA 6969"
                            class="p-0 m-0"
                        ></v-checkbox>
                        <v-checkbox
                            v-if="
                                selectedSearchCategory == 'MONITORING' ||
                                selectedSearchCategory == 'NOV'
                            "
                            v-model="filter.search9003"
                            label="RA 9003"
                            value="RA 9003"
                            class="p-0 m-0"
                        ></v-checkbox>
                        <div v-if="computed_search8749 || computed_search9275">
                            <v-autocomplete
                                :items="searchValidity"
                                label="Validity"
                                v-model="filter.searchValidity"
                                clearable
                            ></v-autocomplete>
                        </div>
                    </div>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="red darken-4" text @click="dialog = false"
                        ><v-icon> mdi-close-circle </v-icon>
                        Close
                    </v-btn>
                    <v-btn
                        color="red darken-1"
                        class="white--text"
                        @click="clearFilter"
                        ><v-icon> mdi-autorenew </v-icon>
                        Clear Filter
                    </v-btn>
                    <v-btn
                        color="blue darken-1"
                        class="white--text"
                        @click="filterUniverse"
                        ><v-icon> mdi-filter </v-icon>
                        Filter
                    </v-btn>
                    <v-btn
                        color="green darken-1"
                        class="white--text"
                        @click="exportUniverse"
                        ><v-icon> mdi-microsoft-excel </v-icon>
                        Export
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </DefaultLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
import axios from "axios";
import _ from "lodash";
import { page, toasts } from "../../mixins/";

export default {
    mixins: [page, toasts],
    components: {
        DefaultLayout,
        Link,
    },
    props: {
        query: Object,
        province_list: Array,
        barangay_list: Array,
        filter: Object,
    },
    async mounted() {
        if (this.filter.PK_citymun_ID) {
            await this.provinceDropdown(this.filter.PK_province_ID);
            await this.municipalityDropdown(this.filter.PK_citymun_ID);
        }
    },
    methods: {
        async clearFilter() {
            let filter_object = this.filter;
            this.filter = {
                PK_province_ID: null,
                PK_citymun_ID: null,
                PK_brgy_ID: null,
                PK_province_ID: null,
                PK_citymun_ID: null,
                PK_brgy_ID: null,
                selectedSearchCategory: null,
                searchStatus: null,
                searchType: null,
                search1586: null,
                search8749: null,
                search9275: null,
                search6969: null,
                search9003: null,
                un_firmname: null,
                un_crs_number: null,
                un_proponent: null,
                un_status: null,
            };
        },
        async filterUniverse() {
            this.get(this.filterObject);
        },
        async exportUniverse() {
            // await axios.get("/app/universe/export", { ...this.filterObject });
            const { data } = await axios.get("/app/universe/export", {
                params: { ...this.filtersObject },
                responseType: "blob",
            });
            const blob = new Blob([data], {
                // type: "text/csv",
                typ: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
            });
            let fileURL = window.URL.createObjectURL(blob);
            let fileLink = document.createElement("a");

            fileLink.href = fileURL;
            fileLink.setAttribute("download", "items.xlsx");
            // fileLink.setAttribute("download", "items.csv");
            document.body.appendChild(fileLink);

            fileLink.click();
            // this.get(this.filterObject);
        },
        async provinceDropdown(val) {
            try {
                this.loading = true;

                const municipality = await axios.get(
                    `http://127.0.0.1:8000/api/app/province_dropdown/${val}`
                );
                this.municipality_list_alter = municipality.data;
                this.loading = false;
            } catch (error) {
                this.error(error.response.data.message);
            }
        },
        async municipalityDropdown(val) {
            try {
                this.loading = true;
                const barangay = await axios.get(
                    `http://127.0.0.1:8000/api/app/municipality_dropdown/${val}`
                );
                this.barangay_list_alter = barangay.data;
                this.loading = false;
            } catch (error) {
                this.loading = false;
                this.error(error.response.data.message);
            }
        },
        get: _.debounce(async function (params) {
            try {
                this.loading = true;
                await this.$inertia.get("#", { ...params });
                this.loading = false;
                this.dialog = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error("Project Type Get - error");
            }
        }, 1000),
    },
    computed: {
        filterObject() {
            return { ...this.filter };
        },
        PK_province_ID() {
            return this.filter.PK_province_ID;
        },
        PK_citymun_ID() {
            return this.filter.PK_citymun_ID;
        },
        selectedSearchCategory() {
            return this.filter.selectedSearchCategory;
        },
        computed_search8749() {
            return this.filter.search8749;
        },
        computed_search9275() {
            return this.filter.search9275;
        },
    },

    data() {
        return {
            dialog: false,
            province_list_alter: this.province_list,
            municipality_list_alter: [],
            barangay_list_alter: [],
            searchProvince: null,
            searchCityMun: null,
            searchBrgy: null,
            searchCategory: [
                "PERMIT",
                "MONITORING",
                "NOV",
                "ORDER",
                "PCO",
                "COMPLAINT",
            ],
            searchStatus: [
                "Active-Operational",
                "Active-Proposed",
                "Cancelled",
                "Ceased",
                "Ceased Operation",
                "Delisted",
                "Inactive-",
                "Inactive-CANCELLED",
            ],
            searchType: ["FIRM", "LGU"],
            searchValidity: ["VALID", "EXPIRED", "UNDEFINED"],
            selectedCategory: null,
            openFilter: false,
        };
    },
    watch: {
        PK_province_ID(value) {
            if (value) this.provinceDropdown(value);
        },
        PK_citymun_ID(value) {
            if (value) this.municipalityDropdown(value);
        },
        selectedSearchCategory(data) {
            if (data == "ORDER" || data == "PCO" || data == "COMPLAINT") {
                this.filter.search1586 = null;
                this.filter.search8749 = null;
                this.filter.search9275 = null;
                this.filter.search6969 = null;
                this.filter.search9003 = null;
                this.filter.searchValidity = null;
            } else if (data == "PERMIT") {
                this.filter.search9003 = null;
            } else {
                this.filter.searchValidity = null;
            }
        },
        computed_search8749(data) {
            if (data == null && this.computed_search9275 == null) {
                this.filter.searchValidity = null;
            }
        },
        computed_search9275(data) {
            if (data == null && this.computed_search8749 == null) {
                this.filter.searchValidity = null;
            }
        },
        filterObject(value) {
            this.loading = true;
            // this.filterUniverse({ ...this.filterObject });
            if (value.PK_province_ID) {
                // console.log(value.PK_province_ID
                this.loading = false;
                return;
            }
            if (value.PK_citymun_ID) {
                // console.log(value.PK_citymun_ID
                this.loading = false;
                return;
            }
            if (value.PK_brgy_ID) {
                // console.log(value.PK_brgy_ID
                this.loading = false;
                return;
            }
            this.filterUniverse();
            this.loading = false;
        },
    },
};
</script>
