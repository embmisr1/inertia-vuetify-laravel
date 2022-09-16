<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
    >
        <template v-slot:default="dialog">
            <ValidationObserver
                v-slot="{ handleSubmit, invalid }"
                ref="validation_observer"
            >
                <form @submit.prevent="handleSubmit(submitForm())">
                    <v-card :loading="loading">
                        <v-toolbar>
                            <div class="font-bold text-lg">
                                Reset Password for user {{ username }}
                            </div>
                            <v-spacer></v-spacer>
                            <box-icon
                                class="cursor-pointer"
                                name="x"
                                animation="tada-hover"
                                color="red"
                                @click="close()"
                            ></box-icon>
                        </v-toolbar>
                        <v-card-text>
                            <ValidationProvider
                                vid="new_pass"
                                name="New Password"
                                rules="required|min:6"
                                v-slot="{ errors }"
                            >
                                <v-text-field
                                    v-model="user_form.new"
                                    dense
                                    label="New Password"
                                    :type="showpass ? 'text' : 'password'"
                                    clearable
                                    prepend-inner-icon="mdi-shield-account"
                                    color="dark"
                                    outlined
                                    :error-messages="
                                        errors[0]
                                            ? errors[0]
                                            : user_form.errors.new
                                    "
                                    :append-icon="
                                        showpass ? 'mdi-eye' : 'mdi-eye-off'
                                    "
                                    @click:append="showpass = !showpass"
                                    :loading="loading"
                                ></v-text-field>
                            </ValidationProvider>
                            <ValidationProvider
                                vid="conf_pass"
                                name="Confirm New Password"
                                rules="required|confirmed:new_pass"
                                v-slot="{ errors }"
                            >
                                <v-text-field
                                    v-model="user_form.conf"
                                    dense
                                    label="Confirm New Password"
                                    :type="showpass ? 'text' : 'password'"
                                    clearable
                                    prepend-inner-icon="mdi-shield-check"
                                    color="dark"
                                    outlined
                                    :error-messages="
                                        errors[0]
                                            ? errors[0]
                                            : user_form.errors.conf
                                    "
                                    :append-icon="
                                        showpass ? 'mdi-eye' : 'mdi-eye-off'
                                    "
                                    @click:append="showpass = !showpass"
                                    :loading="loading"
                                ></v-text-field>
                            </ValidationProvider>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                :disabled="invalid"
                                type="submit"
                                color="green darken-2"
                                class="white--text"
                                :loading="loading"
                            >
                                Submit
                            </v-btn>
                            <v-btn
                                :loading="loading"
                                outlined
                                type="reset"
                                @click="close()"
                                color="red darken-2"
                            >
                                Close
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </form>
            </ValidationObserver>
        </template>
    </v-dialog>
</template>

<script>
export default {
    props: {
        modal: Object,
        close: Function,
    },
    computed: {
        user_form() {
            return this.modal.form;
        },
        user_id() {
            return this.modal.form.id;
        },
        username() {
            return this.modal.form.username;
        },
    },
    methods: {
        async submitForm() {
            try {
                this.loading = true;
                await this.user_form.post("/app/users/reset_password");
                this.loading = false;
            } catch (error) {}
        },
    },
    data() {
        return {
            showpass: false,
            loading: false,
        };
    },
};
</script>
