<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-5 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_id"
                            label="Permit Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_law"
                            label="Law"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_number"
                            label="Permit No."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_status"
                            label="Permit Status"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_date_issuance"
                            label="Date Issued"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.perm_date_expiry"
                            label="Date Expiry"
                            clearable
                        ></v-text-field>
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
                                @click="editItem(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                            >
                                mdi-delete
                            </v-icon>
                            </template>
                            <!--<template v-slot:no-data>
                                <v-btn
                                    color="primary"
                                >
                                    Reset
                                </v-btn>
                            </template>-->
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
          text: 'Permit Law',
          align: 'start',
          sortable: false,
          value: 'perm_law',
        },
        {
          text: 'Permit No.',
          align: 'start',
          sortable: false,
          value: 'perm_number',
        },
        { 
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
    }),
    methods:{
        editItem(item) {
            console.log(this.form_permit_info);
            this.form_permit_info.perm_law = item.perm_law;
            this.form_permit_info.perm_date_expiry = item.perm_date_expiry;
            this.form_permit_info.perm_date_issuance = item.perm_date_issuance;
            this.form_permit_info.perm_description = item.perm_description;
            this.form_permit_info.perm_file = item.perm_file;
            this.form_permit_info.perm_id = item.id;
            this.form_permit_info.perm_law = item.perm_law;
            this.form_permit_info.perm_number = item.perm_number;
            this.form_permit_info.perm_status = item.perm_status;
        },
    }
  }
</script>