<template>
    <DefaultLayout>
        <div class="">
            <ValidationObserver
                v-slot="{ handleSubmit, pristine }"
                ref="validation_observer"
            >
                <form @submit.prevent="submitForm">
                    <v-card>
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
                                            :error-messages="errors[0]"
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
                                            :error-messages="errors[0]"
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
                                            :error-messages="errors[0]"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="unit_section"
                                        name="Unit Section"
                                        rules="required"
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
                                            :error-messages="errors[0]"
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
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn text type="submit">Submit</v-btn>
                        </v-card-actions>
                    </v-card>
                </form>
            </ValidationObserver>
        </div>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import ToastMixins from '../../mixins/toasts'
export default {
    components: {
        DefaultLayout,
    },
    props: ["data"],
    mixins:[ToastMixins],
    data() {
        return {
            dropFiles: null,

            form: this.$inertia.form({
                username: "",
                email: "",
                position_id: "",
                unit_section_id: "",
                password: "",
                avatar: null,
            }),
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
    },
    mounted() {
        this.form = { ...this.form, ...this.user_data };
    },
    methods: {
        async submitForm() {
            try {
                switch (this.formType) {
                    case "update":
                        this.form.patch(`/app/users/${this.form.id}`);
                        this.success("User Updated Successfully");
                        
                        break;
                    default:
                        this.form.post("/app/users/");
                        break;
                }
            } catch (error) {
                console.log(error);
                this.success("Failed Successfully");
            }
        },
    },
};
</script>

<style></style>
