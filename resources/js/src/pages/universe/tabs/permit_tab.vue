<template>
    <div>
        <v-card class="p-4" elevation="0">
            <div v-if="addFileForm">
                <div class="grid grid-cols-5 gap-y-0 gap-x-4 ml-8">
                    <div hidden>
                        <v-text-field
                            v-model="form_permit_info.perm_id"
                            label="Permit Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <ValidationProvider
                            vid="law"
                            name="Law"
                            rules="required"
                            v-slot="{ errors }"
                        >
                            <v-autocomplete
                                :items="permit_law_selection"
                                v-model="form_permit_info.perm_law"
                                label="Law"
                                item-text="law_selection"
                                item-value="law_selection"
                                clearable
                                :error-messages="errors[0]"
                            ></v-autocomplete>
                        </ValidationProvider>
                    </div>
                    <div>
                        <ValidationProvider
                            vid="permit_no"
                            name="Permit No"
                            rules="required"
                            v-slot="{ errors }"
                        >
                            <v-text-field
                                :error-messages="errors[0]"
                                v-model="form_permit_info.perm_number"
                                label="Permit No."
                                clearable
                            ></v-text-field>
                        </ValidationProvider>
                    </div>
                    <div>
                        <ValidationProvider
                            vid="permit_status"
                            name="Permit status"
                            rules="required"
                            v-slot="{ errors }"
                        >
                            <v-autocomplete
                                :error-messages="errors[0]"
                                :items="permit_status_selection"
                                v-model="form_permit_info.perm_status"
                                label="Permit Status"
                                item-text="status_selection"
                                item-value="status_selection"
                                clearable
                            ></v-autocomplete>
                        </ValidationProvider>
                    </div>
                    <!--date start-->
                    <div>
                        <ValidationProvider
                            vid="date_issuance"
                            name="Date Issuance"
                            rules="required"
                            v-slot="{ errors }"
                        >
                            <v-text-field
                                :error-messages="errors[0]"
                                v-model="form_permit_info.perm_date_issuance"
                                type="date"
                                color="purple darken-2"
                                label="Date Issuance"
                                required
                            ></v-text-field>
                        </ValidationProvider>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_date_expiry"
                            type="date"
                            color="purple darken-2"
                            label="Date Expiry"
                            required
                        ></v-text-field>
                    </div>
                    <!--date end-->
                    <div v-if="form_permit_info.perm_law === 'RA 6969'">
                        <v-autocomplete
                            :items="permit_hazwaste_selection"
                            v-model="form_permit_info.perm_hazwaste_type"
                            label="Hazwaste Type"
                            item-text="hazwaste_selection"
                            item-value="hazwaste_selection"
                            clearable
                        ></v-autocomplete>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_description"
                            label="Permit Description"
                            clearable
                        ></v-text-field>
                    </div>
                    <div class="pt-2">
                        <!-- <v-text-field
                                v-model="form_permit_info.perm_file"
                                label="Permit File Upload"
                                clearable
                            ></v-text-field> -->
                        <!-- <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone> -->
                        <!-- <v-btn dark block @click="uploadDialog = true">Upload A File</v-btn> -->
                        <v-file-input
                            accept="application/pdf"
                            show-size
                            counter
                            multiple
                            v-model="form_permit_info.perm_file"
                            label="Permit File Upload"
                        ></v-file-input>
                        <!-- <v-text-field
                            v-model="form_permit_info.perm_file"
                            label="Permit File Upload"
                            clearable
                        ></v-text-field> -->
                    </div>
                </div>
                <div class="text-center">
                    <v-btn depressed color="primary" type="submit">
                        <v-icon small class="mr-2"> mdi-content-save </v-icon>
                        Submit
                    </v-btn>
                    <v-btn
                        depressed
                        color="warning"
                        type="button"
                        @click="resetPermit"
                    >
                        <v-icon small class="mr-2"> mdi-autorenew </v-icon>
                        Reset
                    </v-btn>
                    <v-btn
                        depressed
                        color="error"
                        type="button"
                        @click="closeFile"
                    >
                        <v-icon small class="mr-2"> mdi-plus-circle </v-icon>
                        Close
                    </v-btn>
                </div>
            </div>
            <div v-if="has_permit">
                <v-btn
                    v-if="!addFileForm"
                    depressed
                    color="success"
                    type="button"
                    @click="addFile"
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
                        :items="permit_table"
                        item-key="permit_tables"
                        class="elevation-1"
                    >
                        <template v-slot:item.perm_file="{ item }">
                            <a
                                v-if="item.perm_file > 0"
                                :href="`/app/attachments?type=permits&id=${item.id}`"
                                target="_blank"
                            >
                                <v-btn small dark>Download File</v-btn>
                            </a>
                            <div v-else class="text-xs font-bold italic">
                                No Attachment Found
                            </div>
                        </template>
                        <template v-slot:item.actions="{ item }" v-if="has_permit">
                            <v-icon
                                small
                                class="mr-2"
                                @click="editPermit(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon small @click="deletePermit(item)">
                                mdi-delete
                            </v-icon>
                        </template>
                    </v-data-table>
                </v-card>
            </template>
        </v-card>
        <UploadDialog
            :modal="uploadDialog"
            :close="
                () => {
                    uploadDialog = false;
                }
            "
            :submit="() => {}"
        />
    </div>
