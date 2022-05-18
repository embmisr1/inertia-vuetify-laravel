<template>
  <v-form @submit.prevent="submit_basic_info">
    <div class="grid grid-cols-6 gap-4 mt-5 mb-5">
        <v-card class="p-3" elevation="3" max-width="100%">
            <v-img
              src="../../images/emb_logo.png"
            ></v-img>
        </v-card>
        <div class="col-span-5">
            <v-card class="p-5">
              <div class="grid grid-cols-3 gap-y-0 gap-x-4 mb-5">
                      <div class="text-lg">
                          Permits: 2
                      </div>
                      <div class="text-lg">
                          Monitoring Reports: 1
                      </div>
                      <div class="text-lg">
                          NOVs: 10
                      </div>
              </div>
              <div class="grid grid-cols-3 gap-y-0 gap-x-4">
                      <div class="text-lg">
                          Hazwaste: 2
                      </div>
                      <div class="text-lg">
                          Complaint: 1
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
                  <v-icon>mdi-information</v-icon>&nbsp;
                  Basic Information
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Permit
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Monitoring
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Legal
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Hazwaste
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Complaint
                </div>
              </v-tab>

              <v-tab-item>
                  <BasicTab :form_basic_info="form_basic_info"></BasicTab>
              </v-tab-item>
              <v-tab-item>
                  <PermitTab :form_permit_info="form_permit_info" :permit_table="permit_table"></PermitTab>
              </v-tab-item>
              <v-tab-item>
                  <MonitoringTab :form_monitoring_info="form_monitoring_info" :monitoring_table="monitoring_table"></MonitoringTab>
              </v-tab-item>
              <v-tab-item>
                  <LegalTab :form_legal_info="form_legal_info" :legal_table="legal_table"></LegalTab>
              </v-tab-item>
              <v-tab-item>
                  <HazwasteTab :form_hazwaste_info="form_hazwaste_info" :hazwaste_table="hazwaste_table"></HazwasteTab>
              </v-tab-item>
              <v-tab-item>
                  <ComplaintTab :form_complaint_info="form_complaint_info" :complaint_table="complaint_table"></ComplaintTab>
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
  import MonitoringTab from "./monitoring_tab";
  import LegalTab from "./legal_tab";
  import HazwasteTab from "./hazwaste_tab";
  import ComplaintTab from "./complaint_tab";
  export default {
    props:{
      form_basic_info: Object,
      form_permit_info: Object,
      form_monitoring_info: Object,
      form_legal_info: Object,
      form_hazwaste_info: Object,
      form_complaint_info: Object,

      permit_table: Array,
      monitoring_table: Array,
      legal_table: Array,
      hazwaste_table: Array,
      complaint_table: Array,
      submit_basic_info: Function,
    },
    components:{
        BasicTab,
        PermitTab,
        MonitoringTab,
        LegalTab,
        HazwasteTab,
        ComplaintTab,
    },
    data () {
      return {
        tab: null,
      }
    },
  }
</script>