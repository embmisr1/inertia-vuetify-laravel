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
        <form @submit.prevent="form.post('/')">
          <v-card
            class="p-4 capitalize"
            max-width="900"
            max-height="700"
            elevation="10"
            :loading="form.processing"
          >
            <v-card-text class="">
              <div>
                <v-text-field
                  v-model="form.username"
                  label="Username"
                  required
                  outlined
                  :error-messages="form.errors.username"
                  color="dark"
                  :loading="form.processing"
                ></v-text-field>
                <v-text-field
                  :loading="form.processing"
                  v-model="form.password"
                  :append-icon="showpass ? 'mdi-eye' : 'mdi-eye-off'"
                  outlined
                  :type="showpass ? 'text' : 'password'"
                  name="password"
                  label="Password"
                  color="dark"
                  @click:append="showpass = !showpass"
                  :error-messages="form.errors.password"
                ></v-text-field>
              </div>
            </v-card-text>
            <v-card-actions class="">
              <Link href="/forgot_password">
                <v-btn text color="dark" x-small>Forgot password</v-btn>
              </Link>
              <v-spacer></v-spacer>
              <v-btn
                color="light-green darken-4"
                class="white--text"
                type="submit"
                :loading="form.processing"
                >Log In</v-btn
              >
            </v-card-actions>
          </v-card>
        </form>
      </div>
    </div>
  </AuthLayout>
</template>

<script>
import AuthLayout from "../layouts/auth.vue";
import { Link } from "@inertiajs/inertia-vue";

import { page, toasts } from "../mixins/";
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
      form: this.$inertia.form({
        username: null,
        password: null,
      }),
      showpass: false,
      animation: [
        "https://assets4.lottiefiles.com/packages/lf20_kq41y3pa.json",
        "https://assets4.lottiefiles.com/packages/lf20_wzrthmvn.json",
        "https://assets5.lottiefiles.com/packages/lf20_tljjahng.json",
        "https://assets5.lottiefiles.com/packages/lf20_m2aybuxx.json",
        "https://assets5.lottiefiles.com/packages/lf20_pXBLg7.json",
        "https://assets5.lottiefiles.com/packages/lf20_0pxufWdKDU.json",
        "https://assets5.lottiefiles.com/packages/lf20_tQpgWqgHGl.json",
      ],
    };
  },
  computed: {
    errorMessage() {
      return { ...this.errors };
    },
    successMessage() {
      return { ...this.flash };
    },
    src() {
      return this.animation[Math.floor(Math.random() * 7)];
    },
  },
};
</script>

<style></style>
