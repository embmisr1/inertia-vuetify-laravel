<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 mt-0 ml-8">
                    <div class="col-span-4">
                        <v-card class="primary white--text p-2" elevation="2">Basic Information</v-card>
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
                            label="Outlined"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <v-card class="primary white--text p-2" elevation="2">Project Location</v-card>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_province"
                            label="Province"
                            clearable
                        ></v-text-field>
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
                        <v-card class="primary white--text p-2" elevation="2">Representative</v-card>
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
                        <v-card class="primary white--text p-2" elevation="2">PCO</v-card>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.pco_name"
                            label="Name"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.pco_number"
                            label="Number"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.pco_email"
                            label="Email"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.pco_contact"
                            label="Contact No."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.pco_date_start"
                            label="Start Date"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.pco_date_end"
                            label="End Date"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div class="col-span-3">
                        <v-card class="primary white--text p-2" elevation="2">PSIC Code</v-card>
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
                        <v-card class="primary white--text p-2" elevation="2">Project Type</v-card>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_project_type"
                            label="Group"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.un_project_sub_type"
                            label="Class"
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
                        <v-card class="primary white--text p-2" elevation="2">Status</v-card>
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
  export default {
    props:{
        form_basic_info: Object,
    },
    data () {
      return {
        basic_tab: null,
      }
    },
  }
</script>