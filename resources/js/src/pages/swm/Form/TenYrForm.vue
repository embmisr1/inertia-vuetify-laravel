<template>
  <DefaultLayout :access="access">
    <div class="">
      <div class="font-bold text-2xl flex items-center">
        <b-tooltip label="Back" type="is-dark" :delay="2000">
          <Link
            v-if="ten_yr.lce_FK"
            :href="`/app/swm/lce_show/${ten_yr.lce_FK}`"
            class="px-3"
          >
            <box-icon name="arrow-back" animation="tada-hover"></box-icon>
          </Link>
          <Link v-else :href="`/app/swm/lce_show/${ten_yr.id}`" class="px-3">
            <box-icon name="arrow-back" animation="tada-hover"></box-icon>
          </Link>
        </b-tooltip>
        10 Year Form
      </div>
    </div>
    <div v-if="loading">Loading..</div>
    <div v-else>
      <ValidationObserver
        v-slot="{ handleSubmit, invalid }"
        ref="psic_group_class_observer"
      >
        <form @submit.prevent="handleSubmit(saveForm)">
          <v-container>
            <div class="space-y-4">
              <v-card>
                <v-card-title> Address Information </v-card-title>
                <v-card-text class="">
                  {{ address }}
                </v-card-text>
              </v-card>
              <v-card>
                <v-card-title> 10 Year Information </v-card-title>
                <v-card-text class="grid grid-cols-2 gap-2">
                  <ValidationProvider
                    vid="ten_year_planning_period"
                    name="10 YEAR Planning Period"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-text-field
                      label="10 YEAR Planning Period"
                      :error-messages="errors[0]"
                      v-model="ten_yr.ten_year_planning_period"
                      outlined
                      clearable
                      dense
                      color="dark"
                    ></v-text-field>
                  </ValidationProvider>
                  <!-- <ValidationProvider
                                        vid="ten_year_year_approved"
                                        name="10 YEAR APPROVED"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="10 YEAR APPROVED"
                                            :error-messages="errors[0]"
                                            v-model="
                                                ten_yr.ten_year_year_approved
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider> -->

                  <ValidationProvider
                    vid="ten_year_year_approved"
                    name="10 YEAR APPROVED"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-dialog
                      ref="dialog"
                      v-model="ten_year_year_approved"
                      :return-value.sync="ten_yr.ten_year_year_approved"
                      persistent
                      width="290px"
                      dark
                    >
                      <template v-slot:activator="{ on, attrs }">
                        <v-text-field
                          v-model="ten_yr.ten_year_year_approved"
                          label="10 YEAR APPROVED"
                          readonly
                          outlined
                          dense
                          v-bind="attrs"
                          v-on="on"
                          color="black"
                        ></v-text-field>
                      </template>
                      <v-date-picker
                        v-model="ten_yr.ten_year_year_approved"
                        scrollable
                        dark
                      >
                        <v-spacer></v-spacer>
                        <v-btn text dark @click="ten_year_year_approved = false">
                          Cancel
                        </v-btn>
                        <v-btn
                          text
                          dark
                          @click="$refs.dialog.save(ten_yr.ten_year_year_approved)"
                        >
                          OK
                        </v-btn>
                      </v-date-picker>
                    </v-dialog>
                  </ValidationProvider>

                  <ValidationProvider
                    vid="ten_year_number"
                    name="Number"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-text-field
                      label="Number"
                      :error-messages="errors[0]"
                      v-model="ten_yr.ten_year_number"
                      outlined
                      clearable
                      dense
                      color="dark"
                    ></v-text-field>
                  </ValidationProvider>
                </v-card-text>
              </v-card>
              <v-card>
                <v-card-title> FIndings Overview </v-card-title>
                <v-card-text class="grid grid-cols-2 gap-2">
                  <!-- <div
                                        v-for="overview in overview_of_finding"
                                        :key="overview.id"
                                    >
                                        <v-checkbox
                                            v-model="ten_year_findings"
                                            :label="overview.name"
                                            :value="overview.name"
                                            hide-details
                                            color="dark"
                                        ></v-checkbox>
                                    </div> -->
                  <v-checkbox
                    v-model="ten_yr.finding_a"
                    label="Source Reduction Activited at Source are Present"
                    value="Source Reduction Activited at Source are Present"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_b"
                    label="Segregated Collection"
                    value="Segregated Collection"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_c"
                    label="Increased Collection Average"
                    value="Increased Collection Average"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_d"
                    label="Segregation, Recycling and Composting"
                    value="Segregation, Recycling and Composting"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_e"
                    label="Marketing & Market Development"
                    value="Marketing & Market Development"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_f"
                    label="Alternative Technologies for Residual Wastes"
                    value="Alternative Technologies for Residual Wastes"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_g"
                    label="Solid Waste Disposal & Health Care Wastes"
                    value="Solid Waste Disposal & Health Care Wastes"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_h"
                    label="Monitoring Program"
                    value="Monitoring Program"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_i"
                    label="Financial Aspects"
                    value="Financial Aspects"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                  <v-checkbox
                    v-model="ten_yr.finding_j"
                    label="Waste Diversion"
                    value="Waste Diversion"
                    hide-details
                    color="dark"
                  ></v-checkbox>
                </v-card-text>
              </v-card>
              <v-card v-if="ten_year_monitoring_list" max-height="300">
                <v-card-title primary-title>
                  <Link :href="`/app/swm/ten_year_monitoring_register/${ten_yr.id}`">
                    <v-btn dark small> Add Monitoring List </v-btn>
                  </Link>
                </v-card-title>
                <v-card-text v-if="ten_year_monitoring_list.length">
                  <b-table
                    :data="ten_year_monitoring_list"
                    :per-page="ten_year_monitoring_list.per_page"
                    pagination-size="is-small"
                    page-input
                    hoverable
                    backend-pagination
                    :total="ten_year_monitoring_list.total"
                    :current-page.sync="ten_year_monitoring_list.current_page"
                    pagination-position="top"
                    pagination-rounded
                    @page-change="onPageChange"
                    narrowed
                    :loading="loading"
                    bordered
                    sticky-header
                    scrollable
                    :row-class="(row, index) => (isTheme ? 'bg-black text-white' : '')"
                    :header-class="isTheme ? 'bg-black text-white' : ''"
                    height="420"
                  >
                    <b-table-column
                      field="ten_year_mon_date_monitored"
                      label="Date Monitored"
                      centered
                    >
                      <template #searchable="props">
                        <b-input placeholder="Search..." icon="magnify" size="is-small" />
                      </template>
                      <template v-slot="props">
                        {{ props.row.ten_year_mon_date_monitored }}
                      </template>
                    </b-table-column>

                    <b-table-column
                      field="ten_year_mon_date_submitted"
                      label="Date Submitted"
                      centered
                    >
                      <template #searchable="props">
                        <b-input placeholder="Search..." icon="magnify" size="is-small" />
                      </template>
                      <template v-slot="props">
                        {{ props.row.ten_year_mon_date_submitted }}
                      </template>
                    </b-table-column>

                    <b-table-column field="ten_year_mon_by" label="Monitored By" centered>
                      <template v-slot="props">
                        {{ props.row.ten_year_mon_by }}
                      </template>
                    </b-table-column>

                    <b-table-column field="action" label="" v-slot="props">
                      <Link :href="`/app/swm/ten_year_monitoring_edit/${props.row.id}`">
                        <box-icon
                          name="edit"
                          color="orange"
                          animation="tada-hover"
                        ></box-icon
                      ></Link>
                      <v-btn icon small @click="removeMonitoring(props.row.id)"
                        ><box-icon
                          name="trash"
                          color="red"
                          animation="tada-hover"
                        ></box-icon
                      ></v-btn>
                    </b-table-column>
                    <template #empty>
                      <div class="text-center text-3xl text-gray-500 font-extrabold">
                        No lce_list Found
                      </div>
                    </template>
                  </b-table>
                </v-card-text>
              </v-card>
              <v-card>
                <v-card-title> Upload Attachments </v-card-title>
                <v-card-text class="grid grid-cols-2 gap-2">
                  <ValidationProvider
                    vid="ten_year_file"
                    name="10 YEAH File"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-file-input
                      label="10 YEAH COPY File"
                      :error-messages="errors[0]"
                      v-model="ten_yr.ten_year_file"
                      outlined
                      clearable
                      dense
                      color="dark"
                      truncate-length="15"
                      multiple
                      accept="image/png, image/jpeg, application/pdf"
                    ></v-file-input>
                  </ValidationProvider>
                  <ValidationProvider
                    vid="ten_year_copy_plan"
                    name="10 YEAH COPY PLAN"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-file-input
                      label="10 YEAH COPY PLAN"
                      :error-messages="errors[0]"
                      v-model="ten_yr.ten_year_copy_plan"
                      outlined
                      clearable
                      dense
                      color="dark"
                      truncate-length="15"
                      multiple
                      accept="image/png, image/jpeg, application/pdf"
                    ></v-file-input>
                  </ValidationProvider>
                  <ValidationProvider
                    vid="ten_year_copy_resolution"
                    name="10 YEAH COPY RESOLUTION"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-file-input
                      label="10 YEAH COPY RESOLUTION"
                      :error-messages="errors[0]"
                      v-model="ten_yr.ten_year_copy_resolution"
                      outlined
                      clearable
                      dense
                      color="dark"
                      truncate-length="15"
                      multiple
                      accept="image/png, image/jpeg, application/pdf"
                    ></v-file-input>
                  </ValidationProvider>
                  <ValidationProvider
                    vid="ten_year_copy_form"
                    name="10 YEAH COPY FORM"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-file-input
                      label="10 YEAH COPY FORM"
                      :error-messages="errors[0]"
                      v-model="ten_yr.ten_year_copy_form"
                      outlined
                      clearable
                      dense
                      color="dark"
                      truncate-length="15"
                      multiple
                      accept="image/png, image/jpeg, application/pdf"
                    ></v-file-input>
                  </ValidationProvider>
                </v-card-text>
              </v-card>

              <v-card v-if="attachments">
                <v-card-title primary-title> Attachments </v-card-title>
                <v-card-text class="grid grid-cols-2 gap-2">
                  <ViewAttachements
                    v-if="attachments.ten_yr_file.data.length"
                    title="10 YEAR FILE Attachments"
                    :attachments="attachments.ten_yr_file.data"
                    :goTo="
                      (url) => {
                        goTo(url);
                      }
                    "
                    :removeFile="removeFIle"
                  />
                  <ViewAttachements
                    v-if="attachments.copy_plan.data.length"
                    title="10 YEAR COPY PLAN Attachments"
                    :attachments="attachments.copy_plan.data"
                    :goTo="
                      (url) => {
                        goTo(url);
                      }
                    "
                    :removeFile="removeFIle"
                  />
                  <ViewAttachements
                    v-if="attachments.copy_form.data.length"
                    title="10 YEAR COPY FORM Attachments"
                    :attachments="attachments.copy_form.data"
                    :goTo="
                      (url) => {
                        goTo(url);
                      }
                    "
                    :removeFile="removeFIle"
                  />
                  <ViewAttachements
                    v-if="attachments.copy_resolution.data.length"
                    title="10 YEAR COPY RESOLUTION Attachments"
                    :attachments="attachments.copy_resolution.data"
                    :goTo="
                      (url) => {
                        goTo(url);
                      }
                    "
                    :removeFile="removeFIle"
                  />
                </v-card-text>
              </v-card>
            </div>
            <div class="flex justify-center mt-4">
              <v-btn color="red darken-2" text type="reset">Reset</v-btn>
              <v-btn :disabled="invalid" color="primary" type="submit">Save</v-btn>
            </div>
          </v-container>
        </form>
      </ValidationObserver>
    </div>
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../../mixins";
import ViewAttachements from "../../../components/ViewAttachements.vue";
export default {
  components: {
    DefaultLayout,
    Link,
    ViewAttachements,
  },
  mixins: [page, toasts, swm, dialogs],
  data() {
    return {
      ten_yr_form_type: "create",
      ten_year_year_approved: false,
    };
  },
  created() {
    this.loading = true;
    if (this.lce_info !== undefined) {
      if (this.lce_info.length > 0) {
        this.ten_yr = { ...this.lce_info[0] };
        this.ten_yr_form_type = "create";
      }
    } else if (this.ten_year_edit !== undefined) {
      if (this.ten_year_edit.length > 0) {
        this.ten_yr_form_type = "patch";
        this.ten_yr = {
          ...this.ten_year_edit[0],
        };
        // this.ten_year_findings = this.ten_year_findings_array
      }
    }
    this.loading = false;
  },
  computed: {
    address() {
      let formdata = null;
      if (this.ten_yr_form_type === "create") {
        formdata = this.lce_info[0];
      } else if (this.ten_yr_form_type === "patch") {
        formdata = this.ten_yr;
      }
      const { provDesc, citymunDesc, lce_zip_code, districtCode } = formdata;
      return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
    },
  },
  methods: {
    saveForm() {
      if (this.ten_yr_form_type === "create") {
        this.saveTenYrForm();
      } else if (this.ten_yr_form_type === "patch") {
        this.updateTenYrForm();
      }
    },
    async saveTenYrForm() {
      try {
        const data = {
          ...this.ten_yr,
          lce_FK: this.ten_yr.id,
        };
        await this.$inertia.post("/app/swm/ten_year_register_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.da.aresponse.messsage);
      }
    },
    async updateTenYrForm() {
      try {
        const data = {
          ...this.ten_yr,
        };
        await this.$inertia.post("/app/swm/ten_year_update_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.data.response.messsage);
      }
    },
    async removeMonitoring(mon_id) {
      try {
        await this.$inertia.delete(`/app/swm/ten_year_monitoring_delete/${mon_id}`);
      } catch (error) {}
    },
    async removeFIle(media_id) {
      try {
        this.loading = true;
        await this.confirmDelete("This action  cannot be undone", async () => {
          await this.$inertia.delete(`/app/swm/ten_year_remove_fIle/${media_id}`);
        });
        this.loading = false;
      } catch (error) {
        this.loading = false;
        console.log(error);
        this.error(error.response.data.message);
      }
    },
  },
};
</script>

<style></style>
