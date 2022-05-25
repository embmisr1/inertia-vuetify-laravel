<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-5 gap-y-0 gap-x-4 ml-8">
                    <div hidden>
                        <v-text-field
                            v-model="form_permit_info.perm_id"
                            label="Permit Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="permit_law_selection"
                            v-model="form_permit_info.perm_law"
                            label="Law"
                            item-text="law_selection"
                            item-value="law_selection"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_number"
                            label="Permit No."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-autocomplete
                            :items="permit_status_selection"
                            v-model="form_permit_info.perm_status"
                            label="Permit Status"
                            item-text="status_selection"
                            item-value="status_selection"
                            clearable
                        ></v-autocomplete>
                    </div>
                    <!--date start-->
                    <div>
                        <v-menu
                            ref="date_permit_issuance_menu"
                            v-model="date_permit_issuance_menu"
                            :close-on-content-click="false"
                            :return-value.sync="form_permit_info.perm_date_issuance"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                        >
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field
                                    v-model="form_permit_info.perm_date_issuance"
                                    label="Date Issuance"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                    clearable
                                ></v-text-field>
                            </template>
                            <v-date-picker
                                v-model="form_permit_info.perm_date_issuance"
                                no-title
                                scrollable
                            >
                            <v-spacer></v-spacer>
                            <v-btn
                                text
                                color="primary"
                                @click="date_permit_issuance_menu = false"
                            >
                                Cancel
                            </v-btn>
                            <v-btn
                                text
                                color="primary"
                                @click="$refs.date_permit_issuance_menu.save(form_permit_info.perm_date_issuance)"
                            >
                                OK
                            </v-btn>
                            </v-date-picker>
                        </v-menu>
                    </div>
                    <div>
                        <v-menu
                            ref="date_permit_expiry_menu"
                            v-model="date_permit_expiry_menu"
                            :close-on-content-click="false"
                            :return-value.sync="form_permit_info.perm_date_expiry"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                        >
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field
                                    v-model="form_permit_info.perm_date_expiry"
                                    label="Date Expiry"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                    clearable
                                ></v-text-field>
                            </template>
                            <v-date-picker
                                v-model="form_permit_info.perm_date_expiry"
                                no-title
                                scrollable
                            >
                            <v-spacer></v-spacer>
                            <v-btn
                                text
                                color="primary"
                                @click="date_permit_expiry_menu = false"
                            >
                                Cancel
                            </v-btn>
                            <v-btn
                                text
                                color="primary"
                                @click="$refs.date_permit_expiry_menu.save(form_permit_info.perm_date_expiry)"
                            >
                                OK
                            </v-btn>
                            </v-date-picker>
                        </v-menu>
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
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_file"
                            label="Permit File Upload"
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
                        :items="permit_table"
                        item-key="permit_tables"
                        class="elevation-1"
                    >
                        <template v-slot:item.actions="{ item }">
                            <v-icon
                                small
                                class="mr-2"
                                @click="editPermit(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                                @click="deletePermit(item)"
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
        form_permit_info: Object,
        permit_table: Array,
    },
    data: () => ({
      headers: [
        {
          text: 'Law',
          align: 'start',
          sortable: false,
          value: 'perm_law',
        },
        {
          text: 'Hazwaste Type',
          align: 'start',
          sortable: false,
          value: 'perm_hazwaste_type',
        },
        {
          text: 'No.',
          align: 'start',
          sortable: false,
          value: 'perm_number',
        },
        {
          text: 'Status.',
          align: 'start',
          sortable: false,
          value: 'perm_status',
        },
        {
          text: 'Date Issuance',
          align: 'start',
          sortable: false,
          value: 'perm_date_issuance',
        },
        {
          text: 'Date Expiry',
          align: 'start',
          sortable: false,
          value: 'perm_date_expiry',
        },
        {
          text: 'Attachment',
          align: 'start',
          sortable: false,
          value: 'perm_file',
        },
        { 
          width: '100px',
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
      permit_law_selection:[
        { 'law_selection': 'PD 1586'  },
        { 'law_selection': 'RA 8749'  },
        { 'law_selection': 'RA 9275'  },
        { 'law_selection': 'RA 6969'  },
      ],
      permit_status_selection:[
        { 'status_selection': 'Operational'  },
        { 'status_selection': 'Relief'  },
        { 'status_selection': 'Delisted'  },
        { 'status_selection': 'Non Operational'  },
        { 'status_selection': 'Exempted'  },
        { 'status_selection': 'Cancelled'  },
      ],
      permit_hazwaste_selection:[
        { 'hazwaste_selection': 'TSD'  },
        { 'hazwaste_selection': 'Transporter'  },
        { 'hazwaste_selection': 'Hazwaste ID'  },
        { 'hazwaste_selection': 'CCO Cyanide'  },
        { 'hazwaste_selection': 'CCO Mercury'  },
        { 'hazwaste_selection': 'CCO Asbestos'  },
      ],
      date_permit_issuance_menu: '',
      date_permit_expiry_menu: '',
    }),
    methods:{
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
        },
        async deletePermit(item) {
            await this.$inertia.delete(`/app/delete_permit/${item.id}`);
            this.form_permit_info.perm_law = null;
            this.form_permit_info.perm_hazwaste_type = null;
            this.form_permit_info.perm_date_expiry = null;
            this.form_permit_info.perm_date_issuance = null;
            this.form_permit_info.perm_description = null;
            this.form_permit_info.perm_file = null;
            this.form_permit_info.perm_id = null;
            this.form_permit_info.perm_law = null;
            this.form_permit_info.perm_number = null;
            this.form_permit_info.perm_status = null;
        }
    }
  }
</script>