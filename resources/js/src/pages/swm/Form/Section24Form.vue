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
                      <v-text-field
                        type="date"
                        label="Schedule of Collection"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_schedule_of_collection"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
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
                    <div class="col-span-4 grid grid-cols-9 gap-x-2">
                      <div class="col-span-3">
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
                    </div>

                    <ValidationProvider
                      vid="section24_basis_1"
                      name="Basis 1"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 1"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_1"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_2"
                      name="Basis 2"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 2"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_2"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_3"
                      name="Basis 3"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 3"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_3"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_4"
                      name="Basis 4"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 4"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_4"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_5"
                      name="Basis 5"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 5"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_5"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_6"
                      name="Basis 6"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 6"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_6"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_7"
                      name="Basis 7"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 7"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_7"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_8"
                      name="Basis 8"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 8"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_8"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_9"
                      name="Basis 9"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 9"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_9"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_10"
                      name="Basis 10"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 10"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_10"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="section24_basis_11"
                      name="Basis 11"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Basis 11"
                        :error-messages="errors[0]"
                        v-model="sec_24.section24_basis_11"
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
      sec_24_form_type: "create",
      date_granted: false,
      monitored_calendar: false,
    };
  },
  created() {
    this.loading = true;
    if (this.lce_info !== undefined) {
      if (this.lce_info.length > 0) {
        this.sec_24 = { ...this.lce_info[0] };
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
