<template>
    <DefaultLayout>
    <div id="app" class="container">
        <v-dialog
        v-model="dialog"
        persistent
        max-width="290"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                color="primary"
                dark
                v-bind="attrs"
                v-on="on"
                class="mb-2"
                >
                    <v-icon dark>
                        mdi-filter
                    </v-icon> Filter
                </v-btn>
            </template>
            <v-card>
                <v-card-title class="text-h5">
                    <v-icon>
                        mdi-filter
                    </v-icon> Filter Options
                </v-card-title>
                <v-card-text>
                    <div>
                        <v-autocomplete
                            :items="province_list_alter"
                            v-model="province_list_alter.PK_province_ID"
                            @change="provinceDropdown"
                            label="Province"
                            item-text="provDesc"
                            item-value="PK_province_ID"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="municipality_list_alter"
                            v-model="municipality_list_alter.PK_citymun_ID"
                            @change="municipalityDropdown"
                            label="Municipality"
                            item-text="citymunDesc"
                            item-value="PK_citymun_ID"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="barangay_list_alter"
                            v-model="barangay_list_alter.PK_brgy_ID"
                            label="Barangay"
                            item-text="brgyDesc"
                            item-value="PK_brgy_ID"
                            clearable
                        ></v-autocomplete>
                    </div>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn
                        color="green darken-1"
                        text
                        @click="dialog = false"
                    >
                        Close
                    </v-btn>
                    <v-btn
                        color="green darken-1"
                        text
                        @click="filterUniverse"
                    >
                        Filter
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
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
                paginated
                backend-pagination>

                <b-table-column field="un_firmname" label="Firmname" sortable v-slot="props" searchable>
                    {{ props.row.un_firmname }}
                </b-table-column>

                <b-table-column field="un_crs_number" label="CRS No." sortable v-slot="props" searchable>
                    {{ props.row.un_crs_number }}
                </b-table-column>

                <b-table-column field="un_proponent" label="Proponent" sortable v-slot="props" searchable>
                    {{ props.row.un_proponent }}
                </b-table-column>

                <b-table-column field="un_status" label="Firm Status" sortable centered v-slot="props" searchable>
                    <span class="tag is-success">
                        {{ props.row.un_status }}
                    </span>
                </b-table-column>

                <b-table-column field="provDesc" label="Province" sortable v-slot="props" searchable>
                    {{ props.row.provDesc }}
                </b-table-column>

                <b-table-column field="provDesc" label="City/Municipality" sortable v-slot="props" searchable>
                    {{ props.row.citymunDesc }}
                </b-table-column>

                <b-table-column field="provDesc" label="Barangay" sortable v-slot="props" searchable>
                    {{ props.row.brgyDesc }}
                </b-table-column>

                <b-table-column label="Action" v-slot="props">
                    <span>
                        <Link :href="`/app/universe_form/${props.row.id}`" as="button">
                            <v-btn link small icon>
                                <b-tooltip type="is-dark" :label="`Edit - ${props.row.un_firmname}`">
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
    </DefaultLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
import axios from 'axios';

export default {
    components: {
        DefaultLayout,
        Link,
    },
    props: {
        query: Object,
        province_list: Array,
        municipality_list: Array,
        barangay_list: Array,
    },
    methods: {
        async onPageChange(page_content){
            await this.$inertia.get(`/app/universe`,{
                page: page_content,
                province: this.province_list_alter.PK_province_ID,
            });
        },
        async filterUniverse(){
            this.dialog = false;
            this.onPageChange();

        },
        async provinceDropdown(val){
            const municipality = await axios.get(`http://127.0.0.1:8000/api/app/province_dropdown/${val}`);
            this.municipality_list_alter = municipality.data;
            this.barangay_list_alter = [];
        },
        async municipalityDropdown(val){
            const barangay = await axios.get(`http://127.0.0.1:8000/api/app/municipality_dropdown/${val}`);
            this.barangay_list_alter = barangay.data;
        },
    },
    // data: () => ({
    //     dialog: false,
    //     province_list_alter: this.province_list,
    //     municipality_list_alter: this.municipality_list,
    //     barangay_list_alter: this.barangay_list,
    // }),
    data () {
      return {
        dialog: false,
        province_list_alter: this.province_list,
        municipality_list_alter: [],
        barangay_list_alter: [],
      }
    }
};
</script>
