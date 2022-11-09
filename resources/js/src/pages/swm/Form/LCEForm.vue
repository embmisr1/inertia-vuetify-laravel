<template>
  <DefaultLayout :access="access">
    <!-- <Link href="/app/swm/lce_list"> <v-btn color="dark">Back</v-btn></Link> -->
    <div class="">
      <div class="font-bold text-2xl">
        <b-tooltip label="Back" type="is-dark" :delay="2000">
          <Link :href="`/app/swm/lce_show/${lce.id}`" class="px-3">
            <box-icon name="arrow-back" animation="tada-hover"></box-icon>
          </Link> </b-tooltip
        >LCE Form
      </div>
    </div>
    <ValidationObserver
      v-slot="{ handleSubmit, invalid }"
      ref="psic_group_class_observer"
    >
      <form @submit.prevent="saveForm">
        <v-container>
          <div class="space-y-4">
            <v-card>
              <v-card-title> Address Information </v-card-title>
              <v-card-text>
                <div class="grid grid-cols-3 gap-x-2">
                  <ValidationProvider vid="prov" name="Province" v-slot="{ errors }">
                    <v-select
                      :items="province_dropdown"
                      label="Select Province"
                      :error-messages="errors[0]"
                      v-model="lce.lce_province_FK"
                      outlined
                      item-text="provDesc"
                      item-value="PK_province_ID"
                      clearable
                      dense
                      color="dark"
                      hint="La Union"
                      persistent-hint
                    ></v-select>
                  </ValidationProvider>
                  <ValidationProvider vid="mun" name="Municipaliiy" v-slot="{ errors }">
                    <v-select
                      :disabled="!cityMun.length"
                      :items="cityMun"
                      label="Select Municipality"
                      :error-messages="errors[0]"
                      v-model="lce.lce_municipality_FK"
                      item-text="citymunDesc"
                      item-value="PK_citymun_ID"
                      outlined
                      clearable
                      dense
                      color="dark"
                      hint="City of San Fernando"
                      persistent-hint
                    ></v-select>
                  </ValidationProvider>
                  <ValidationProvider vid="brgy" name="Barangay" v-slot="{ errors }">
                    <v-select
                      :disabled="!brgy.length"
                      :items="brgy"
                      label="Select Barangay"
                      :error-messages="errors[0]"
                      v-model="lce.lce_barangay_FK"
                      item-text="brgyDesc"
                      item-value="PK_brgy_ID"
                      outlined
                      clearable
                      dense
                      color="dark"
                      hint="Sevilla"
                      persistent-hint
                    ></v-select>
                  </ValidationProvider>
                </div>
                <div class="grid grid-cols-5 gap-x-2">
                  <!-- <div class="col-span-4">
                                        <ValidationProvider
                                            vid="disctrict"
                                            name="District"
                                            rules="required"
                                            v-slot="{ errors }"
                                        >
                                            <v-text-field
                                                label="District"
                                                :error-messages="errors[0]"
                                                v-model="lce.lce_district"
                                                outlined
                                                clearable
                                                dense
                                                color="dark"
                                                hint="District 1"
                                                persistent-hint
                                            ></v-text-field>
                                        </ValidationProvider>
                                    </div> -->
                  <ValidationProvider
                    vid="zpip"
                    name="Zip Code"
                    rules=""
                    v-slot="{ errors }"
                  >
                    <v-text-field
                      label="Zip Code"
                      :error-messages="errors[0]"
                      v-model="lce.lce_zip_code"
                      outlined
                      clearable
                      dense
                      color="dark"
                    ></v-text-field>
                  </ValidationProvider>
                </div>
              </v-card-text>
            </v-card>

            <v-card>
              <v-card-title> Basic Information </v-card-title>
              <v-card-text>
                <div class="grid grid-cols-5 gap-x-2">
                  <div>
                    <div
                      v-if="attachments.data.length"
                      class="flex flex-col justify-center space-y-2"
                    >
                      <v-avatar size="100" width="80%" class="align-self-center p-2">
                        <img :src="avatar.url" alt="Avatar" />
                      </v-avatar>

                      <v-btn
                        color="orange darken-3"
                        class="white--text"
                        dense
                        raised
                        small
                        block
                        @click="removeAttachment(avatar.id)"
                        >Remove Avatar</v-btn
                      >
                    </div>
                    <div v-else>
                      <v-file-input
                        v-model="lce.lce_file"
                        accept="image/*"
                        outlined
                        clearable
                        dense
                        multiple
                        color="dark"
                        label="Avatar"
                      ></v-file-input>
                    </div>
                  </div>
                  <div class="grid grid-cols-4 gap-x-2 col-span-4">
                    <ValidationProvider
                      vid="title"
                      name="Title"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Title"
                        :error-messages="errors[0]"
                        v-model="lce.lce_title"
                        outlined
                        clearable
                        dense
                        color="dark"
                        hint="Honorable(Hone)"
                        persistent-hint
                      ></v-text-field>
                    </ValidationProvider>

                    <ValidationProvider
                      vid="fname"
                      name="First Name"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="First Name"
                        :error-messages="errors[0]"
                        v-model="lce.lce_first_name"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>

                    <ValidationProvider
                      vid="mname"
                      name="Middle Name"
                      rules=""
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Middle Name"
                        :error-messages="errors[0]"
                        v-model="lce.lce_middle_name"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>

                    <ValidationProvider
                      vid="lname"
                      name="Last Name"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Last Name"
                        :error-messages="errors[0]"
                        v-model="lce.lce_last_name"
                        outlined
                        clearable
                        dense
                        color="dark"
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="salutation"
                      name="Salutation"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Salutation"
                        :error-messages="errors[0]"
                        v-model="lce.lce_salutation"
                        outlined
                        clearable
                        dense
                        color="dark"
                        hint="Mayor"
                        persistent-hint
                      ></v-text-field>
                    </ValidationProvider>
                    <ValidationProvider
                      vid="position"
                      name="Position"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <v-text-field
                        label="Position"
                        :error-messages="errors[0]"
                        v-model="lce.lce_position"
                        outlined
                        clearable
                        dense
                        color="dark"
                        hint="Municipal Mayor"
                        persistent-hint
                      ></v-text-field>
                    </ValidationProvider>
                  </div>
                </div>
              </v-card-text>
            </v-card>

            <v-card>
              <v-card-title> Focal Person Information </v-card-title>
              <v-card-text>
                <ValidationProvider
                  vid="focal"
                  name="Focal Person"
                  rules="required"
                  v-slot="{ errors }"
                >
                  <v-text-field
                    label="Focal Person"
                    :error-messages="errors[0]"
                    v-model="lce.lce_focal_person"
                    outlined
                    clearable
                    dense
                    color="dark"
                  ></v-text-field>
                </ValidationProvider>
                <ValidationProvider
                  vid="contact_no"
                  name="Contact Number"
                  rules="required"
                  v-slot="{ errors }"
                >
                  <v-text-field
                    label="Contact No."
                    :error-messages="errors[0]"
                    v-model="lce.lce_contact_number"
                    outlined
                    clearable
                    dense
                    color="dark"
                  ></v-text-field>
                </ValidationProvider>
                <ValidationProvider
                  vid="email"
                  name="Email"
                  rules="required|email"
                  v-slot="{ errors }"
                >
                  <v-text-field
                    label="Email"
                    :error-messages="errors[0]"
                    v-model="lce.lce_email_address"
                    outlined
                    clearable
                    dense
                    color="dark"
                  ></v-text-field>
                </ValidationProvider>
              </v-card-text>
            </v-card>
          </div>
          <div class="flex justify-center mt-4">
            <v-btn color="red darken-2" text type="reset">Reset</v-btn>
            <v-btn color="primary" type="submit">Save</v-btn>
          </div>
        </v-container>
      </form>
    </ValidationObserver>
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../../mixins";
export default {
  components: {
    DefaultLayout,
    Link,
  },
  mixins: [page, toasts, swm, dialogs],
  mounted() {
    if (this.lce_edit.length > 0) {
      this.lce = { ...this.lce_edit[0] };
    }
  },
  computed: {},
  methods: {
    async removeAvatar() {
      const { id } = this.avatar;
      await this.$inertia.delete(`/app/delete_attachements/${id}`);
    },
    saveForm() {
      if (this.lce_edit.length > 0) {
        this.updateLCEForm();
      } else {
        this.saveLCEForm();
      }
    },
    async saveLCEForm() {
      try {
        const data = { ...this.lce };
        await this.$inertia.post("#", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.da.aresponse.messsage);
      }
    },
    async updateLCEForm() {
      try {
        const data = { ...this.lce };
        await this.$inertia.post("/app/swm/lce_update_process", data);
      } catch (error) {
        console.error(error.message);
        this.error(error.data.response.messsage);
      }
    },
  },
};
</script>

<style></style>
