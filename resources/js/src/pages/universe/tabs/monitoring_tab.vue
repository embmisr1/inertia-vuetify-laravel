<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                    <div hidden>
                        <v-text-field
                            v-model="form_monitoring_info.mon_id"
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
                                @click="editMonitoring(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                                @click="deleteMonitoring(item)"
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
          text: 'Law',
          align: 'start',
          sortable: false,
          value: 'mon_law',
        },
        {
          text: 'Date Monitored',
          align: 'start',
          sortable: false,
          value: 'mon_date_monitored',
        },
        {
          text: 'Type',
          align: 'start',
          sortable: false,
          value: 'mon_type',
        },
        {
          text: 'Attachment',
          align: 'start',
          sortable: false,
          value: 'mon_file',
        },
        { 
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
    }),
    methods:{
        editMonitoring(item) {
            this.form_monitoring_info.mon_id = item.id;
            this.form_monitoring_info.mon_law = item.mon_law;
            this.form_monitoring_info.mon_date_monitored = item.mon_date_monitored;
            this.form_monitoring_info.mon_type = item.mon_type;
            this.form_monitoring_info.mon_file = item.mon_file;
        },
        async deleteMonitoring(item) {
            await this.$inertia.delete(`/app/delete_monitoring/${item.id}`);
        }
    }
  }
</script>