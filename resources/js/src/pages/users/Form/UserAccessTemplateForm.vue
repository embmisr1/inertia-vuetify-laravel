<template>
    <DefaultLayout :access="access">
        <div class="">
            <div class="font-bold text-2xl flex items-center">
                <b-tooltip label="Back" type="is-dark" :delay="2000">
                    <Link @click="goBack" class="px-3">
                        <box-icon
                            name="arrow-back"
                            animation="tada-hover"
                        ></box-icon>
                    </Link>
                </b-tooltip>
                User Role Template Form
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
                                <v-card-title primary-title>
                                    Template Information
                                </v-card-title>
                                <v-card-text>
                                    <ValidationProvider
                                        vid="access_template"
                                        name="Template Name"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Template Name"
                                            :error-messages="errors[0]"
                                            v-model="
                                                template_form.access_template
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                </v-card-text>
                                <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn
                                        :disabled="invalid"
                                        dark
                                        type="submit"
                                        >Save</v-btn
                                    >
                                </v-card-actions>
                            </v-card>
                            <v-card>
                                <v-card-title primary-title>
                                    Select Roles
                                    <v-spacer></v-spacer>
                                    <v-btn
                                        dark
                                        @click="roles_modal.active = true"
                                        >Add Role</v-btn
                                    >
                                </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <div
                                        v-for="role in query_access_role"
                                        :key="role.id"
                                    >
                                        <v-checkbox
                                            v-model="
                                                template_form.access_role_assigned
                                            "
                                            :label="role.access_role"
                                            :value="role.id"
                                            hide-details
                                            color="dark"
                                        ></v-checkbox>
                                    </div>
                                </v-card-text>
                            </v-card>
                        </div>

                        <div class="py-4 flex justify-end">
                            <v-btn dark :disabled="invalid" type="submit"
                                >Save</v-btn
                            >
                        </div>
                    </v-container>
                </form>
            </ValidationObserver>
        </div>
        <Roles
            :modal="roles_modal"
            :form_field="role_form"
            :close="() => (roles_modal.active = false)"
            :submitForm="submitRole"
        />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs, users } from "../../../mixins";
import Roles from "../../../components/Roles/Roles.vue";
export default {
    components: {
        DefaultLayout,
        Link,
        Roles,
    },
    props: {
        query_access_role: Array,
        users_access_template_info: Array,
    },
    mixins: [page, toasts, swm, dialogs, users],
    data() {
        return {
            template_form: {
                access_template: "",
                access_role_assigned: [],
            },
            form_type: "create",
        };
    },
    created() {
        this.loading = true;
        if (this.users_access_template_info !== undefined) {
            if (this.users_access_template_info.length > 0) {
                this.form_type = "patch";
                this.template_form = { ...this.users_access_template_info[0] };
                this.template_form.access_role_assigned = JSON.parse(
                        this.users_access_template_info[0].access_role_assigned
                    );
            }
        }
        this.loading = false;
    },
    methods: {
        saveForm() {
            if (this.form_type === "create") {
                this.saveTemplateForm();
            }
            if (this.form_type === "patch") {
                this.updateTemplateForm();
            }
        },
        async saveTemplateForm() {
            try {
                const data = {
                    ...this.template_form,
                };
                this.loading = true;
                await this.$inertia.post(
                    "/app/users_access/users_access_template_register_process",
                    data
                );
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
        async updateTemplateForm() {
            try {
                const data = {
                    ...this.template_form,
                };
                this.loading = true;
                await this.$inertia.post(
                    "/app/users_access/users_access_template_update_process",
                    data
                );
                this.loading = false;
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
    },
};
</script>

<style></style>
