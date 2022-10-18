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
                DUES Form
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
                                <v-card-title> Dues Information </v-card-title>
                                <v-card-text >
                                <ValidationProvider
                                        vid="remarks"
                                        name="Dues Purpose"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-textarea
                                            label="Dues Purpose"
                                            :error-messages="errors[0]"
                                            v-model="dues.dues_purpose"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            rows="2"
                                        ></v-textarea>
                                </ValidationProvider>
                                <div class="grid grid-cols-3 gap-2">
                                    <ValidationProvider
                                        vid="dues_amount_granted"
                                        name="Dues Amount Granted"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Dues Amount Granted"
                                            :error-messages="errors[0]"
                                            v-model="dues.dues_amount_granted"
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
                                        vid="dues_date_granted"
                                        name="Date Granted"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-dialog
                                        ref="dialog"
                                        v-model="date_granted"
                                        :return-value.sync="dues.dues_date_granted"
                                        persistent
                                        width="290px"
                                        dark
                                    >
                                        <template
                                            v-slot:activator="{ on, attrs }"
                                        >
                                            <v-text-field
                                                v-model="dues.dues_date_granted"
                                                label="Date Granted"
                                                readonly
                                                outlined
                                                dense
                                                v-bind="attrs"
                                                v-on="on"
                                                color="black"
                                            ></v-text-field>
                                        </template>
                                        <v-date-picker
                                            v-model="dues.dues_date_granted"
                                            scrollable
                                            dark
                                        >
                                            <v-spacer></v-spacer>
                                            <v-btn
                                                text
                                                dark
                                                @click="
                                                    date_granted = false
                                                "
                                            >
                                                Cancel
                                            </v-btn>
                                            <v-btn
                                                text
                                                dark
                                                @click="
                                                    $refs.dialog.save(
                                                        dues.dues_date_granted
                                                    )
                                                "
                                            >
                                                OK
                                            </v-btn>
                                        </v-date-picker>
                                    </v-dialog>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="dues_unliquidated"
                                        name="Dues Unliquidated"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Dues Unliquidated"
                                            :error-messages="errors[0]"
                                            v-model="dues.dues_unliquidated"
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
                                </div>
                                 <ValidationProvider
                                        vid="dues_date_granted"
                                        name="Dues Remark"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-textarea
                                            label="Dues Remark"
                                            :error-messages="errors[0]"
                                            v-model="dues.dues_remarks"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                            rows="2"
                                        ></v-textarea>
                                </ValidationProvider>
                                <div class="grid grid-cols-2 gap-2">
                                    <ValidationProvider
                                        vid="dues_accountant"
                                        name="Accountant"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Accountant"
                                            :error-messages="errors[0]"
                                            v-model="dues.dues_accountant"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        >
                                        </v-text-field>
                                    </ValidationProvider>
                                    <ValidationProvider
                                        vid="dues_contact_email"
                                        name="Contact Email"
                                        rules=""
                                        v-slot="{ errors }"
                                    >
                                        <v-text-field
                                            label="Contact Email"
                                            :error-messages="errors[0]"
                                            v-model="dues.dues_contact_email"
                                            outlined
                                            clearable
                                            dense
                                            color="dark"
                                        ></v-text-field>
                                    </ValidationProvider>
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
export default {
    components: {
        DefaultLayout,
        Link,
    },
    mixins: [page, toasts, swm, dialogs],
    data() {
        return {
            dues_form_type: "create",
            date_granted: false,
            monitored_calendar: false,
        };
    },
    created() {
        this.loading = true;
        if (this.lce_info !== undefined) {
            if (this.lce_info.length > 0) {
                this.dues = { ...this.lce_info[0] };
                this.dues_form_type = "create";
            }
        } else if (this.dues_edit !== undefined) {
            if (this.dues_edit.length > 0) {
                this.dues_form_type = "patch";
                this.dues = { ...this.dues_edit[0] };
            }
        }
        this.loading = false;
    },
    computed: {
        address() {
            let formdata = null;
            if (this.dues_form_type === "create") {
                formdata = this.lce_info[0];
            } else if (this.dues_form_type === "patch") {
                formdata = this.dues_edit[0];
            }
            const { provDesc, citymunDesc, lce_zip_code, districtCode } =
                formdata;
            return `${citymunDesc}, District No ${districtCode}, ${provDesc}, ${lce_zip_code} `;
        },
    },
    methods: {
        saveForm() {
            if (this.dues_form_type === "create") {
                this.saveduesForm();
            } else if (this.dues_form_type === "patch") {
                this.updateduesForm();
            }
        },
        async saveduesForm() {
            try {
                const data = { ...this.dues, lce_FK: this.dues.id };
                await this.$inertia.post("/app/swm/dues_register_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
        async updateduesForm() {
            try {
                const data = { ...this.dues };
                await this.$inertia.post("/app/swm/dues_update_process", data);
            } catch (error) {
                console.error(error.message);
                this.error(error.data.response.messsage);
            }
        },
    },
};
</script>

<style></style>
