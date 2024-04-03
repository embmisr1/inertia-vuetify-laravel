<template>
  <DefaultLayout :access="access">
    <v-container fluid>
      <v-row>
        <v-col cols="12" md="8" sm="12">
          <div class="box">
            <header class="text-center font-bold text-lg">
              Request for Service Vehicle
            </header>
            <v-row dense v-if="!loading">
              <v-col cols="12">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Names:</header>
                  <p>{{ userRequest.name }}</p>
                </div>
              </v-col>
              <v-col cols="12">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Purpose:</header>
                  <p>{{ userRequest.purpose }}</p>
                </div>
              </v-col>
              <v-col cols="12">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Destination:</header>
                  <p>{{ userRequest.destination }}</p>
                </div>
              </v-col>
              <v-col cols="12" sm="12" lg="6">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Name of Firm/s:</header>
                  <p>{{ userRequest.name_of_firms }}</p>
                </div>
              </v-col>
              <v-col cols="12" sm="12" lg="6">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Place/s:</header>
                  <p>{{ userRequest.places }}</p>
                </div>
              </v-col>
              <v-col cols="12" sm="12" lg="6">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Departure:</header>
                  <p>{{ userRequest.departure_readable }}</p>
                </div>
              </v-col>
              <v-col cols="12" sm="12" lg="6">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Arrival:</header>
                  <p>{{ userRequest.arrival_readable }}</p>
                </div>
              </v-col>
              <!--
              <v-col cols="12" sm="12" lg="6">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Requested By:</header>
                  <p>
                    {{ userRequest.requestedBy.username }}
                  </p>
                </div>
              </v-col> -->
              <!-- <v-col cols="12" sm="12" lg="6">
                <div class="border px-2 py-4 rounded">
                  <header class="font-light tracking-wide">Approved By:</header>
                  <p>{{ userRequest.approvedBy }}</p>
                </div>
              </v-col> -->
            </v-row>
          </div>
        </v-col>
        <v-col cols="12" sm="12" md="4">
          <VRStatusPending
            v-if="userRequest.status === 'pending'"
            :id="userRequest.id"
            :status="userRequest.status"
            :created_at="userRequest.created_at"
          />
          <VRStatusApproved
            v-if="userRequest.status === 'approved'"
            :id="userRequest.id"
            :status="userRequest.status"
            :created_at="userRequest.created_at"
          />
          <VRStatusDeclined
            v-if="userRequest.status === 'declined'"
            :id="userRequest.id"
            :status="userRequest.status"
            :created_at="userRequest.created_at"
          />

          <Divider />
          <ValidationObserver
            v-slot="{ handleSubmit, pristine, invalid }"
            ref="validation_observer"
          >
            <form @submit.prevent="handleSubmit(createRemark)">
              <div class="card">
                <header class="card-header">
                  <small
                    class="font-bold card-header-title tracking-wide card-header-title"
                    >Write Remark</small
                  >
                </header>
                <div class="card-content">
                  <div class="content">
                    <ValidationProvider
                      vid="Remarks"
                      name="Remarks"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <v-textarea
                        :error-messages="errors[0] ? errors[0] : form.errors.username"
                        :loading="remarkLoading"
                        :disabled="remarkLoading"
                        v-model="form.remarks"
                        label="Type here..."
                        rows="1"
                        row-height="15"
                        clearable
                        auto-grow
                        x-small
                        dense
                        outlined
                        class="pt-2"
                      />
                    </ValidationProvider>
                  </div>
                </div>
                <footer class="card-footer">
                  <div class="card-footer-item">
                    <v-btn
                      :loading="remarkLoading"
                      :disabled="invalid"
                      color="green lighten-2 white--text"
                      small
                      dense
                      block
                      depressed
                      type="submit"
                      >Submit</v-btn
                    >
                  </div>
                  <div class="card-footer-item">
                    <v-btn
                      :loading="remarkLoading"
                      :disabled="remarkLoading"
                      color="green lighten-2"
                      text
                      small
                      dense
                      block
                      depressed
                      @click="showLogs = !showLogs"
                      >View</v-btn
                    >
                  </div>
                </footer>
              </div>
            </form>
          </ValidationObserver>
        </v-col>
      </v-row>
    </v-container>
    <RemarkFormWithLogDialog
      :active="showLogs"
      :historyLogs="request_logs"
      :closeDialog="
        () => {
          showLogs = !showLogs;
        }
      "
    />
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import VRStatusPending from "../../components/Fleet/RequestStatus/Pending.vue";
import VRStatusApproved from "../../components/Fleet/RequestStatus/Approved.vue";
import VRStatusDeclined from "../../components/Fleet/RequestStatus/Declined.vue";
import RemarkFormWithLogDialog from "../../components/Fleet/RemarkFormWithLogDialog.vue";
import { page, toasts } from "../../mixins/";
import axios from "axios";
import Divider from "primevue/divider";
export default {
  name: "user_requestVehicle",
  components: {
    DefaultLayout,
    VRStatusPending,
    VRStatusApproved,
    VRStatusDeclined,
    Divider,
    RemarkFormWithLogDialog,
  },
  mixins: [page, toasts],
  props: {
    user_request: Object,
  },
  data() {
    return {
      remarkLoading: false,
      form: this.$inertia.form({
        remarks: "",
        request_id: this.request_id,
      }),
      showLogs: false,
    };
  },
  computed: {
    userRequest() {
      return this.user_request.data;
    },
    request_logs() {
      return this.userRequest.logs;
    },
    request_id() {
      return this.userRequest.id;
    },
  },
  methods: {
    async createRemark() {
      try {
        this.form.request_id = this.request_id;
        await this.form.post(`/app/chauffeur/remark`);
        await this.form.reset();

        // const response = await axios.post("api/v1/fleet/client/remarks");
      } catch (error) {
        console.log(error);
      }
    },
    get: _.debounce(async function (params) {
      try {
        // await this.$inertia.get(`/app/chauffeur/${this.request_id}`, {
        //   ...params,
        // });
      } catch (error) {
        console.log(error);
      }
    }, 1500),
  },
};
</script>

<style></style>
