<template>
    <DefaultLayout>
        <div class="font-bold text-2xl text-center py-6">SLF Form</div>
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
                                    {{ slf_address }}
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
                                                v-model="slf.slf_latitude"
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
                                                v-model="slf.slf_longitude"
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
                                    Operator Information
                                </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <ValidationProvider
                                        vid="proj_operator"
                                        name="Project Operator"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Project Operator"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_project_operator"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="ecc_no"
                                        name="ECC Number"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="ECC Number"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_ecc_number"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="contact_person"
                                        name="Contact Person"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Contact Person"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_contact_person"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="contact_no"
                                        name="Contact Number"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Contact Number"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_contact_number"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                </v-card-text>
                            </v-card>
                            <v-card>
                                <v-card-title>
                                    Site Capacity Information
                                </v-card-title>
                                <v-card-text class="grid grid-cols-4 gap-2">
                                    <ValidationProvider
                                        vid="cat"
                                        name="Select Category"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-select
                                            :items="category"
                                            label="Select Category"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_category"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-select>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="site_ha"
                                        name="Site Hectares"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Site Hectares"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_site_hectares"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="site_cap"
                                        name="Site Capacity"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Site Capacity"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_total_capacity"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="tons_per_day"
                                        name="Tons per Day"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Tons per Day"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_tons_per_day"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="service_life"
                                        name="Service Life"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Service Life"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_service_life"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="rem_service_life"
                                        name="Remaining Service Life"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Remaining Service Life"
                                            :error-messages="errors[0]"
                                            v-model="
                                                slf.slf_remaining_service_life
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <div class="">
                                        <v-checkbox
                                            v-model="slf.slf_exceeded_capacity"
                                            label="Exceeded Capacity"
                                            value="true"
                                            hide-details
                                            color="dark"
                                        ></v-checkbox>
                                    </div>
                                    <div class="">
                                        <v-checkbox
                                            v-model="
                                                slf.slf_with_planned_extension
                                            "
                                            label="With Planned Extension"
                                            value="true"
                                            hide-details
                                            color="dark"
                                        ></v-checkbox>
                                    </div>
                                </v-card-text>
                            </v-card>

                            <div>
                                <ValidationProvider
                                    vid="lgu_served"
                                    name="LGU Served"
                                    rules="required"
                                    v-slot="{ errors }"
                                >
                                    <v-text-field
                                        label="LGU Served"
                                        :error-messages="errors[0]"
                                        v-model="slf.slf_lgu_served"
                                        outlined
                                        clearable
                                        dense
                                        color="dark"
                                    ></v-text-field>
                                </ValidationProvider>
                            </div>

                            <v-card>
                                <v-card-title>
                                    Treatment Process And Facilities Information
                                </v-card-title>
                                <v-card-text class="grid grid-cols-4 gap-2">
                                    <ValidationProvider
                                        vid="leachate"
                                        name="Leachate Treatment"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-select
                                            :items="leachment_type"
                                            label="Leachate Treatment"
                                            :error-messages="errors[0]"
                                            v-model="slf.slf_leachate_treatment"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-select>
                                    </ValidationProvider>
                                    <v-checkbox
                                        v-model="slf.slf_daily_soil_cover"
                                        label="Daily Soil Cover"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="slf.slf_presence_of_mrf"
                                        label="Precense of MRF"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="
                                            slf.slf_separate_cells_for_hazwaste
                                        "
                                        label="Separate Cells for Hazwaste"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="slf.slf_methane_recovery"
                                        label="Methane Recovery"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="slf.slf_discharge_permit"
                                        label="Discharge Permit"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
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
                                            v-model="slf.slf_file"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            truncate-length="15"
                                            multiple
                                            accept="image/png, image/jpeg, application/pdf"
                                        ></v-file-input>
                                    </ValidationProvider>
                                    <!-- <FileUpload name="demo[]" url="./upload" /> -->
                                    <!-- <ValidationProvider
                                        vid="lce_fk"
                                        name="LCE"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="LCE"
                                            :error-messages="errors[0]"
                                            v-model="slf.lce_FK"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider> -->
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
export default {
    components: {
        DefaultLayout,
        Link,
    },
    mixins: [page, toasts, swm, dialogs],
    created() {
        this.loading = true;
        if (this.lce_info !== undefined) {
            if (this.lce_info.length > 0) {
                this.slf = { ...this.lce_info[0] };
                this.slf_form_type = "create";
            }
        } else if (this.slf_edit !== undefined) {
            if (this.slf_edit.length > 0) {
                this.slf_form_type = "patch";
                this.slf = { ...this.slf_edit[0] };
            }
        }
        this.loading = false;
    },
    methods: {
        saveForm() {
            if (this.slf_form_type === "create") {
                this.saveSLFForm();
            } else if (this.slf_form_type === "patch") {
                this.updateSLFForm();
            }
        },
        async saveSLFForm() {
            try {
                const data = { ...this.slf, lce_FK: this.slf.id };
                await this.$inertia.post("/app/swm/slf_register_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.da.aresponse.messsage);
            }
        },
        async updateSLFForm() {
            try {
                const data = { ...this.slf };
                await this.$inertia.patch("/app/swm/slf_update_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
    },
};
</script>

<style></style>
