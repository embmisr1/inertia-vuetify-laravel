<template>
  <AuthLayout>
    <img
      :src="require('../assets/emb word logo.png')"
      alt="EMB - LOGO"
      class="m-0 h-72 w-full"
    />
    <form @submit.prevent="form.post('/')" class="px-10">
      <div class="p-4 capitalize bg-transparent">
        <div class="">
          <v-row>
            <v-col>
              <v-card flat outlined elevation="10" shaped style="background: transparent">
                <v-card-text>
                  <v-text-field
                    v-model="form.username"
                    label="Username"
                    required
                    outlined
                    dense
                    :error-messages="form.errors.username"
                    :loading="form.processing"
                  ></v-text-field>
                  <v-text-field
                    :loading="form.processing"
                    v-model="form.password"
                    :append-icon="showpass ? 'mdi-eye' : 'mdi-eye-off'"
                    dense
                    outlined
                    :type="showpass ? 'text' : 'password'"
                    name="password"
                    label="Password"
                    @click:append="showpass = !showpass"
                    :error-messages="form.errors.password"
                  ></v-text-field>
                  <v-card-actions>
                    <div class="flex flex-col">
                      <v-btn
                        block
                        color="light-green darken-4"
                        class="white--text"
                        type="submit"
                        :loading="form.processing"
                        small
                        >Log In</v-btn
                      >
                      <Link href="/forgot_password" class="underline italic bold">
                        <v-btn text color="dark" x-small block>Forgot password?</v-btn>
                      </Link>
                    </div>
                  </v-card-actions>
                </v-card-text>
              </v-card>
            </v-col>
            <v-col class="grid place-items-center p-0">
              <img
                :src="require('../assets/un_logo.png')"
                alt="EMB - LOGO"
                class="mt-0 h-32 w-56"
              />
              <!-- <img
                                :src="require('../assets/emb word logo.png')"
                                alt="EMB - LOGO"
                                class="h-24 w-full object-cover"
                            /> -->
            </v-col>
          </v-row>
        </div>
      </div>
    </form>
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
    };
  },
  computed: {
    errorMessage() {
      return { ...this.errors };
    },
    successMessage() {
      return { ...this.flash };
    },
  },
};
</script>

<style></style>
