<template>
        <v-card class="p-4" elevation="0">
        

        <v-toolbar
            class="mb-5"
            color="#FFFFFF"
            flat
        >
          <template>
                <v-tabs
                    v-model="basic_tab"
                    align-with-title
                >
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;Basic Information
                </v-tab>
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;Project Location
                </v-tab>
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;Representative
                </v-tab>
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;PCO
                </v-tab>
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;PSIC CODE
                </v-tab>
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;Project Type
                </v-tab>
                <v-tab>
                    <v-icon>mdi-information-outline</v-icon>&nbsp;Status
                </v-tab>
                </v-tabs>
          </template>
        </v-toolbar>

        <v-tabs-items v-model="basic_tab">
          <v-tab-item>
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 mt-0 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_basic_info.firm_name"
                            label="Firm Name"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.proponent"
                            label="Proponent"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.crs_number"
                            label="CRS No."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.universe_type"
                            label="Universe Type"
                            clearable
                        ></v-text-field>
                    </div>
                    <div hidden>
                        <v-text-field
                            v-model="form_basic_info.id"
                            label="Outlined"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
          </v-tab-item>
          <v-tab-item>
            <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_basic_info.province"
                            label="Province"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.municipality"
                            label="Municipality"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.barangay"
                            label="Barangay"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.specific_address"
                            label="Specific Address"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.latitude"
                            label="Latitude"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_basic_info.longitude"
                            label="Longitude"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-btn
                        tile
                        type="button"
                        >
                            <v-icon left>
                                mdi-map-marker-radius-outline
                            </v-icon>
                            View Location
                        </v-btn>
                    </div>
            </div>
          </v-tab-item>
          <v-tab-item>
            <v-card flat>
                <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                        <div>
                            <v-text-field
                                v-model="form_basic_info.representative_name"
                                label="Name"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.representative_designation"
                                label="Designation"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.representative_gender"
                                label="Gender"
                                clearable
                            ></v-text-field>
                        </div>
                </div>
            </v-card>
          </v-tab-item>
          <v-tab-item>
            <v-card flat>
                <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
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
            </v-card>
          </v-tab-item>
          <v-tab-item>
            <v-card flat>
                <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                        <div>
                            <v-text-field
                                v-model="form_basic_info.psic_group"
                                label="Group"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.psic_class"
                                label="Class"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.psic_subclass"
                                label="Subclass"
                                clearable
                            ></v-text-field>
                        </div>
                </div>
            </v-card>
          </v-tab-item>
          <v-tab-item>
            <v-card flat>
                <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
                        <div>
                            <v-text-field
                                v-model="form_basic_info.project_type"
                                label="Group"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.project_sub_type"
                                label="Class"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.project_specific_type"
                                label="Subclass"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.project_specific_sub_type"
                                label="Subclass"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.project_description"
                                label="Description"
                                clearable
                            ></v-text-field>
                        </div>
                </div>
            </v-card>
          </v-tab-item>
          <v-tab-item>
            <v-card flat>
                <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
                        <div>
                            <v-text-field
                                v-model="form_basic_info.firm_remarks"
                                label="Group"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_basic_info.firm_status"
                                label="Class"
                                clearable
                            ></v-text-field>
                        </div>
                </div>
            </v-card>
          </v-tab-item>
        </v-tabs-items>
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