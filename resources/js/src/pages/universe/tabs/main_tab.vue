<template>
  <v-form @submit.prevent="submit_basic_info">
    <div class="grid grid-cols-1 gap-4 mt-5 mb-5">
        <!--
        <v-card class="p-3" elevation="3" max-width="100%">
            <v-img
              src="../../images/emb_logo.png"
            ></v-img>
        </v-card>
        -->
              <div v-if="ctr_file" class="grid grid-cols-6 gap-y-3 gap-x-3 mb-2">
                  <div class="grid grid-cols-1 col-span-2 gap-y-2 gap-x-2">
                      <MiniDashboard
                          dashboard_header_label="Permits: "
                          :dashboard_header="ctr_file['permit'].header"
                          :dashboard_content_label="ctr_file['permit'].content_label"
                          :dashboard_content="ctr_file['permit'].content"
                      ></MiniDashboard>
                  </div>
                  <MiniDashboard
                      dashboard_header_label="NOV's: "
                      :dashboard_header="ctr_file['nov'].header"
                      :dashboard_content_label="ctr_file['nov'].content_label"
                      :dashboard_content="ctr_file['nov'].content"
                  ></MiniDashboard>
                  <MiniDashboard
                      dashboard_header_label="Monitoring: "
                      :dashboard_header="ctr_file['monitoring'].header"
                      :dashboard_content_label="ctr_file['monitoring'].content_label"
                      :dashboard_content="ctr_file['monitoring'].content"
                  ></MiniDashboard>
                  <MiniDashboard
                      dashboard_header_label="PCO"
                      :dashboard_header="ctr_file['pco'].header"
                      :dashboard_content_label="ctr_file['pco'].content_label"
                      :dashboard_content="ctr_file['pco'].content"
                  ></MiniDashboard>
                  <MiniDashboard
                      dashboard_header_label="Complaint"
                      :dashboard_header="ctr_file['complaint'].header"
                      :dashboard_content_label="ctr_file['complaint'].content_label"
                      :dashboard_content="ctr_file['complaint'].content"
                  ></MiniDashboard>
                  <!--
                  <MiniDashboard
                      dashboard_color="bg-zinc-600"
                      dashboard_header_label="Hazwaste"
                      :dashboard_header="ctr_file['hazwaste'].header"
                      :dashboard_content_label="ctr_file['hazwaste'].content_label"
                      :dashboard_content="ctr_file['hazwaste'].content"
                  ></MiniDashboard>
                  -->
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
              <!-- <v-btn icon>
                <v-icon>mdi-arrow-left</v-icon>
              </v-btn> -->
              <v-toolbar-title>Firm Information</v-toolbar-title>
            </v-toolbar>
            <v-tabs vertical>
              <v-tab>
                <div class="flex flex-start text-left">
                  <v-icon>mdi-information</v-icon>&nbsp;
                  Basic Information
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start text-left">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Permit
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start text-left">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Monitoring
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start text-left">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Legal
                </div>
              </v-tab>
              <!--
              <v-tab>
                <div class="flex flex-start">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Hazwaste
                </div>
              </v-tab>
              -->
              <v-tab>
                <div class="flex flex-start text-left">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  PCO
                </div>
              </v-tab>
              <v-tab>
                <div class="flex flex-start text-left">
                  <v-icon>mdi-file-document-multiple-outline</v-icon>&nbsp;
                  Complaint
                </div>
              </v-tab>

              <v-tab-item>
                  <BasicTab :form_basic_info="form_basic_info"
                    :province_list="province_list"
                    :municipality_list="municipality_list"
                    :barangay_list="barangay_list"
                    :psic_group_list="psic_group_list"
                    :psic_class_list="psic_class_list"
                    :psic_subclass_list="psic_subclass_list"
                    :project_type_list="project_type_list"
                    :project_subtype_list="project_subtype_list"
                    :project_specific_type_list="project_specific_type_list"
                    :project_specific_subtype_list="project_specific_subtype_list" >
                  </BasicTab>
              </v-tab-item>
              <v-tab-item>
                  <PermitTab :form_permit_info="form_permit_info" :permit_table="permit_table"></PermitTab>
              </v-tab-item>
              <v-tab-item>
                  <MonitoringTab :laws="laws" :form_monitoring_info="form_monitoring_info" :monitoring_table="monitoring_table"></MonitoringTab>
              </v-tab-item>
              <v-tab-item>
                  <LegalTab :laws="laws" :form_legal_info="form_legal_info" :legal_table="legal_table"></LegalTab>
              </v-tab-item>
              <!--
              <v-tab-item>
                  <HazwasteTab :form_hazwaste_info="form_hazwaste_info" :hazwaste_table="hazwaste_table"></HazwasteTab>
              </v-tab-item>
              -->
              <v-tab-item>
                  <PcoTab :form_pco_info="form_pco_info" :pco_table="pco_table"></PcoTab>
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
  import PcoTab from "./pco_tab";
  import ComplaintTab from "./complaint_tab";
  import MiniDashboard from "./mini_dashboard/mini_dashboard_card";
  export default {
    props:{
      form_basic_info: Object,
      form_permit_info: Object,
      form_monitoring_info: Object,
      form_legal_info: Object,
      form_hazwaste_info: Object,
      form_complaint_info: Object,
      form_pco_info: Object,

      permit_table: Array,
      monitoring_table: Array,
      legal_table: Array,
      hazwaste_table: Array,
      complaint_table: Array,
      pco_table: Array,
      submit_basic_info: Function,

      ctr_file: Object,

      province_list: Array,
      municipality_list: Array,
      barangay_list: Array,
      psic_group_list: Array,
      psic_class_list: Array,
      psic_subclass_list: Array,
      project_type_list: Array,
      project_subtype_list: Array,
      project_specific_type_list: Array,
      project_specific_subtype_list: Array,
      laws:Array
    },
    components:{
        BasicTab,
        PermitTab,
        MonitoringTab,
        LegalTab,
        HazwasteTab,
        PcoTab,
        ComplaintTab,

        MiniDashboard,
    },
    data () {
      return {
        tab: null,
      }
    }
  }
</script>
