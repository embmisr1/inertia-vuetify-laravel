<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 mt-0 ml-8">
                    <div class="col-span-4">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Basic Information</div>
                    </div>
                    <div hidden>
                        <v-text-field
                            v-model="form_basic_info.id"
                            label="Universe ID"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_firmname"
                            label="Firm Name"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_proponent"
                            label="Proponent"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_crs_number"
                            label="CRS No."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="universe_type_selection"
                            v-model="form_basic_info.un_type"
                            label="Universe Type"
                            item-text="universe_type_selection_obj"
                            item-value="universe_type_selection_obj"
                            clearable
                        ></v-autocomplete>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Project Location</div>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="province_list_alter"
                            v-model="form_basic_info.un_province"
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
                            v-model="form_basic_info.un_municipality"
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
                            v-model="form_basic_info.un_brgy"
                            label="Barangay"
                            item-text="brgyDesc"
                            item-value="PK_brgy_ID"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_specific_address"
                            label="Specific Address"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_lat"
                            label="Latitude"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_long"
                            label="Longitude"
                            clearable
                        ></v-text-field>
                    </div>
                    <div class="mb-5 col-span-3 text-right">
                        <v-btn
                        tile
                        type="button"
                        color="success"
                        >
                            <v-icon left>
                                mdi-map-marker-radius-outline
                            </v-icon>
                            View Location
                        </v-btn>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Representative</div>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_representative_name"
                            label="Name"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_representative_designation"
                            label="Designation"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_representative_gender"
                            label="Gender"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">PSIC Code</div>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_psic_group"
                            label="Group"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_psic_class"
                            label="Class"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_psic_subclass"
                            label="Subclass"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Project Type</div>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_project_type"
                            label="Type"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_project_subtype"
                            label="Subtype"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_project_specific_type"
                            label="Subclass"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_project_specific_subtype"
                            label="Subclass"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_detailed_description"
                            label="Description"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-2">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Status</div>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_remarks"
                            label="Remarks"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="basic_status"
                            v-model="form_basic_info.un_status"
                            label="Status"
                            item-text="basic_status_selection"
                            item-value="basic_status_selection"
                            clearable
                        ></v-autocomplete>
                    </div>
            </div>
            <div class="text-center">
                <v-btn depressed color="primary" type="submit">
                    Submit
                </v-btn>
            </div>
        </v-card>
</template>
<script>
import axios from 'axios';
  export default {
    props:{
        form_basic_info: Object,
        province_list: Array,
        municipality_list: Array,
        barangay_list: Array,
    },
    methods:{
        async provinceDropdown(val){
            const municipality = await axios.get(`http://127.0.0.1:8000/api/app/province_dropdown/${val}`);
            this.municipality_list_alter = municipality.data;
            this.barangay_list_alter = [];
        },
        async municipalityDropdown(val){
            const barangay = await axios.get(`http://127.0.0.1:8000/api/app/municipality_dropdown/${val}`);
            this.barangay_list_alter = barangay.data;
        }
    },
    data () {
      return {
        universe_type_selection:[
            { 'universe_type_selection_obj': 'Firm'  },
            { 'universe_type_selection_obj': 'Lgu'  },
        ],
        basic_tab: null,
        province_list_alter: this.province_list,
        municipality_list_alter: this.municipality_list,
        barangay_list_alter: this.barangay_list,
        basic_status:[
            { 'basic_status_selection': 'Active-Operational'  },
            { 'basic_status_selection': 'Operational'  },
            { 'basic_status_selection': 'Non-Operational'  },
            { 'basic_status_selection': 'Temporary Closure'  },
            { 'basic_status_selection': 'Closed'  },
            { 'basic_status_selection': 'Temporary Ceased Operation'  },
            { 'basic_status_selection': 'Ceased'  },
            { 'basic_status_selection': 'Completed'  },
            { 'basic_status_selection': 'Cancelled'  },
            { 'basic_status_selection': 'Delisted'  },
        ],
      }
    },
  }
</script>