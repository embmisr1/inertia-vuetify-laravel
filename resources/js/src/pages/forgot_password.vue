<template>
  <AuthLayout>
    <div class="my-4 bg-transparent">
      <img
        src="http://r1.emb.gov.ph/wp-content/uploads/2022/03/WEBSITE-LOGO_final.png"
        alt="EMB - LOGO"
        class="h-32 w-full object-scale-down object-center"
      />
    </div>
    <div class="flex justify-center">
      <div class="w-96">
        <ValidationObserver v-slot="{ handleSubmit }" ref="validation_observer">
          <form v-if="!is_email_sent" @submit.prevent="handleSubmit(email_sent())">
            <v-card
              class="p-4 capitalize"
              max-width="600"
              max-height="700"
              elevation="10"
              :loading="loading"
              s
            >
              <v-card-title>
                <h3 class="mb-0">Forgot Password</h3>
              </v-card-title>
              <v-card-text>
                <ValidationProvider
                  vid="email"
                  name="Email"
                  rules="required|email"
                  v-slot="{ errors }"
                >
                  <v-text-field
                    v-model="form.email"
                    label="Your Email Address"
                    required
                    outlined
                    color="dark"
                    :error-messages="errors[0]"
                    :loading="loading"
                    :disabled="loading"
                  ></v-text-field>
                </ValidationProvider>
              </v-card-text>
              <v-card-actions
                ><Link href="/">
                  <v-btn text color="dark" x-small>Back</v-btn>
                </Link>
                <v-spacer></v-spacer>
                <v-btn
                  color="light-green darken-4"
                  class="white--text"
                  type="submit"
                  :loading="loading"
                  >Verify Email</v-btn
                >
              </v-card-actions>
            </v-card>
          </form>
          <form v-if="is_email_sent" @submit.prevent="handleSubmit(submit_otp())">
            <v-card
              class="p-4 capitalize"
              max-width="600"
              max-height="700"
              elevation="10"
              :loading="loading"
            >
              <!-- <img :src="require('../1assets/logo.png')" alt="EMB - LOGO" class="h-28 object-cover "> -->
              <img
                src="http://r1.emb.gov.ph/wp-content/uploads/2022/03/WEBSITE-LOGO_final.png"
                alt="EMB - LOGO"
                class="h-14 object-cover"
              />
              <v-card-title>
                <h3 class="mb-0">Activation Code</h3>
              </v-card-title>
              <v-card-text>
                <ValidationProvider
                  vid="otp"
                  name="OTP"
                  rules="required"
                  v-slot="{ errors }"
                >
                  <v-otp-input
                    label="OTP Code"
                    v-model="form.activation_key"
                    :error-messages="errors[0]"
                    :loading="loading"
                  ></v-otp-input>
                  <!-- type="password" -->
                </ValidationProvider>
              </v-card-text>
              <v-card-actions>
                <Link href="/">
                  <v-btn text color="dark" x-small>Back to Log In</v-btn>
                </Link>
                <v-btn
                  color="orange darken-4"
                  depressed
                  text
                  :loading="loading"
                  small
                  @click="email_sent"
                  :disabled="countDown === 0 ? false : true"
                  >{{
                    countDown === 0 ? "Resend Activation Code" : `${countDown} ms`
                  }}</v-btn
                >
                <v-spacer></v-spacer>
                <v-btn
                  color="light-green darken-4"
                  class="white--text"
                  type="submit"
                  :loading="loading"
                  >Verify Otp</v-btn
                >
              </v-card-actions>
            </v-card>
          </form>
        </ValidationObserver>
      </div>
    </div>
  </AuthLayout>
</template>

<script>
import AuthLayout from "../layouts/auth.vue";
import axios from "axios";
import moment from "moment";
import { page, toasts } from "../mixins/";

import { Link } from "@inertiajs/inertia-vue";
export default {
  components: {
    AuthLayout,
    Link,
  },
  props: {
    flash: Object,
    errors: Object,
  },
  mixins: [page, toasts],
  data() {
    return {
      // form: this.$inertia.form({
      //     email: null,
      //     activation_key: null,
      // }),
      form: {
        email: null,
        // email: "admin@admin.com",
        activation_key: null,
      },
      is_email_sent: false,
      countDown: 300,
    };
  },
  computed: {
    // timer() {
    //     return moment
    //         .duration(5, "seconds")
    //         .timer({ loop: true }, function () {
    //             // Callback
    //         });
    // },
  },
  methods: {
    countDownTimer() {
      if (this.countDown > 0) {
        setTimeout(() => {
          // this.countDown -= 1;
          this.countDown--;
          this.countDownTimer();
        }, 1000);
      }
    },
    async email_sent() {
      try {
        this.loading = true;
        const { data } = await axios.post("#", this.form);
        this.form.user_id = data.user_id;
        this.success(data.message);
        this.loading = false;
        this.is_email_sent = true;
        this.countDownTimer();
      } catch (error) {
        this.loading = false;
        this.error(error.response.data.error_message);
        this.is_email_sent = false;
      }
    },
    async submit_otp() {
      try {
        this.loading = true;
        const { user_id, activation_key } = this.form;
        await this.$inertia.post(`/verify_code/${user_id}`, {
          activation_key,
        });
        this.success("Password Reset to Default");
        this.loading = false;
      } catch (error) {
        this.loading = false;
        this.error(error.response.data.error_message);
      }
    },
  },
};
</script>

<style></style>
