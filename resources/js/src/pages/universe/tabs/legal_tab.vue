<template>
    <v-card class="p-4" elevation="0">
        <div v-if="form_legal_info.addFileForm">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                <div hidden>
                    <v-text-field
                        v-model="form_legal_info.nov_id"
                        label="NOV Id"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <ValidationProvider
                        vid="select_legal_laws"
                        name="Select Law/s"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-select
                            :error-messages="errors[0]"
                            v-model="form_legal_info.nov_law"
                            :items="laws"
                            label="Select Law/s"
                            multiple
                            hint="Select Law/s"
                            persistent-hint
                        ></v-select>
                    </ValidationProvider>
                    <!-- <v-checkbox
                        v-model="form_legal_info.nov_law"
                        label="PD 1586"
                        value="PD 1586"
                        class="p-0 m-0 mt-5"
                    ></v-checkbox>
                    <v-checkbox
                        v-model="form_legal_info.nov_law"
                        label="RA 8749"
                        value="RA 8749"
                        class="p-0 m-0"
                    ></v-checkbox>
                    <v-checkbox
                        v-model="form_legal_info.nov_law"
                        label="RA 9275"
                        value="RA 9275"
                        class="p-0 m-0"
                    ></v-checkbox>
                    <v-checkbox
                        v-model="form_legal_info.nov_law"
                        label="RA 6969"
                        value="RA 6969"
                        class="p-0 m-0"
                    ></v-checkbox>
                    <v-checkbox
                        v-model="form_legal_info.nov_law"
                        label="RA 9003"
                        value="RA 9003"
                        class="p-0 m-0"
                    ></v-checkbox> -->
                </div>
                <div>
                    <ValidationProvider
                        vid="nov_date"
                        name="Nov Data"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-text-field
                            v-model="form_legal_info.nov_date"
                            type="date"
                            label="NOV Date"
                            required
                        ></v-text-field>
                    </ValidationProvider>
                </div>
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_tc_date"
                        type="date"
                        label="TC Date"
                        required
                    ></v-text-field>
                </div>
                <div>
                    <v-autocomplete
                        :items="legal_tc_status_selection"
                        v-model="form_legal_info.nov_tc_status"
                        label="TC Status"
                        item-text="tc_status_selection"
                        item-value="tc_status_selection"
                        clearable
                    ></v-autocomplete>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-y-0 gap-x-4 ml-8">
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_desc"
                        label="Description"
                        clearable
                    ></v-text-field>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_order_number"
                        label="Order Number"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_order_amt"
                        label="Order Amount"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_order_date_issuance"
                        type="date"
                        label="Order Date Issuance"
                        required
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_order_date_settlement"
                        type="date"
                        label="Order Date Settlement"
                        required
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_legal_info.nov_official_receipt_number"
                        label="Order Official Receipt"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <ValidationProvider
                        vid="compliance_status"
                        name="Compliance Status"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-autocomplete
                            :error-messages="errors[0]"
                            :items="legal_compliance_status_selection"
                            v-model="form_legal_info.nov_compliance_status"
                            label="Compliance Status"
                            item-text="compliance_status_selection"
                            item-value="compliance_status_selection"
                            clearable
                        ></v-autocomplete>
                    </ValidationProvider>
                </div>
                <div class="col-span-2">
                    <v-text-field
                        v-model="form_legal_info.nov_order_remarks"
                        label="Order Remarks"
                        clearable
                    ></v-text-field>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-y-0 gap-x-4 ml-8">
                <div>
                    <v-file-input
                        accept="application/pdf"
                        show-size
                        counter
                        multiple
                        v-model="form_legal_info.nov_file"
                        label="Attachments"
                    ></v-file-input>
                </div>
            </div>
            <div class="text-center">
                <v-btn
                    v-if="has_permit"
                    depressed
                    color="primary"
                    type="submit"
                >
                    <v-icon small class="mr-2"> mdi-content-save </v-icon>
                    Submit
                </v-btn>
                <!-- <v-btn
                v-if="has_permit"
                    depressed
                    color="warning"
                    type="button"
                    @click="resetLegal"
                >
                    <v-icon small class="mr-2"> mdi-autorenew </v-icon>
                    Reset
                </v-btn> -->
                <v-btn
                    depressed
                    color="error"
                    type="button"
                    @click="resetLegal"
                >
                    <v-icon small class="mr-2"> mdi-plus-circle </v-icon>
                    Close
                </v-btn>
            </div>
        </div>
        <div v-if="has_permit">
            <v-btn
                v-if="!form_legal_info.addFileForm"
                depressed
                color="success"
                type="button"
                @click="form_legal_info.addFileForm = true"
            >
                <v-icon small class="mr-2"> mdi-plus-circle </v-icon>
                Add File
            </v-btn>
        </div>
        <template>
            <v-card elevation="2" class="mt-5">
                <v-data-table
                    dense
                    :headers="headers"
                    :items="legal_table"
                    item-key="legal_tables"
                    class="elevation-1"
                >
                    <template v-slot:item.nov_file="{ item }">
                        <a
                            v-if="item.nov_file > 0"
                            :href="`/app/attachments?type=legal&id=${item.id}`"
                            target="_blank"
                        >
                            <v-btn small dark>Download File</v-btn>
                        </a>
                        <div v-else class="text-xs font-bold italic">
                            No Attachment Found
                        </div>
                    </template>
                    <template v-slot:item.actions="{ item }" v-if="has_permit">
                        <div v-if="has_permit">
                            <v-icon small class="mr-2" @click="editLegal(item)">
                                mdi-pencil
                            </v-icon>
                            <v-icon small @click="deleteLegal(item)">
                                mdi-delete
                            </v-icon>
                        </div>
                        <v-icon
                            v-else
                            small
                            class="mr-2"
                            @click="editLegal(item)"
                        >
                            mdi-eye
                        </v-icon>
                    </template>
                </v-data-table>
            </v-card>
        </template>
    </v-card>