</template>
<script>
import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";
import UploadDialog from "../../../components/UploadDialog.vue";
import { Link } from "@inertiajs/inertia-vue";
export default {
    props: {
        form_permit_info: Object,
        permit_table: Array,
        has_permit: Boolean,
    },
    components: {
        vueDropzone: vue2Dropzone,
        UploadDialog,
        Link,
    },
    data: () => ({
        uploadDialog: false,
        headers: [
            {
                text: "Law",
                align: "start",
                sortable: false,
                value: "perm_law",
            },
            {
                text: "Hazwaste Type",
                align: "start",
                sortable: false,
                value: "perm_hazwaste_type",
            },
            {
                text: "No.",
                align: "start",
                sortable: false,
                value: "perm_number",
            },
            {
                text: "Status.",
                align: "start",
                sortable: false,
                value: "perm_status",
            },
            {
                text: "Date Issuance",
                align: "start",
                sortable: false,
                value: "perm_date_issuance",
            },
            {
                text: "Date Expiry",
                align: "start",
                sortable: false,
                value: "perm_date_expiry",
            },
            {
                text: "Attachment",
                align: "start",
                sortable: false,
                value: "perm_file",
            },
            {
                width: "100px",
                text: "Actions",
                value: "actions",
                sortable: false,
            },
        ],
        permit_law_selection: [
            { law_selection: "PD 1586" },
            { law_selection: "RA 8749" },
            { law_selection: "RA 9275" },
            { law_selection: "RA 6969" },
        ],
        permit_status_selection: [
            { status_selection: "Operational" },
            { status_selection: "Relief" },
            { status_selection: "Delisted" },
            { status_selection: "Non Operational" },
            { status_selection: "Exempted" },
            { status_selection: "Cancelled" },
        ],
        permit_hazwaste_selection: [
            { hazwaste_selection: "TSD" },
            { hazwaste_selection: "Transporter" },
            { hazwaste_selection: "Hazwaste ID" },
            { hazwaste_selection: "CCO Cyanide" },
            { hazwaste_selection: "CCO Mercury" },
            { hazwaste_selection: "CCO Asbestos" },
        ],
        date_permit_issuance_menu: "",
        date_permit_expiry_menu: "",
        dropzoneOptions: {
            url: "/store-multiple-image",
            //   headers: {
            //     "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
            //    }
        },
        addFileForm: false,
    }),
    methods: {
        editPermit(item) {
            console.log(this.form_permit_info);
            this.form_permit_info.perm_law = item.perm_law;
            this.form_permit_info.perm_hazwaste_type = item.perm_hazwaste_type;
            this.form_permit_info.perm_date_expiry = item.perm_date_expiry;
            this.form_permit_info.perm_date_issuance = item.perm_date_issuance;
            this.form_permit_info.perm_description = item.perm_description;
            this.form_permit_info.perm_file = item.perm_file;
            this.form_permit_info.perm_id = item.id;
            this.form_permit_info.perm_law = item.perm_law;
            this.form_permit_info.perm_number = item.perm_number;
            this.form_permit_info.perm_status = item.perm_status;
            this.form_permit_info.perm_file = [];
            this.addFileForm = true;
        },
        async deletePermit(item) {
            await this.$inertia.delete(`/app/delete_permit/${item.id}`);
            this.resetPermit();
        },
        resetPermit() {
            this.form_permit_info.perm_law = null;
            this.form_permit_info.perm_hazwaste_type = null;
            this.form_permit_info.perm_date_expiry = null;
            this.form_permit_info.perm_date_issuance = null;
            this.form_permit_info.perm_description = null;
            this.form_permit_info.perm_file = [];
            this.form_permit_info.perm_id = null;
            this.form_permit_info.perm_law = null;
            this.form_permit_info.perm_number = null;
            this.form_permit_info.perm_status = null;
            this.form_permit_info.perm_file = [];
        },
        addFile() {
            this.addFileForm = true;
        },
        closeFile() {
            this.addFileForm = false;
            this.resetPermit();
        },
    },
};
</script>
