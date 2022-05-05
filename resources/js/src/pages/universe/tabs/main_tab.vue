<template>
  <v-form @submit.prevent="submit_basic_info">
    <div class="grid grid-cols-6 gap-4 mt-5 mb-5">
        <v-card class="p-3" elevation="3" max-width="100%">
            <v-img
              src="../../images/emb_logo.png"
            ></v-img>
        </v-card>
        <div class="col-span-5">
            <v-card class="p-4">
              <v-card class="p-2" elevation="0" color="#E0E0E0">Basic Information</v-card>
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
              <v-card class="p-2" elevation="1" color="#E0E0E0">Project Location</v-card>
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
                </div>
            </v-card>
        </div>
    </div>
    <div>
      <v-card>
        <template>
          <v-card>
            <v-toolbar
              flat
              color="primary"
              dark
            >
              <v-btn icon>
                <v-icon>mdi-arrow-left</v-icon>
              </v-btn>
              <v-toolbar-title>Firm Information</v-toolbar-title>
            </v-toolbar>
            <v-tabs vertical>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Basic Information
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Permit
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Monitoring
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Legal
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Hazwaste
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Complaint
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>
                    mdi-arrow-right-thick
                  </v-icon>
                  Location
                </div>
              </v-tab>

              <v-tab-item>
              <BasicTab :form_basic_info="form_basic_info"></BasicTab>
                <!-- <v-card flat>
                  <v-card-text>
                      <BasicTab :form_basic_info="form_basic_info"></BasicTab>
                  </v-card-text>
                </v-card>-->
              </v-tab-item>
              <v-tab-item>
                <v-card flat>
                  <v-card-text>
                      <PermitTab :form_permit_info="form_basic_info"></PermitTab>
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card flat>
                  <v-card-text>
                  3
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card flat>
                  <v-card-text>
                  4
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card flat>
                  <v-card-text>
                  5
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card flat>
                  <v-card-text>
                  6
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card flat>
                  <v-card-text>
                  7
                  </v-card-text>
                </v-card>
              </v-tab-item>

            </v-tabs>
          </v-card>
        </template>
      </v-card>
    </div>
  </v-form>
</template>
<script>
  import BasicTab from "./basic_tab";
  import PermitTab from "./permit_tab";
  export default {
    props:{
      form_basic_info: Object,
      submit_basic_info: Function,
    },
    components:{
        BasicTab,
        PermitTab,
    },
    data () {
      return {
        tab: null,
      }
    },
  }
</script>