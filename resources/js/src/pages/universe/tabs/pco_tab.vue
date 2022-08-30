<template>
    <v-card class="p-4" elevation="0">
        <div v-if="addFileForm">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                <div hidden>
                    <v-text-field
                        v-model="form_pco_info.pco_id"
                        label="Pco Id"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <ValidationProvider
                        vid="pco_name"
                        name="PCO Name"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-text-field
                            :error-messages="errors[0]"
                            v-model="form_pco_info.pco_name"
                            label="Name"
                            clearable
                        ></v-text-field>
                    </ValidationProvider>
                </div>
                <div>
                    <ValidationProvider
                        vid="pco_no"
                        name="PCO No"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-text-field
                            :error-messages="errors[0]"
                            v-model="form_pco_info.pco_number"
                            label="Pco no."
                            clearable
                        ></v-text-field>
                    </ValidationProvider>
                </div>
                <div>
                    <ValidationProvider
                        vid="pco_email"
                        name="PCO Email"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-text-field
                            :error-messages="errors[0]"
                            v-model="form_pco_info.pco_email"
                            label="Email"
                            clearable
                            type="email"
                        ></v-text-field>
                    </ValidationProvider>
                </div>
                <div>
                    <ValidationProvider
                        vid="pco_contact"
                        name="PCO Contact No"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-text-field
                            :error-messages="errors[0]"
                            v-model="form_pco_info.pco_contact"
                            label="Contact no."
                            clearable
                        ></v-text-field>
                    </ValidationProvider>
                </div>
                <div>
                    <ValidationProvider
                        vid="pco_start"
                        name="Date Start"
                        rules="required"
                        v-slot="{ errors }"
                    >
                        <v-text-field
                            v-model="form_pco_info.pco_start_date"
                            type="date"
                            label="Date Start"
                            required
                            :error-messages="errors[0]"
                        ></v-text-field>
                    </ValidationProvider>
                </div>
                <div>
                    <ValidationProvider
                        vid="pco_end"
                        name="PCO Date End"
                        rules="required"
                        v-slot="{ errors }"
                    >
                    <v-text-field
                            v-model="form_pco_info.pco_end_date"
                            type="date"
                            label="Date End"
                            required
                            :error-messages="errors[0]"
                        ></v-text-field>
                    </ValidationProvider>
                </div>
            </div>
            <div class="text-center">
                <div v-if="has_permit">
                <v-btn depressed color="primary" type="submit">
                    <v-icon small class="mr-2"> mdi-content-save </v-icon>
                    Submit
                </v-btn>
                <v-btn
                    depressed
                    color="warning"
                    type="button"
                    @click="resetPco"
                >
                    <v-icon small class="mr-2"> mdi-autorenew </v-icon>
                    Reset
                </v-btn>
                </div>
                <v-btn depressed color="error" type="button" @click="closeFile">
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
                    :items="pco_table"
                    item-key="pco_tables"
                    class="elevation-1"
                >
                    <template v-slot:item.actions="{ item }" >
                        <div v-if="has_permit">
                        <v-icon small class="mr-2" @click="editPco(item)">
                            mdi-pencil
                        </v-icon>
                        <v-icon small @click="deletePco(item)">
                            mdi-delete
                        </v-icon>
                        </div>
                        <v-icon v-else small class="mr-2" @click="editPco(item)">
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
        form_pco_info: Object,
        pco_table: Array,

        has_permit: Boolean,
    },
    data: () => ({
        headers: [
            {
                text: "Name",
                align: "start",
                sortable: false,
                value: "pco_name",
            },
            {
                text: "Pco no.",
                align: "start",
                sortable: false,
                value: "pco_number",
            },
            {
                text: "Email",
                align: "start",
                sortable: false,
                value: "pco_email",
            },
            {
                text: "Contact no.",
                align: "start",
                sortable: false,
                value: "pco_contact",
            },
            {
                text: "Start Date",
                align: "start",
                sortable: false,
                value: "pco_start_date",
            },
            {
                text: "End Date",
                align: "start",
                sortable: false,
                value: "pco_end_date",
            },
            {
                width: "100px",
                text: "Actions",
                value: "actions",
                sortable: false,
            },
        ],
        date_pco_start_menu: "",
        date_pco_end_menu: "",
        addFileForm: false,
    }),
    methods: {
        editPco(item) {
            this.form_pco_info.pco_id = item.id;
            this.form_pco_info.pco_name = item.pco_name;
            this.form_pco_info.pco_number = item.pco_number;
            this.form_pco_info.pco_email = item.pco_email;
            this.form_pco_info.pco_contact = item.pco_contact;
            this.form_pco_info.pco_start_date = item.pco_start_date;
            this.form_pco_info.pco_end_date = item.pco_end_date;
            this.addFileForm = true;
        },
        async deletePco(item) {
            await this.$inertia.delete(`/app/delete_pco/${item.id}`);
            this.form_pco_info.pco_id = null;
            this.form_pco_info.pco_name = null;
            this.form_pco_info.pco_number = null;
            this.form_pco_info.pco_email = null;
            this.form_pco_info.pco_contact = null;
            this.form_pco_info.pco_start_date = null;
            this.form_pco_info.pco_end_date = null;
            this.resetPco();
        },
        resetPco() {
            this.form_pco_info.pco_id = null;
            this.form_pco_info.pco_name = null;
            this.form_pco_info.pco_number = null;
            this.form_pco_info.pco_email = null;
            this.form_pco_info.pco_contact = null;
            this.form_pco_info.pco_start_date = null;
            this.form_pco_info.pco_end_date = null;
        },
        addFile() {
            this.addFileForm = true;
        },
        closeFile() {
            this.addFileForm = false;
            this.resetPco();
        },
    },
};
</script>
