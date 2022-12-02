<template>
  <DefaultLayout :access="access">
    <div class="">
      <div class="font-bold text-2xl flex items-center">
        <b-tooltip label="Back" type="is-dark" :delay="2000">
          <Link @click="goBack" class="px-3">
            <box-icon name="arrow-back" animation="tada-hover"></box-icon>
          </Link>
        </b-tooltip>
        IEC Form
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
                <v-card-title> IEC Information </v-card-title>
                <v-card-text>
                  <ValidationProvider
                    vid="iec_topic"
                    name="Topic"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-textarea
                      label="Topic"
                      :error-messages="errors[0]"
                      v-model="iec.iec_topic"
                      outlined
                      clearable
                      dense
                      color="dark"
                      rows="2"
                    ></v-textarea>
                  </ValidationProvider>
                  <ValidationProvider
                    vid="iec_speaker"
                    name="Speaker"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-textarea
                      label="Speaker"
                      :error-messages="errors[0]"
                      v-model="iec.iec_speaker"
                      outlined
                      clearable
                      dense
                      color="dark"
                      rows="2"
                    ></v-textarea>
                  </ValidationProvider>
                  <div class="grid grid-cols-5 gap-2">
                    <div class="col-span-2">
                      <ValidationProvider
                        vid="iec_male"
                        name="Male"
                        rules=""
                        v-slot="{ errors }"
                      >
                        <v-text-field
                          label="Male"
                          type="number"
                          :error-messages="errors[0]"
                          v-model="iec.iec_male"
                          outlined
                          clearable
                          dense
                          color="dark"
                        ></v-text-field>
                      </ValidationProvider>
                    </div>
                    <div class="col-span-2">
                      <ValidationProvider
                        vid="iec_female"
                        name="Female"
                        rules=""
                        v-slot="{ errors }"
                      >
                        <v-text-field
                          label="Female"
                          type="number"
                          :error-messages="errors[0]"
                          v-model="iec.iec_female"
                          outlined
                          clearable
                          dense
                          color="dark"
                        ></v-text-field>
                      </ValidationProvider>
                    </div>

                    <v-file-input
                      v-model="iec.iec_file"
                      accept="image/*, application/pdf"
                      outlined
                      clearable
                      dense
                      multiple
                      color="dark"
                      label="Upload File"
                      no-icon
                    ></v-file-input>
                  </div>
                  <div class="grid grid-cols-4 gap-2">
                    <ValidationProvider
                      vid="iec_youth"
                      name="Youth"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Youth"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_youth"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_senior_citizen"
                      name="Senior Citizen"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Senior Citizen"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_senior_citizen"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_pwd"
                      name="PWD"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="PWD"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_pwd"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_lgbt"
                      name="LGBT"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="LGBT"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_lgbt"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_pdl"
                      name="PDL"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="PDL"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_pdl"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_adult"
                      name="Adult"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Adult"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_adult"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_total"
                      name="Total"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Total"
                        type="number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_total"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="iec_iis_number"
                      name="IIS Number"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="IIS Number"
                        :error-messages="errors[0]"
                        v-model="iec.iec_iis_number"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
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
      iec_form_type: "create",
      date_granted: false,
      monitored_calendar: false,
    };
  },
  created() {
    this.loading = true;
    if (this.lce_info !== undefined) {
      if (this.lce_info.length > 0) {
        this.iec = { ...this.lce_info[0] };
        this.iec_form_type = "create";
      }
    } else if (this.iec_edit !== undefined) {
      if (this.iec_edit.length > 0) {
        this.iec_form_type = "patch";
        this.iec = { ...this.iec_edit[0] };
      }
    }
    this.loading = false;
  },
  computed: {
    address() {
      let formdata = null;
      if (this.iec_form_type === "create") {
        formdata = this.lce_info[0];
      } else if (this.iec_form_type === "patch") {
        formdata = this.iec_edit[0];
      }
      const { provDesc, citymunDesc, lce_zip_code, districtCode } = formdata;
      return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
    },
  },
  methods: {
    saveForm() {
      if (this.iec_form_type === "create") {
        this.saveiecForm();
      } else if (this.iec_form_type === "patch") {
        this.updateiecForm();
      }
    },
    async saveiecForm() {
      try {
        const data = { ...this.iec, lce_FK: this.iec.id };
        await this.$inertia.post("/app/swm/iec_register_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.data.response.messsage);
      }
    },
    async updateiecForm() {
      try {
        const data = { ...this.iec };
        await this.$inertia.post("/app/swm/iec_update_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.data.response.messsage);
      }
    },
  },
};
</script>

<style></style>
