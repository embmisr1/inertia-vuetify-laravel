<template>
    <DefaultLayout>
        <div class="">
            <div class="font-bold text-2xl">
                <b-tooltip label="Back" type="is-dark" :delay="2000">
                    <Link @click="goBack"
                        class="px-3" >
                    <box-icon
                        name="arrow-back"
                        animation="tada-hover"
                    ></box-icon> </Link
                >
                </b-tooltip><span>{{form_type.toUpperCase()}}</span> Form
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
                                <v-card-title>
                                    Address Information
                                </v-card-title>
                                <v-card-text class="">
                                    {{ address }}
                                    <div class="grid grid-cols-2 gap-2">
                                        <ValidationProvider
                                            vid="lat"
                                            name="Latitude"
                                            rules="required"
                                            v-slot="{ errors }"
                                        >
                                            <v-text-field
                                                label="Latitude"
                                                :error-messages="errors[0]"
                                                v-model="mrf.mrf_latitude"
                                                outlined
                                                clearable
                                                dense
                                                color="dark"
                                            ></v-text-field>
                                        </ValidationProvider>
                                        <ValidationProvider
                                            vid="long"
                                            name="Longitude"
                                            rules="required"
                                            v-slot="{ errors }"
                                        >
                                            <v-text-field
                                                label="Longitude"
                                                :error-messages="errors[0]"
                                                v-model="mrf.mrf_longitude"
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
                                <v-card-title>
                                    Funded Information
                                </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <!-- <v-checkbox
                                        v-model="mrf.mrf_lgu"
                                        label="LGU Funded"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox> -->
                                    <!-- <v-checkbox
                                        v-model="mrf.mrf_emb_funded"
                                        label="EMB Funded"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <ValidationProvider
                                        vid="mrf_emb_lgu_funded"
                                        name="EMB LGU FUNDED"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="EMB LGU FUNDED"
                                            :error-messages="errors[0]"
                                            v-model="mrf.mrf_emb_lgu_funded"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider> -->
                                    <ValidationProvider
                                        vid="mrf_emb_funded"
                                        name="EMB FUNDED"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="EMB FUNDED"
                                            :error-messages="errors[0]"
                                            v-model="mrf.mrf_emb_funded"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            hint="in Philippine PESO"
                                            persistent-hint
                                        >
                                        <template #prepend-inner>

                                            <div class=" text-xl font-bold">&#8369</div>
                                        </template></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="mrf_status_operation"
                                        name="Status of Operation"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-select
                                            :items="status_of_operation"
                                            label="Status of Operation"
                                            :error-messages="errors[0]"
                                            v-model="mrf.mrf_status_operation"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-select>
                                    </ValidationProvider>
                                </v-card-text>
                            </v-card>

                            <div>
                                <ValidationProvider
                                    vid="mrf_service_area"
                                    name="Area/s"
                                    rules="required"
                                    v-slot="{ errors }"
                                >
                                    <v-text-field
                                        label="Service Area/s"
                                        :error-messages="errors[0]"
                                        v-model="mrf.mrf_service_area"
                                        outlined
                                        clearable
                                        dense
                                        color="dark"
                                    ></v-text-field>
                                </ValidationProvider>
                            </div>

                            <v-card>
                                <v-card-title> Waste Information </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <ValidationProvider
                                        vid="mrf_total_waste_generation"
                                        name="Total Waste Generation"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Total Waste Generation"
                                            :error-messages="errors[0]"
                                            v-model="
                                                mrf.mrf_total_waste_generation
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="mrf_biodegradable"
                                        name="Biodegradable"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Biodegradable "
                                            :error-messages="errors[0]"
                                            v-model="mrf.mrf_biodegradable"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            hint="kg/day"
                                            persistent-hint
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="mrf_recyclable"
                                        name="Recyclable"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Recyclable"
                                            :error-messages="errors[0]"
                                            v-model="mrf.mrf_recyclable"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            hint="kg/day"
                                            persistent-hint
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="mrf_special_waste"
                                        name="Special Waste"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Special Waste"
                                            :error-messages="errors[0]"
                                            v-model="mrf.mrf_special_waste"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            hint="kg/day"
                                            persistent-hint
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="mrf_total_waste_diverted"
                                        name="Waste Diverted"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Waste Diverted"
                                            :error-messages="errors[0]"
                                            v-model="
                                                mrf.mrf_total_waste_diverted
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            hint="kg/day"
                                            persistent-hint
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="mrf_number_of_waste_diverted"
                                        name="% of Waster Diverted"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="% of Waster Diverted"
                                            :error-messages="errors[0]"
                                            v-model="
                                                mrf.mrf_number_of_waste_diverted
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                        <ValidationProvider
                                            vid="file"
                                            name="File"
                                            rules=""
                                            v-slot="{ errors }"
                                        >
                                            <!-- <v-text-field
                                                label="File"
                                                :error-messages="errors[0]"
                                                v-model="slf.slf_file"
                                                outlined
                                                clearable
                                                dense
                                                color="dark"
                                            ></v-text-field> -->
                                            <v-file-input
                                                label="File"
                                                :error-messages="errors[0]"
                                                v-model="mrf.mrf_file"
                                                outlined
                                                clearable
                                                dense
                                                color="dark"
                                                truncate-length="15"
                                                multiple
                                                accept="image/png, image/jpeg, application/pdf"
                                            ></v-file-input>
                                        </ValidationProvider>
                                </v-card-text>
                                <v-card-text class="grid grid-cols-2 gap-x-2 ">
                                    <div v-if="withAttachment" class="">
                                        <ViewAttachements
                                            :attachments="attachments.data"
                                            :goTo="
                                                (url) => {
                                                    goTo(url);
                                                }
                                            "
                                            :removeFile="removeAttachment"
                                        />
                                    </div>
                                </v-card-text>
                            </v-card>
                        </div>
                        <div class="flex justify-center mt-4">
                            <v-btn color="red darken-2" text type="reset"
                                >Reset</v-btn
                            >
                            <v-btn
                                :disabled="invalid"
                                color="primary"
                                type="submit"
                                >Save</v-btn
                            >
                        </div>
                    </v-container>
                </form>
            </ValidationObserver>
        </div>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../../layouts/default.vue";

