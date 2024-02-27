<template>
  <DefaultLayout :access="access">
    <v-container>
      <v-row>
        <v-col>
          <ValidationObserver
            v-slot="{ handleSubmit, invalid, reset }"
            ref="validation_observer"
          >
            <form @submit.prevent="handleSubmit(submit)" @reset.prevent="reset">
              <div class="box">
                <header class="text-center font-bold text-lg">
                  Request for Service Vehicle
                </header>

                <v-row dense>
                  <v-col cols="12">
                    <div class="border px-2 rounded">
                      <ValidationProvider
                        vid="Name/s"
                        name="Name/s"
                        :rules="`required`"
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          :loading="loading"
                          :disabled="loading"
                          :error-messages="errors"
                          v-model="fields.name"
                          label="Name/s"
                          rows="1"
                          row-height="15"
                          clearable
                          auto-grow
                          small
                          dense
                          outlined
                          hint="Separate name by comma (,)"
                          persistent-hint
                          class="pt-2"
                        />
                      </ValidationProvider>
                    </div>
                  </v-col>
                  <v-col cols="12">
                    <div class="border px-2 rounded">
                      <ValidationProvider
                        vid="Purpose"
                        name="Purpose"
                        :rules="`required`"
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          :loading="loading"
                          :disabled="loading"
                          :error-messages="errors"
                          v-model="fields.purpose"
                          label="Purpose"
                          rows="1"
                          row-height="15"
                          clearable
                          auto-grow
                          small
                          dense
                          outlined
                          hint="Separate purpose by comma (,)"
                          persistent-hint
                          class="pt-2"
                        />
                      </ValidationProvider>
                    </div>
                  </v-col>
                  <v-col cols="12">
                    <div class="border px-2 rounded">
                      <ValidationProvider
                        vid="Destination"
                        name="Destination"
                        :rules="`required`"
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          :loading="loading"
                          :disabled="loading"
                          :error-messages="errors"
                          v-model="fields.destination"
                          label="Destination"
                          rows="1"
                          row-height="15"
                          clearable
                          auto-grow
                          small
                          dense
                          outlined
                          hint="Separate destination by comma (,)"
                          persistent-hint
                          class="pt-2"
                        />
                      </ValidationProvider>
                    </div>
                  </v-col>
                  <v-col cols="12" sm="12" lg="6">
                    <div class="border px-2 rounded">
                      <ValidationProvider
                        vid="Name of Firm/s"
                        name="Name of Firm/s"
                        :rules="``"
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          :loading="loading"
                          :disabled="loading"
                          :error-messages="errors"
                          v-model="fields.name_of_firms"
                          label="Name of Firm/s"
                          rows="1"
                          row-height="15"
                          clearable
                          auto-grow
                          small
                          dense
                          outlined
                          hint="Separate name by comma (,)"
                          persistent-hint
                          class="pt-2"
                        />
                      </ValidationProvider>
                    </div>
                  </v-col>
                  <v-col cols="12" sm="12" lg="6">
                    <div class="border px-2 rounded">
                      <ValidationProvider
                        vid="Place/s"
                        name="Place/s"
                        :rules="``"
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          :loading="loading"
                          :disabled="loading"
                          :error-messages="errors"
                          v-model="fields.places"
                          label="Place/s"
                          rows="1"
                          row-height="15"
                          clearable
                          auto-grow
                          small
                          dense
                          outlined
                          hint="Separate place by comma (,)"
                          persistent-hint
                          class="pt-2"
                        />
                      </ValidationProvider>
                    </div>
                  </v-col>
                  <v-col cols="12" sm="12" lg="6">
                    <div class="border px-2 rounded">
                      <v-dialog
                        ref="departureModal"
                        v-model="departureModal"
                        :return-value.sync="fields.departure"
                        persistent
                        width="290px"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <ValidationProvider
                            vid="Departure"
                            name="Departure"
                            :rules="`required`"
                            v-slot="{ errors }"
                          >
                            <v-text-field
                              :loading="loading"
                              :disabled="loading"
                              :error-messages="errors"
                              v-model="fields.departure"
                              label="Departure"
                              readonly
                              small
                              dense
                              outlined
                              v-bind="attrs"
                              v-on="on"
                            />
                          </ValidationProvider>
                        </template>
                        <v-date-picker
                          v-model="fields.departure"
                          scrollable
                          :min="date"
                          color="green "
                          :allowed-dates="disableWeekends"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                            text
                            small
                            dense
                            color="red darken-2"
                            @click="departureModal = false"
                          >
                            CLose
                          </v-btn>
                          <v-btn
                            text
                            small
                            dense
                            color="green darken-2"
                            @click="$refs.departureModal.save(fields.departure)"
                          >
                            OK
                          </v-btn>
                        </v-date-picker>
                      </v-dialog>
                    </div>
                  </v-col>
                  <v-col cols="12" sm="12" lg="6">
                    <div class="border px-2 rounded">
                      <v-dialog
                        ref="arrivalModal"
                        v-model="arrivalModal"
                        :return-value.sync="fields.arrival"
                        persistent
                        width="290px"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <ValidationProvider
                            vid="Arrival"
                            name="Arrival"
                            :rules="`required`"
                            v-slot="{ errors }"
                          >
                            <v-text-field
                              :loading="loading"
                              :disabled="loading"
                              :error-messages="errors"
                              v-model="fields.arrival"
                              label="Arrival"
                              readonly
                              small
                              dense
                              outlined
                              v-bind="attrs"
                              v-on="on"
                            />
                          </ValidationProvider>
                        </template>
                        <v-date-picker
                          v-model="fields.arrival"
                          scrollable
                          :min="date"
                          color="green "
                          :allowed-dates="disableWeekends"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                            text
                            small
                            dense
                            color="red darken-2"
                            @click="arrivalModal = false"
                          >
                            Cancel
                          </v-btn>
                          <v-btn
                            text
                            small
                            dense
                            color="green darken-2"
                            @click="$refs.arrivalModal.save(fields.arrival)"
                          >
                            OK
                          </v-btn>
                        </v-date-picker>
                      </v-dialog>
                    </div>
                  </v-col>
                  <v-col cols="12">
                    <div class="border px-2 rounded">
                      <ValidationProvider
                        vid="Approved By"
                        name="Approved By"
                        :rules="`required`"
                        v-slot="{ errors }"
                      >
                        <v-textarea
                          :loading="loading"
                          :disabled="loading"
                          :error-messages="errors"
                          v-model="fields.approvedBy"
                          label="For the Approval of"
                          rows="1"
                          row-height="15"
                          clearable
                          auto-grow
                          small
                          dense
                          outlined
                          class="pt-2"
                        />
                      </ValidationProvider>
                    </div>
                  </v-col>
                </v-row>
              </div>
              <div class="text-right space-y-4 md:space-y-0 px-4">
                <v-btn
                  color="green darken-2 white--text"
                  small
                  dense
                  :block="$vuetify.breakpoint.smAndDown"
                  :disabled="invalid"
                  :loading="loading"
                  type="submit"
                >
                  <!-- @click="handleSubmit(submit)" -->
                  <v-icon> mdi-send</v-icon>
                  Submit
                </v-btn>
                <v-btn
                  color="red lighten-2 white--text"
                  small
                  dense
                  outlined
                  :block="$vuetify.breakpoint.smAndDown"
                  :loading="loading"
                  type="reset"
                >
                  <!-- @click="reset" -->
                  Reset
                </v-btn>
              </div>
            </form>
          </ValidationObserver>
        </v-col>
      </v-row>
    </v-container>
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import { page, toasts } from "../../mixins/";
export default {
  name: "RequestVehicle",
  components: { DefaultLayout },
  mixins: [page, toasts],
  data() {
    return {
      arrivalModal: false,
      departureModal: false,
      date: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
        .toISOString()
        .substr(0, 10),

      fields: {
        name: "",
        purpose: "",
        destination: "",
        name_of_firms: "",
        places: "",
        departure: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10),
        arrival: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10),
        approvedBy: "",
      },
    };
  },
  methods: {
    async submit() {
      const { names, destination, purpose, name_of_firms, places } = this.fields;
      // this.fields.names = names.split('')
      // this.fields.destination = destination.split(',');
      // this.fields.purpose = purpose.split(',');
      // this.fields.name_of_firms = name_of_firms.split(',');
      // this.fields.places = places.split(',');

      console.log(this.fields);
      //   await this.submitFields(this.fields);

      this.$nextTick(() => {
        this.$refs.validation_observer.reset();
      });
    },
    disableWeekends(date) {
      const day = new Date(date).getDay();
      return day === 1 || day === 2 || day === 3 || day === 4 || day === 5;
    },
  },
};
</script>

<style></style>
