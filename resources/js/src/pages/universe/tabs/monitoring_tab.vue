<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_monitoring_info.id"
                            label="Monitoring Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_monitoring_info.mon_law"
                            label="Monitoring Law"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_monitoring_info.mon_date_monitored"
                            label="Monitoring Date"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_monitoring_info.mon_type"
                            label="Monitoring Type"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_monitoring_info.mon_file"
                            label="Monitoring File"
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
                        :items="monitoring_table"
                        item-key="monitoring_tables"
                        class="elevation-1"
                    >
                        <template v-slot:item.actions="{ item }">
                            <v-icon
                                small
                                class="mr-2"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
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
        form_monitoring_info: Object,
        monitoring_table: Array,
    },
    data: () => ({
      headers: [
        {
          text: 'Monitoring Law',
          align: 'start',
          sortable: false,
          value: 'mon_law',
        },
        {
          text: 'Monitoring Date',
          align: 'start',
          sortable: false,
          value: 'date_number',
        },
        { 
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
    }),
    methods:{
        // editPermit(item) {
        //     console.log(this.form_permit_info);
        //     this.form_permit_info.perm_law = item.perm_law;
        //     this.form_permit_info.perm_date_expiry = item.perm_date_expiry;
        //     this.form_permit_info.perm_date_issuance = item.perm_date_issuance;
        //     this.form_permit_info.perm_description = item.perm_description;
        //     this.form_permit_info.perm_file = item.perm_file;
        //     this.form_permit_info.perm_id = item.id;
        //     this.form_permit_info.perm_law = item.perm_law;
        //     this.form_permit_info.perm_number = item.perm_number;
        //     this.form_permit_info.perm_status = item.perm_status;
        // },
        // async deletePermit(item) {
        //     console.log(item.id);
        //     await this.$inertia.delete(`/app/delete_permit/${item.id}`);
        // }
    }
  }
</script>