<template>
    <DefaultLayout>
        <div class="">
            <div class="">
                <PageTitle
                    :route="`${route_back}/users`"
                    title="Users Form"
                />
            </div>
            <ValidationObserver
                v-slot="{ handleSubmit, pristine }"
                ref="validation_observer"
            >
                <form @submit.prevent="handleSubmit(submitForm)">
                    <v-container>
                        <v-card>
                            <v-card-title primary-title>
                                Information
                            </v-card-title>
                            <v-card-text>
                                <div class="grid grid-cols-2 gap-x-10">
                                    <div class="">
                                        <ValidationProvider
                                            vid="username"
                                            name="Username"
                                            rules="required|min:6"
                                            v-slot="{ errors }"
                                        >
                                            <v-text-field
                                                v-model="form.username"
                                                label="Username"
                                                filled
                                                clearable
                                                prepend-icon="mdi-account-box"
                                                outlined
                                                :error-messages="errors[0]  ? errors[0] :form.errors.username"
                                            ></v-text-field>
                                        </ValidationProvider>
                                        <ValidationProvider
                                            vid="position"
                                            name="Position"
                                            rules="required"
                                            v-slot="{ errors }"
                                        >
                                            <v-select
                                                v-model="form.position_id"
                                                :items="position_data"
                                                :item-text="(item) => item.name"
                                                :item-value="(item) => item.id"
                                                outlined
                                                filled
                                                prepend-icon="mdi-account-details"
                                                label="Select Position"
                                                :error-messages="errors[0]  ? errors[0] :form.errors.position_id"
                                                clearable
                                            ></v-select>
                                        </ValidationProvider>
                                    </div>
                                    <div>
                                        <ValidationProvider
                                            vid="Email"
                                            name="Email"
                                            rules="required|email"
                                            v-slot="{ errors }"
                                        >
                                            <v-text-field
                                                v-model="form.email"
                                                label="Email"
                                                type="email"
                                                filled
                                                outlined
                                                clearable
                                                prepend-icon="mdi-at"
                                                :error-messages="errors[0]  ? errors[0] :form.errors.email"
                                            ></v-text-field>
                                        </ValidationProvider>
                                        <ValidationProvider
                                            vid="unit_section"
                                            name="Unit Section"
                                            rules=""
                                            v-slot="{ errors }"
                                        >
                                            <v-select
                                                :items="unit_section_data"
                                                :item-text="(item) => item.name"
                                                :item-value="(item) => item.id"
                                                v-model="form.unit_section_id"
                                                prepend-icon="mdi-clipboard-account"
                                                outlined
                                                filled
                                                label="Select Unit Section"
                                                :error-messages="errors[0]  ? errors[0] :form.errors.unit_section_id"
                                                clearable
                                            ></v-select>
                                        </ValidationProvider>
                                    </div>
                                </div>
                                <!-- <b-upload v-model="form.avatar" drag-drop expanded rounded type="is-black">
                        <section class="section">
                            <div class="content has-text-centered">
                                <p>
                                    <b-icon icon="upload"> </b-icon>
                                </p>
                                <p>Drop your files here or click to upload</p>
                            </div>
                        </section>
                    </b-upload> -->
                            </v-card-text>
                            <v-card-text>
                                <v-card flat>
                                    <v-card-title primary-title>
                                        Select User Role
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            dark
                                            @click="roles_modal.active = true"
                                            >Add Role</v-btn
                                        >
                                    </v-card-title>
                                    <v-card-text>
                                        <v-select
                                            :items="access_template"
                                            filled
                                            outlined
                                            label="Select Role Template"
                                            v-model="selected_template"
                                            item-text="access_template"
                                            return-object
                                        ></v-select>
                                        <div class="text-center text-red-700 font-bold text-lg">
                                            {{form.errors.selected_roles}}
                                        </div>
                                        <div class="grid grid-cols-2 gap-2">
                                            <div
                                                v-for="role in access_role"
                                                :key="role.id"
                                            >
                                                <v-checkbox
                                                    v-model="
                                                        form.selected_roles
                                                    "
                                                    :label="role.access_role"
                                                    :value="role.id"
                                                    hide-details
                                                    color="dark"
                                                ></v-checkbox>
                                            </div>
                                        </div>
                                    </v-card-text>
                                </v-card>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn type="submit">Submit</v-btn>
                            </v-card-actions>
                        </v-card>
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
import DefaultLayout from "../../layouts/default.vue";
import Roles from "../../components/Roles/Roles.vue";
import { page, toasts, dialogs, users } from "../../mixins";
import PageTitle from '../../components/PageTitle.vue'
export default {
    components: {
    DefaultLayout,
    Roles,
    PageTitle
},
    props: ["data"],
    mixins: [page, toasts, dialogs, users],
    data() {
        return {
            dropFiles: null,

            form: this.$inertia.form({
                username: "",
                email: "",
                position_id: "",
                unit_section_id: "",
                // password: "",
                // conf_password: "",
                avatar: null,
                selected_roles: [],
            }),
            selected_template: "",
        };
    },
    computed: {
        position_data() {
            return this.data.position;
        },
        unit_section_data() {
            return this.data.unit_section;
        },
        user_data() {
            return { ...this.data.user.data };
        },
        formType() {
            return Object.keys(this.user_data).length ? "update" : "create";
        },
        access_role() {
            return { ...this.data.query_access_role };
        },
        access_template() {
            return [...this.data.query_access_template];
        },
    },
    mounted() {
        this.form = { ...this.form, ...this.user_data };
    },
    methods: {
        async submitForm() {
            try {
                if (this.formType === "update") {
                    return this.form.patch(`/app/users/${this.form.id}`);
                }
                this.form.post("/app/users/");
                return
            } catch (error) {
                console.log(error);
                this.success("Failed Successfully");
            }
        },
    },
    watch: {
        selected_template(value) {
            this.form.selected_roles = JSON.parse(value.access_role_assigned);
        },
    },
};
</script>

<style></style>
