<template>
    <DefaultLayout>
        <div id="app" class="container">
            <v-btn color="primary" dark class="mb-2" @click="dialog = !dialog">
                <v-icon dark> mdi-filter </v-icon>
                {{ !dialog ? "Open Filter" : "Close Filter" }}
            </v-btn>
            <section>
                <b-table
                    :data="query.data"
                    :total="query.total"
                    :per-page="query.per_page"
                    :current-page.sync="query.current_page"
                    pagination-position="bottom"
                    default-sort-direction="asd"
                    sort-icon="arrow-up"
                    sort-icon-size="is-small"
                    @page-change="onPageChange"
                    :loading="loading"
                    paginated
                    backend-pagination
                >
                    <b-table-column
                        field="un_firmname"
                        label="Firmname"
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.un_firmname }}
                    </b-table-column>

                    <b-table-column
                        field="un_crs_number"
                        label="CRS No."
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.un_crs_number }}
                    </b-table-column>

                    <b-table-column
                        field="un_proponent"
                        label="Proponent"
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.un_proponent }}
                    </b-table-column>

                    <b-table-column
                        field="un_status"
                        label="Firm Status"
                        sortable
                        centered
                        v-slot="props"
                    >
                        <span class="tag is-success">
                            {{ props.row.un_status }}
                        </span>
                    </b-table-column>

                    <b-table-column
                        field="provDesc"
                        label="Province"
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.provDesc }}
                    </b-table-column>

                    <b-table-column
                        field="provDesc"
                        label="City/Municipality"
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.citymunDesc }}
                    </b-table-column>

                    <b-table-column
                        field="provDesc"
                        label="Barangay"
                        sortable
                        v-slot="props"
                    >
                        {{ props.row.brgyDesc }}
                    </b-table-column>

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
            </section>
        </div>
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
                            :items="searchCategory"
                            label="Category"
                            v-model="filter.selectedSearchCategory"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div v-if="selectedSearchCategory == 'PERMIT' || selectedSearchCategory == 'MONITORING' || selectedSearchCategory == 'NOV'">
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
                        <v-checkbox v-if="selectedSearchCategory == 'MONITORING' || selectedSearchCategory == 'NOV'"
                            v-model="filter.search9003"
                            label="RA 9003"
                            value="RA 9003"
                            class="p-0 m-0"
                        ></v-checkbox>
                    </div>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="red darken-4" text @click="dialog = false">
                        Close
                    </v-btn>
                    <v-btn
                        color="red darken-1"
                        class="white--text"
                        @click="clearFilter"
                    >
                        Clear Filter
                    </v-btn>
                    <v-btn
                        color="green darken-1"
                        class="white--text"
                        @click="filterUniverse"
                    >
                        Filter
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
    data() {
        return {
            dialog: false,
            province_list_alter: this.province_list,
            municipality_list_alter: [],

            barangay_list_alter: [],
            // filter: {},
            searchProvince: null,
            searchCityMun: null,
            searchBrgy: null,
            openFilter: false,
        };
    },
    async mounted() {
        if (this.filter.PK_citymun_ID) {
            await this.provinceDropdown(this.filter.PK_province_ID);
            await this.municipalityDropdown(this.filter.PK_citymun_ID);
        }
    },
    methods: {
        async clearFilter() {
            this.filter = {
                PK_province_ID: "",
                PK_citymun_ID: "",
                PK_brgy_ID: "",
            };
        },
        async filterUniverse() {
            // this.dialog = false;
            // this.onPageChange();
            this.get(this.filtersObject);
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
            this.loading = true;
            const barangay = await axios.get(
                `http://127.0.0.1:8000/api/app/municipality_dropdown/${val}`
            );
            this.barangay_list_alter = barangay.data;
            this.loading = false;
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
        filtersObject() {
            return this.filter;
        },
        PK_province_ID() {
            return this.filter.PK_province_ID;
        },
        PK_citymun_ID() {
            return this.filter.PK_citymun_ID;
        },
        selectedSearchCategory(){
            return this.filter.selectedSearchCategory;
        }
    },

<<<<<<< HEAD
=======
    data() {
        return {
            dialog: false,
            province_list_alter: this.province_list,
            municipality_list_alter: [],
            barangay_list_alter: [],
            // filter: {},
            searchProvince: null,
            searchCityMun: null,
            searchBrgy: null,
            searchCategory: ['PERMIT', 'MONITORING', 'NOV', 'ORDER', 'PCO', 'COMPLAINT', 'ALL FIRMS'],
            selectedCategory:null,
        };
    },
>>>>>>> f2c1633f7287f70ef663595c89eb42fe9d65f29d
    watch: {
        PK_province_ID(value) {
            if (value) this.provinceDropdown(value);
        },
        PK_citymun_ID(value) {
            if (value) this.municipalityDropdown(value);
        },
        selectedSearchCategory(data){
            if( data == 'ORDER' || data == 'PCO' || data == 'COMPLAINT' || data == 'ALL FIRMS'){
                this.filter.search1586 = null;
                this.filter.search8749 = null;
                this.filter.search9275 = null;
                this.filter.search6969 = null;
                this.filter.search9003 = null;
            }
            if( data == 'PERMIT'){
                this.filter.search9003 = null;
            }
        },
    },
};
</script>
