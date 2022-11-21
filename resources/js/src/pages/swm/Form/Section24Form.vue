<template>
  <DefaultLayout :access="access">
    <div class="">
      <div class="font-bold text-2xl flex items-center">
        <b-tooltip label="Back" type="is-dark" :delay="2000">
          <Link @click="goBack" class="px-3">
            <box-icon name="arrow-back" animation="tada-hover"></box-icon>
          </Link>
        </b-tooltip>
        Section 24 Form
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
                <v-card-title> Section 24 Information </v-card-title>
                <v-card-text>
                  <div class="grid grid-cols-4 gap-2">
                    <ValidationProvider
                      vid="section24_iis_number"
                      name="IIS Number"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="IIS Number"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_iis_number"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_catered_barangay"
                      name="Catered Barangay"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Catered Barangay"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_catered_barangay"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>

                    <ValidationProvider
                      vid="section24_schedule_of_collection"
                      name="Schedule of Collection"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-select
                        v-model="sec_24.section24_schedule_of_collection"
                        :items="date_of_collection"
                        :menu-props="{
                          maxHeight: '400',
                        }"
                        label="Select Day"
                        multiple
                        outlined
                        clearable
                        dense
                        chips
                      ></v-select>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_swm_personnel"
                      name="SWM Personnel"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="SWM Personnel"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_swm_personnel"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_with_letter"
                      name="With Letter"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="With Letter"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_with_letter"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <div class="col-span-2">
                      <ValidationProvider
                        vid="section24_collection_vehicle"
                        name="Collection Vehicle"
                        rules=""
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          label="Collection Vehicle"
                          :error-messages="errors[0]"
                          v-model="sec_24.section24_collection_vehicle"
                          outlined
                          clearable
                          dense
                          color="dark"
                          rows="2"
                        ></v-textarea>
                      </ValidationProvider>
                    </div>

                    <div class="col-span-4 grid grid-cols-2 gap-2">
                      <div>
                        <ValidationProvider
                          vid="section24_findings"
                          name="Findings"
                          rules=""
                          v-slot="{ errors }"
                        >
                          <v-textarea
                            label="Findings"
                            :error-messages="errors[0]"
                            v-model="sec_24.section24_findings"
                            outlined
                            clearable
                            dense
                            color="dark"
                            rows="2"
                          ></v-textarea>
                        </ValidationProvider>
                      </div>

                      <div>
                        <ValidationProvider
                          vid="section24_remarks"
                          name="Remarks"
                          rules=""
                          v-slot="{ errors }"
                        >
                          <v-textarea
                            label="Remarks"
                            :error-messages="errors[0]"
                            v-model="sec_24.section24_remarks"
                            outlined
                            clearable
                            dense
                            color="dark"
                            rows="2"
                          ></v-textarea>
                        </ValidationProvider>
                      </div>
                    </div>
                  </div>

                  <v-divider />
                  <div class="grid grid-cols-5 gap-2">
                    <v-checkbox v-model="sec_24.section24_basis_1">
                      <template v-slot:label>
                        <div>
                          Requirement 1
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(1)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_2">
                      <template v-slot:label>
                        <div>
                          Requirement 2
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(2)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_3">
                      <template v-slot:label>
                        <div>
                          Requirement 3
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(3)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_4">
                      <template v-slot:label>
                        <div>
                          Requirement 4
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(4)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_5">
                      <template v-slot:label>
                        <div>
                          Requirement 5
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(5)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_6">
                      <template v-slot:label>
                        <div>
                          Requirement 6
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(6)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_7">
                      <template v-slot:label>
                        <div>
                          Requirement 7
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(7)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_8">
                      <template v-slot:label>
                        <div>
                          Requirement 8
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(8)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_9">
                      <template v-slot:label>
                        <div>
                          Requirement 9
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon @click="view_section(9)" @click.stop v-on="on" small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_10">
                      <template v-slot:label>
                        <div>
                          Requirement 10
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon
                                @click="view_section(10)"
                                @click.stop
                                v-on="on"
                                small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                    <v-checkbox v-model="sec_24.section24_basis_11">
                      <template v-slot:label>
                        <div>
                          Requirement 11
                          <v-tooltip top>
                            <template v-slot:activator="{ on }">
                              <v-icon
                                @click="view_section(11)"
                                @click.stop
                                v-on="on"
                                small
                                >mdi-dots-horizontal</v-icon
                              >
                            </template>
                            View Requirement
                          </v-tooltip>
                        </div>
                      </template>
                    </v-checkbox>
                  </div>
                  <v-divider />

                  <v-card-text class="grid grid-cols-2 gap-x-2">
                    <div v-if="withAttachment" class="">
                      <ViewAttachements
                        :attachments="attachments.data"
                        :goTo="
                          (url) => {
                            goTo(url);
                          }
                        "
                        :removeFile="removeAttachment"
                      />
                    </div>
                  </v-card-text>
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
    <Dialog
      header="View Requirement"
      :visible.sync="section.modal"
      :containerStyle="{ width: '50vw' }"
      position="right"
      :modal="true"
    >
      <div class="m-0 whitespace-pre-line break-words">
        {{ section.data }}
      </div>
      <template #footer>
        <Button
          label="Close"
          icon="pi pi-times"
          @click="closePosition"
          class="p-button-rounded p-button-secondary p-button-sm"
        />
      </template>
    </Dialog>
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../../mixins";
import ViewAttachements from "../../../components/ViewAttachements.vue";
import Dialog from "primevue/dialog";
import Button from "primevue/button";
export default {
  components: {
    DefaultLayout,
    Link,
    ViewAttachements,
    Dialog,
    Button,
  },
  mixins: [page, toasts, swm, dialogs],
  data() {
    return {
      sec_24_form_type: "create",
      date_granted: false,
      monitored_calendar: false,
      settings: [],
      section: {
        modal: false,
        data: "",
      },
      date_of_collection: [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday",
      ],
    };
  },
  created() {
    this.loading = true;
    if (this.lce_info !== undefined) {
      if (this.lce_info.length > 0) {
        this.sec_24 = { ...this.sec_24, ...this.lce_info[0] };
        this.sec_24_form_type = "create";
      }
    } else if (this.section24_edit !== undefined) {
      if (this.section24_edit.length > 0) {
        this.sec_24_form_type = "patch";
        this.sec_24 = { ...this.section24_edit[0] };
      }
    }
    this.loading = false;
  },
  computed: {
    address() {
      let formdata = null;
      if (this.sec_24_form_type === "create") {
        formdata = this.lce_info[0];
      } else if (this.sec_24_form_type === "patch") {
        formdata = this.section24_edit[0];
      }
      const { provDesc, citymunDesc, lce_zip_code, districtCode } = formdata;
      return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
    },
  },
  methods: {
    closePosition() {
      this.section = {
        modal: false,
        data: "",
      };
    },

    async view_section(section) {
      switch (section) {
        case 1:
          this.section.data =
            "1. To provide a separate truck for the collection of all recyclables such as glass, metals, plastics, waste paper to be delivered to Materials Recovery Facilities, recycling facilities or contracted junkshops";
          break;
        case 2:
          this.section.data =
            "2. To provide truck for the collection of compostable or biodegradable wastes to be transported to composting facilities;";
          break;
        case 3:
          this.section.data =
            "3. To provide truck for residual wastes from the residents and other establishments to be hauled out to disposal facilities;";
          break;
        case 4:
          this.section.data =
            "4. To provide truck for the collection of household hazardous wastes for proper treatment prior to disposal.";
          break;
        case 5:
          this.section.data =
            "5. To provide truck for household infectious wastes or COVID-19 related wastes;";
          break;
        case 6:
          this.section.data =
            "6. To provide a compartmentalized truck, whichever is applicable to ensure separate waste collection;";
          break;
        case 7:
          this.section.data =
            "7. To implement no collection of unsegregated or mixed solid wastes placed in garbage bags by residents and establishments;";
          break;
        case 8:
          this.section.data = `8. To observe the following color coding of wastes bags listed below:
a. green for biodegradable wastes;
b. blue for recyclables;
c. black for residuals or non-recyclables;
d. red for household hazardous wastes or special wastes; and
e. yellow for household infectious/covid-19 wastes`;
          break;
        case 9:
          this.section.data =
            "9. To apply color coding/labeling of the hauling truck per type of solid waste collected as stated above.";
          break;
        case 10:
          this.section.data =
            "10. To retain employees and crews that are implementing good solid waste collection/hauling practices in compliance with Section 24, RA 9003";
          break;
        case 11:
          this.section.data =
            "11. To replace employees and crews violating Section 24 of RA 9003;";
          break;
      }
      this.section.modal = true;
    },
    saveForm() {
      if (this.sec_24_form_type === "create") {
        this.savesec24Form();
      } else if (this.sec_24_form_type === "patch") {
        this.updatesec24Form();
      }
    },
    async savesec24Form() {
      try {
        const data = { ...this.sec_24, lce_FK: this.sec_24.id };
        await this.$inertia.post("/app/swm/section24_register_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.data.response.messsage);
      }
    },
    async updatesec24Form() {
      try {
        const data = { ...this.sec_24 };
        await this.$inertia.post("/app/swm/section24_update_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.data.response.messsage);
      }
    },
  },
};
</script>

<style></style>