</template>
<script>
export default {
    props: {
        form_legal_info: Object,
        legal_table: Array,
        laws: Array,

        has_permit: Boolean,
    },
    data: () => ({
        headers: [
            {
                text: "Law",
                align: "start",
                sortable: false,
                value: "nov_law",
            },
            {
                text: "Description",
                align: "start",
                sortable: false,
                value: "nov_desc",
            },
            {
                text: "NOV Date",
                align: "start",
                sortable: false,
                value: "nov_date",
            },
            {
                text: "TC Date",
                align: "start",
                sortable: false,
                value: "nov_tc_date",
            },
            {
                text: "TC Status",
                align: "start",
                sortable: false,
                value: "nov_tc_status",
            },
            {
                text: "Compliance Status",
                align: "start",
                sortable: false,
                value: "nov_compliance_status",
            },
            {
                text: "Attachments",
                align: "start",
                sortable: false,
                value: "nov_desc",
            },
            {
                width: "100px",
                text: "Actions",
                value: "actions",
                sortable: false,
            },
        ],
        legal_tc_status_selection: [
            { tc_status_selection: "Attended" },
            { tc_status_selection: "Not Attended" },
        ],
        legal_compliance_status_selection: [
            { compliance_status_selection: "Complied" },
            { compliance_status_selection: "Not Complied" },
            { compliance_status_selection: "Partially Complied" },
        ],
        date_legal_nov_menu: "",
        date_legal_tc_menu: "",
        date_legal_order_issuance_menu: "",
        date_legal_order_settlement_menu: "",
    }),

    computed: {
        addFileForm() {
            return this.form_legal_info.addFileForm;
        },
    },
    methods: {
        editLegal(item) {
            const lawArray = item.nov_law.split(", ");
            this.form_legal_info.nov_id = item.id;
            this.form_legal_info.nov_law = lawArray;
            this.form_legal_info.nov_desc = item.nov_desc;
            this.form_legal_info.nov_date = item.nov_date;
            this.form_legal_info.nov_tc_date = item.nov_tc_date;
            this.form_legal_info.nov_tc_status = item.nov_tc_status;
            this.form_legal_info.nov_file = [];
            this.form_legal_info.nov_order_number = item.nov_order_number;
            this.form_legal_info.nov_order_amt = item.nov_order_amt;
            this.form_legal_info.nov_order_date_issuance =
                item.nov_order_date_issuance;
            this.form_legal_info.nov_order_date_settlement =
                item.nov_order_date_settlement;
            this.form_legal_info.nov_official_receipt_number =
                item.nov_official_receipt_number;
            this.form_legal_info.nov_compliance_status =
                item.nov_compliance_status;
            this.form_legal_info.nov_order_remarks = item.nov_order_remarks;
            this.form_legal_info.addFileForm = true;
        },
        async deleteLegal(item) {
            if (confirm("Do you want to proceed?")) {
                await this.$inertia.delete(`/app/delete_legal/${item.id}`);
                this.resetLegal();
            }
        },
        resetLegal() {
            this.form_legal_info.nov_id = null;
            this.form_legal_info.nov_law = [];
            this.form_legal_info.nov_desc = null;
            this.form_legal_info.nov_date = null;
            this.form_legal_info.nov_tc_date = null;
            this.form_legal_info.nov_tc_status = null;
            this.form_legal_info.nov_file = [];
            this.form_legal_info.nov_order_number = null;
            this.form_legal_info.nov_order_amt = null;
            this.form_legal_info.nov_order_date_issuance = null;
            this.form_legal_info.nov_order_date_settlement = null;
            this.form_legal_info.nov_official_receipt_number = null;
            this.form_legal_info.nov_compliance_status = null;
            this.form_legal_info.nov_order_remarks = null;
            this.form_legal_info.addFileForm = false;
        },
        addFile() {
            this.addFileForm = true;
        },
        closeFile() {
            this.addFileForm = false;
            this.resetLegal();
        },
    },
};
</script>
