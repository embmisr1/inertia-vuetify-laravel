<template>
    <DefaultLayout>
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
                Closed Dumpsite Form
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
                                </v-card-text>
                            </v-card>
                            <v-card>
                                <v-card-title> Checklist </v-card-title>

                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <v-dialog
                                        ref="dialog"
                                        v-model="monitored_calendar"
                                        :return-value.sync="
                                            cd.cd_date_monitored
                                        "
                                        persistent
                                        width="290px"
                                        dark
                                    >
                                        <template
                                            v-slot:activator="{ on, attrs }"
                                        >
                                            <v-text-field
                                                v-model="cd.cd_date_monitored"
                                                label="Date Monitored"
                                                readonly
                                                outlined
                                                dense
                                                v-bind="attrs"
                                                v-on="on"
                                                color="black"
                                            ></v-text-field>
                                        </template>
                                        <v-date-picker
                                            v-model="cd.cd_date_monitored"
                                            scrollable
                                            :min="date_now"
                                            dark
                                        >
                                            <v-spacer></v-spacer>
                                            <v-btn
                                                text
                                                @click="
                                                    monitored_calendar = false
                                                "
                                                dark
                                            >
                                                Cancel
                                            </v-btn>
                                            <v-btn
                                                text
                                                @click="
                                                    $refs.dialog.save(
                                                        cd.cd_date_monitored
                                                    )
                                                "
                                                dark
                                            >
                                                OK
                                            </v-btn>
                                        </v-date-picker>
                                    </v-dialog>
                                    <v-dialog
                                        ref="dialog"
                                        v-model="closure_calendar"
                                        :return-value.sync="cd.cd_date_closure"
                                        persistent
                                        width="290px"
                                        dark
                                    >
                                        <template
                                            v-slot:activator="{ on, attrs }"
                                        >
                                            <v-text-field
                                                v-model="cd.cd_date_closure"
                                                label="Date of Closure"
                                                readonly
                                                outlined
                                                dense
                                                v-bind="attrs"
                                                v-on="on"
                                                color="black"
                                            ></v-text-field>
                                        </template>
                                        <v-date-picker
                                            v-model="cd.cd_date_closure"
                                            scrollable
                                            :min="date_now"
                                            dark
                                        >
                                            <v-spacer></v-spacer>
                                            <v-btn
                                                text
                                                dark
                                                @click="
                                                    closure_calendar = false
                                                "
                                            >
                                                Cancel
                                            </v-btn>
                                            <v-btn
                                                text
                                                dark
                                                @click="
                                                    $refs.dialog.save(
                                                        cd.cd_date_closure
                                                    )
                                                "
                                            >
                                                OK
                                            </v-btn>
                                        </v-date-picker>
                                    </v-dialog>
                                    <ValidationProvider
                                        vid="cd_status"
                                        name="Status"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-select
                                            :items="cd_status"
                                            v-model="cd.cd_status"
                                            :error-messages="errors[0]"
                                            outlined
                                            dense
                                            label="Status"
                                        ></v-select
                                    ></ValidationProvider>
                                    <ValidationProvider
                                        vid="cd_total_land_area"
                                        name="Total Land Area"
                                        rules="required"
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Total Land Area"
                                            :error-messages="errors[0]"
                                            v-model="cd.cd_total_land_area"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="remarks"
                                        name="Remarks"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-textarea
                                            label="Remarks"
                                            :error-messages="errors[0]"
                                            v-model="cd.cd_remarks"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            rows="2"
                                        ></v-textarea>
                                    </ValidationProvider>

                                    <v-checkbox
                                        v-model="cd.cd_site_clearing"
                                        label="Site Clearing"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_grading"
                                        label="Grading"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_application_maintenance"
                                        label="Application Maintenance"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_provision_drainage"
                                        label="Provision Drainange"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_leachate_management"
                                        label="Leachate Management"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_gas_management"
                                        label="Gas Management"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_fencing_security"
                                        label="Fencing Security"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_putting_sinages"
                                        label="Putting Signages"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
                                    <v-checkbox
                                        v-model="cd.cd_prohibition"
                                        label="Prohibition"
                                        value="true"
                                        hide-details
                                        color="dark"
                                    ></v-checkbox>
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
    data() {
        return {
            cd_form_type: "create",
            closure_calendar: false,
            monitored_calendar: false,
        };
    },
    created() {
        this.loading = true;
        if (this.lce_info !== undefined) {
            if (this.lce_info.length > 0) {
                this.cd = { ...this.lce_info[0] };
                this.cd_form_type = "create";
            }
        } else if (this.cd_edit !== undefined) {
            if (this.cd_edit.length > 0) {
                this.cd_form_type = "patch";
                this.cd = { ...this.cd_edit[0] };
            }
        }
        this.loading = false;
    },
    computed: {
        address() {
            let formdata = null;
            if (this.cd_form_type === "create") {
                formdata = this.lce_info[0];
            } else if (this.cd_form_type === "patch") {
                formdata = this.cd_edit[0];
            }
            const { provDesc, citymunDesc, lce_zip_code, districtCode } =
                formdata;
            return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
        },
    },
    methods: {
        saveForm() {
            if (this.cd_form_type === "create") {
                this.saveCDForm();
            } else if (this.cd_form_type === "patch") {
                this.updateCDForm();
            }
        },
        async saveCDForm() {
            try {
                const data = { ...this.cd, lce_FK: this.cd.id };
                await this.$inertia.post("/app/swm/cd_register_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
        async updateCDForm() {
            try {
                const data = { ...this.cd };
                await this.$inertia.post("/app/swm/cd_update_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
    },
};
</script>

<style></style>
