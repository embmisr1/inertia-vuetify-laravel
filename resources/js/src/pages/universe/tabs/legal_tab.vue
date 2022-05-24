<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                    <div hidden>
                        <v-text-field
                            v-model="form_legal_info.nov_id"
                            label="NOV Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <!--
                    <div>
                        <v-text-field
                            v-model="form_legal_info.nov_law"
                            label="NOV Law"
                            clearable
                        ></v-text-field>
                    </div>
                    -->
                    <div>
                        <v-checkbox
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
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_legal_info.nov_date"
                            label="NOV Date"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_legal_info.nov_tc_date"
                            label="TC Date"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_legal_info.nov_tc_status"
                            label="TC Status"
                            clearable
                        ></v-text-field>
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
                            label="Order Date Issuance"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_legal_info.nov_order_date_settlement"
                            label="Order Date Settlement"
                            clearable
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
                        <v-text-field
                            v-model="form_legal_info.nov_compliance_status"
                            label="Order Status"
                            clearable
                        ></v-text-field>
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
                        <v-text-field
                            v-model="form_legal_info.nov_file"
                            label="Attachments"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="text-center">
                <v-btn depressed color="primary" type="submit">
                    Submit
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
                        <template v-slot:item.actions="{ item }">
                            <v-icon
                                small
                                class="mr-2"
                                @click="editLegal(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                                @click="deleteLegal(item)"
                            >
                                mdi-delete
                            </v-icon>
                            </template>
                    </v-data-table>
                </v-card>
            </template>
        </v-card>
</template>
<script>
  export default {
    props:{
        form_legal_info: Object,
        legal_table: Array,
    },
    data: () => ({
      headers: [
        {
          text: 'Law',
          align: 'start',
          sortable: false,
          value: 'nov_law',
        },
        {
          text: 'Description',
          align: 'start',
          sortable: false,
          value: 'nov_desc',
        },
        {
          text: 'NOV Date',
          align: 'start',
          sortable: false,
          value: 'nov_date',
        },
        {
          text: 'TC Date',
          align: 'start',
          sortable: false,
          value: 'nov_tc_date',
        },
        {
          text: 'TC Status',
          align: 'start',
          sortable: false,
          value: 'nov_tc_status',
        },
        {
          text: 'Compliance Status',
          align: 'start',
          sortable: false,
          value: 'nov_compliance_status',
        },
        {
          text: 'Attachments',
          align: 'start',
          sortable: false,
          value: 'nov_desc',
        },
        { 
          width: '100px',
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
    }),
    methods:{
        editLegal(item) {
            const lawArray = item.nov_law.split(", ");
            this.form_legal_info.nov_id = item.id;
            this.form_legal_info.nov_law = lawArray;
            this.form_legal_info.nov_desc = item.nov_desc;
            this.form_legal_info.nov_date = item.nov_date;
            this.form_legal_info.nov_tc_date = item.nov_tc_date;
            this.form_legal_info.nov_tc_status = item.nov_tc_status;
            this.form_legal_info.nov_file = item.nov_file;
            this.form_legal_info.nov_order_number = item.nov_order_number;
            this.form_legal_info.nov_order_amt = item.nov_order_amt;
            this.form_legal_info.nov_order_date_issuance = item.nov_order_date_issuance;
            this.form_legal_info.nov_order_date_settlement = item.nov_order_date_settlement;
            this.form_legal_info.nov_official_receipt_number = item.nov_official_receipt_number;
            this.form_legal_info.nov_compliance_status = item.nov_compliance_status;
            this.form_legal_info.nov_order_remarks = item.nov_order_remarks;
        },
        async deleteLegal(item) {
            await this.$inertia.delete(`/app/delete_legal/${item.id}`);
        }
    }
  }
</script>