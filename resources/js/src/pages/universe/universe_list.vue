<template>
    <DefaultLayout>
        <div id="app" class="container">
            <v-btn color="primary" dark class="mb-2" @click="dialog = true">
                <v-icon dark> mdi-filter </v-icon> Filter
            </v-btn>

            <!-- <div class="grid grid-cols-4 gap-x-3">
                <div>
                    <v-autocomplete
                        :loading="loading"
                        :items="province_list_alter"
                        v-model="filter.PK_province_ID"
                        label="Province"
                        item-text="provDesc"
                        item-value="PK_province_ID"
                        clearable
                        :search-input.sync="searchProvince"
                        solo
                        dense
                    ></v-autocomplete>
                </div>
                <div>
                    <v-autocomplete
                        :loading="loading"
                        :items="municipality_list_alter"
                        v-model="filter.PK_citymun_ID"
                        label="Municipality"
                        item-text="citymunDesc"
                        item-value="PK_citymun_ID"
                        clearable
                        :search-input.sync="searchCityMun"
                        solo
                        dense
                    ></v-autocomplete>
                </div>
                <div>
                    <v-autocomplete
                        :loading="loading"
                        :items="barangay_list_alter"
                        v-model="filter.PK_brgy_ID"
                        label="Barangay"
                        item-text="brgyDesc"
                        item-value="PK_brgy_ID"
                        clearable
                        :search-input.sync="searchBrgy"
                        solo
                        dense
                    ></v-autocomplete>
                </div>
                <v-btn color="primary darken-4" @click="filterUniverse">
                    Filter
                </v-btn>
            </div> -->
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
        <v-dialog v-model="dialog" persistent max-width="500">
            <v-card>
                <v-card-title class="text-h5">
                    <v-icon> mdi-filter </v-icon> Filter Options
                </v-card-title>
                <v-card-text>
                    <div>
                        <!-- @change="provinceDropdown" -->
                        <v-autocomplete
                            :loading="loading"
                            :items="province_list_alter"
                            v-model="filter.PK_province_ID"
                            label="Province"
                            item-text="provDesc"
                            item-value="PK_province_ID"
                            clearable
                            :search-input.sync="searchProvince"
                        ></v-autocomplete>
                    </div>
                    <div>
                        <!-- @change="municipalityDropdown" -->
                        <v-autocomplete
                            :loading="loading"
                            :items="municipality_list_alter"
                            v-model="filter.PK_citymun_ID"
                            label="Municipality"
                            item-text="citymunDesc"
                            item-value="PK_citymun_ID"
                            clearable
                            :search-input.sync="searchCityMun"
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-autocomplete
                            :loading="loading"
                            :items="barangay_list_alter"
                            v-model="filter.PK_brgy_ID"
                            label="Barangay"
                            item-text="brgyDesc"
                            item-value="PK_brgy_ID"
                            clearable
                            :search-input.sync="searchBrgy"
                        ></v-autocomplete>
                    </div>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="red darken-4" text @click="dialog = false">
                        Close
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
        municipality_list: Array,
        barangay_list: Array,
        filter: Object,
    },
    async mounted() {
        if (this.filter.PK_province_ID) {
            const prov_data = await this.filter_prov();
            this.searchProvince = prov_data.provDesc;
        // } else this.filter.PK_province_ID = "";
        }

        if (this.filter.PK_citymun_ID) {
            await this.provinceDropdown(this.filter.PK_province_ID);
            const citymun_data = await this.filter_citymun();
            this.searchCityMun = citymun_data.citymunDesc;
        // } else this.filter.PK_citymun_ID = "";
        }

        if (this.filter.PK_brgy_ID) {
            await this.municipalityDropdown(this.filter.PK_citymun_ID);
            const brgy_data = await this.filter_brgy();
            this.searchBrgy = brgy_data.brgyDesc;
        // } else this.filter.PK_brgy_ID = "";
        }
    },
    methods: {
        async filter_prov() {
            return await _.find(this.province_list, (data) => {
                return data.provCode == this.filter.PK_province_ID;
            });
        },
        async filter_citymun() {
            return await _.find(this.municipality_list_alter, (data) => {
                return data.PK_citymun_ID == this.filter.PK_citymun_ID;
            });
        },
        async filter_brgy() {
            return await _.find(this.barangay_list_alter, (data) => {
                return data.PK_brgy_ID == this.filter.PK_brgy_ID;
            });
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
        };
    },
    watch: {
        searchProvince(data) {
            if (!data) {
                this.filter.PK_province_ID = "";
                this.filter.PK_citymun_ID = "";
                this.filter.PK_brgy_ID = "";
            }
        },
        searchCityMun(data) {
            if (!data) this.filter.PK_citymun_ID = "";
        },
        searchBrgy(data) {
            if (!data) this.filter.PK_brgy_ID = "";
        },
        PK_province_ID(value) {
            if (value) this.provinceDropdown(value);
        },
        PK_citymun_ID(value) {
            if (value) this.municipalityDropdown(value);
        },
    },
};
</script>