import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import { page, toasts, swm, dialogs } from "../../../mixins";
import ViewAttachements from "../../../components/ViewAttachements.vue";
export default {
    components: {
    DefaultLayout,
    Link,
    ViewAttachements
},
    mixins: [page, toasts, swm, dialogs],
    data() {
        return {
            mrf_form_type: "create",
        };
    },
    created() {
        this.loading = true;
        if (this.lce_info !== undefined) {
            if (this.lce_info.length > 0) {
                this.mrf = { ...this.lce_info[0] };
                this.mrf_form_type = "create";
            }
        } else if (this.mrf_edit !== undefined) {
            if (this.mrf_edit.length > 0) {
                this.mrf_form_type = "patch";
                this.mrf = { ...this.mrf_edit[0] };
            }
        }
        this.loading = false;
    },
    computed: {
        address() {
            let formdata = null;
            if (this.mrf_form_type === "create") {
                formdata = this.lce_info[0];
            } else if (this.mrf_form_type === "patch") {
                formdata = this.mrf_edit[0];
            }
            const { provDesc, citymunDesc, lce_zip_code, districtCode } =
                formdata;
            return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
        },
        form_type(){
            return this.search_query_params("form_type").value
        },
    },
    methods: {
        saveForm() {
            if (this.mrf_form_type === "create") {
                this.saveMRFForm();
            } else if (this.mrf_form_type === "patch") {
                this.updateMRFForm();
            }
        },
        async saveMRFForm() {
            try {
                const data = { ...this.mrf, lce_FK: this.mrf.id, mrf_or_rca:this.form_type };
                await this.$inertia.post("/app/swm/mrf_register_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
        async updateMRFForm() {
            try {
                const data = { ...this.mrf }
                await this.$inertia.post("/app/swm/mrf_update_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
    },
};
</script>

<style></style>
