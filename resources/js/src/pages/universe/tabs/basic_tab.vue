<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 mt-0 ml-8">
                    <div class="col-span-4">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Basic Information</div>
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
                        <v-text-field
                            v-model="form_basic_info.un_type"
                            label="Universe Type"
                            clearable
                        ></v-text-field>
                    </div>
                    <div >
                        <v-text-field
                            v-model="form_basic_info.id"
                            label="Universe ID"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <div class="text-white bg-blue-500 rounded-md p-2" style="box-shadow: 0px 0px 5px #9C9C9C;">Project Location</div>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="province_list"
                            v-model="form_basic_info.un_province"
                            label="Province"
                            item-text="provDesc"
                            item-value="PK_province_ID"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_municipality"
                            label="Municipality"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_brgy"
                            label="Barangay"
                            clearable
                        ></v-text-field>
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
                            label="Group"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_status"
                            label="Class"
                            clearable
                        ></v-text-field>
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
    },
    computed:{
        searchProv(){
            return this.form_basic_info.un_province;
        }
    },
    watch:{
        async searchProv(data){
            const abc = await axios.get(`http://127.0.0.1:8000/api/app/search_province/${data}`);
            console.log(abc.data);
        }
    },
    data () {
      return {
        basic_tab: null,
      }
    },
  }
</script>