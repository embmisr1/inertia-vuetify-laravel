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
                10 Year Monitoring Form
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
                                <v-card-title>
                                    10 Year Monitoring Information
                                </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <v-dialog
                                        ref="ten_year_mon_date_monitored"
                                        v-model="date_monitored_calendar"
                                        :return-value.sync="
                                            ten_yr_mon.ten_year_mon_date_monitored
                                        "
                                        persistent
                                        width="290px"
                                        dark
                                    >
                                        <template
                                            v-slot:activator="{ on, attrs }"
                                        >
                                            <v-text-field
                                                v-model="
                                                    ten_yr_mon.ten_year_mon_date_monitored
                                                "
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
                                            v-model="
                                                ten_yr_mon.ten_year_mon_date_monitored
                                            "
                                            scrollable
                                            :min="date_now"
                                            dark
                                        >
                                            <v-spacer></v-spacer>
                                            <v-btn
                                                text
                                                @click="
                                                    date_monitored_calendar = false
                                                "
                                                dark
                                            >
                                                Cancel
                                            </v-btn>
                                            <v-btn
                                                text
                                                @click="
                                                    $refs.ten_year_mon_date_monitored.save(
                                                        ten_yr_mon.ten_year_mon_date_monitored
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
                                        v-model="date_submitted_calendar"
                                        :return-value.sync="
                                            ten_yr_mon.ten_year_mon_date_submitted
                                        "
                                        persistent
                                        width="290px"
                                        dark
                                    >
                                        <template
                                            v-slot:activator="{ on, attrs }"
                                        >
                                            <v-text-field
                                                v-model="
                                                    ten_yr_mon.ten_year_mon_date_submitted
                                                "
                                                label="Date Submitted"
                                                readonly
                                                outlined
                                                dense
                                                v-bind="attrs"
                                                v-on="on"
                                                color="black"
                                            ></v-text-field>
                                        </template>
                                        <v-date-picker
                                            v-model="
                                                ten_yr_mon.ten_year_mon_date_submitted
                                            "
                                            scrollable
                                            :min="date_now"
                                            dark
                                        >
                                            <v-spacer></v-spacer>
                                            <v-btn
                                                text
                                                @click="
                                                    date_submitted_calendar = false
                                                "
                                                dark
                                            >
                                                Cancel
                                            </v-btn>
                                            <v-btn
                                                text
                                                @click="
                                                    $refs.dialog.save(
                                                        ten_yr_mon.ten_year_mon_date_submitted
                                                    )
                                                "
                                                dark
                                            >
                                                OK
                                            </v-btn>
                                        </v-date-picker>
                                    </v-dialog>
                                    <ValidationProvider
                                        vid="ten_year_mon_status"
                                        name="10 YEAR Monitoring Status"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <!-- <v-select
                                            :items="[]"
                                            label="10 YEAR Monitoring Status"
                                            :error-messages="errors[0]"
                                            v-model="
                                                ten_yr_mon.ten_year_mon_status
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-select> -->
                                        <v-text-field
                                            label="10 YEAR Monitoring Status"
                                            :error-messages="errors[0]"
                                            v-model="
                                                ten_yr_mon.ten_year_mon_status
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="ten_year_mon_iis_number"
                                        name="10 YEAR Monitoring IIS Number"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="10 YEAR Monitoring IIS Number"
                                            :error-messages="errors[0]"
                                            v-model="
                                                ten_yr_mon.ten_year_mon_iis_number
                                            "
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="ten_year_mon_by"
                                        name="10 YEAR Monitoring Monitored By"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="10 YEAR Monitoring Monitored By"
                                            :error-messages="errors[0]"
                                            v-model="
                                                ten_yr_mon.ten_year_mon_by
                                            "
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
                                    Upload Attachments
                                </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <ValidationProvider
                                        vid="ten_year_file"
                                        name="10 YEAY File"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-file-input
                                            label="10 YEAY COPY Report"
                                            :error-messages="errors[0]"
                                            v-model="ten_yr_mon.ten_year_mon_copy_report"
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
                            </v-card>

                            <v-card v-if="attachments">
                                <v-card-title primary-title>
                                    Attachments
                                </v-card-title>
                                <v-card-text class="grid grid-cols-2 gap-2">
                                    <ViewAttachements
                                        v-if="
                                            attachments.ten_yr_mon_file.data
                                                .length
                                        "
                                        title="10 YEAR FILE Attachments"
                                        :attachments="
                                            attachments.ten_yr_mon_file.data
                                        "
                                        :goTo="
                                            (url) => {
                                                goTo(url);
                                            }
                                        "
                                        :removeFile="removeAttachment"
                                    />
                                    <ViewAttachements
                                        v-if="attachments.copy_plan.data.length"
                                        title="10 YEAR COPY PLAN Attachments"
                                        :attachments="
                                            attachments.copy_plan.data
                                        "
                                        :goTo="
                                            (url) => {
                                                goTo(url);
                                            }
                                        "
                                        :removeFile="removeAttachment"
                                    />
                                    <ViewAttachements
                                        v-if="attachments.copy_form.data.length"
                                        title="10 YEAR COPY FORM Attachments"
                                        :attachments="
                                            attachments.copy_form.data
                                        "
                                        :goTo="
                                            (url) => {
                                                goTo(url);
                                            }
                                        "
                                        :removeFile="removeAttachment"
                                    />
                                    <ViewAttachements
                                        v-if="
                                            attachments.copy_resolution.data
                                                .length
                                        "
                                        title="10 YEAR COPY RESOLUTION Attachments"
                                        :attachments="
                                            attachments.copy_resolution.data
                                        "
                                        :goTo="
                                            (url) => {
                                                goTo(url);
                                            }
                                        "
                                        :removeFile="removeAttachment"
                                    />
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
        ViewAttachements,
    },
    mixins: [page, toasts, swm, dialogs],
    data() {
        return {
            ten_yr_mon_form_type: "create",
            date_monitored_calendar: false,
            date_submitted_calendar: false,
        };
    },
    created() {
        this.loading = true;
        if (this.lce_info !== undefined) {
            if (this.lce_info.length > 0) {
                this.ten_yr_mon = { ...this.lce_info[0] };
                this.ten_yr_mon_form_type = "create";
            }
        } else if (this.ten_year_monitoring_edit !== undefined) {
            if (this.ten_year_monitoring_edit.length > 0) {
                this.ten_yr_mon_form_type = "patch";
                this.ten_yr_mon = { ...this.ten_year_monitoring_edit[0] };
            }
        }
        this.loading = false;
    },
    computed: {
        address() {
            let formdata = null;
            if (this.ten_yr_mon_form_type === "create") {
                formdata = this.lce_info[0];
            } else if (this.ten_yr_mon_form_type === "patch") {
                formdata = this.ten_yr_mon;
            }
            const { provDesc, citymunDesc, lce_zip_code, districtCode } =
                formdata;
            return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
        },
    },
    methods: {
        saveForm() {
            if (this.ten_yr_mon_form_type === "create") {
                this.saveTenYrMonForm();
            } else if (this.ten_yr_mon_form_type === "patch") {
                this.updateTenYrMonForm();
            }
        },
        async saveTenYrMonForm() {
            try {
                const data = { ...this.ten_yr_mon, ten_year_FK: this.ten_yr_mon.id };
                await this.$inertia.post(
                    "/app/swm/ten_year_monitoring_register_process",
                    data
                );
            } catch (error) {
                console.error(error.message);
                this.error(error.data.aresponse.messsage);
            }
        },
        async updateTenYrMonForm() {
            try {
                const data = { ...this.ten_yr_mon };
                await this.$inertia.post(
                    "/app/swm/ten_year_monitoring_update_process",
                    data
                );
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
    },
};
</script>

<style></style>
