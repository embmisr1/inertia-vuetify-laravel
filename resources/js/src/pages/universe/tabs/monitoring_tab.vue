<template>
        <v-card class="p-4" elevation="0">
            <div v-if="addFileForm">
                <div class="grid grid-cols-5 gap-y-0 gap-x-5 ml-8">
                        <div hidden>
                            <v-text-field
                                v-model="form_monitoring_info.mon_id"
                                label="Monitoring Id"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-checkbox
                                v-model="form_monitoring_info.mon_law"
                                label="PD 1586"
                                value="PD 1586"
                                class="p-0 m-0 mt-5"
                            ></v-checkbox>
                            <v-checkbox
                                v-model="form_monitoring_info.mon_law"
                                label="RA 8749"
                                value="RA 8749"
                                class="p-0 m-0"
                            ></v-checkbox>
                            <v-checkbox
                                v-model="form_monitoring_info.mon_law"
                                label="RA 9275"
                                value="RA 9275"
                                class="p-0 m-0"
                            ></v-checkbox>
                            <v-checkbox
                                v-model="form_monitoring_info.mon_law"
                                label="RA 6969"
                                value="RA 6969"
                                class="p-0 m-0"
                            ></v-checkbox>
                            <v-checkbox
                                v-model="form_monitoring_info.mon_law"
                                label="RA 9003"
                                value="RA 9003"
                                class="p-0 m-0"
                            ></v-checkbox>
                        </div>
                        <!--
                        <div>
                            <v-text-field
                                v-model="form_monitoring_info.mon_date_monitored"
                                label="Monitoring Date"
                                clearable
                            ></v-text-field>
                        </div>
                        -->
                        <div>
                            <v-menu
                                ref="date_monitoring_menu"
                                v-model="date_monitoring_menu"
                                :close-on-content-click="false"
                                :return-value.sync="form_monitoring_info.mon_date_monitored"
                                transition="scale-transition"
                                offset-y
                                min-width="auto"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-text-field
                                        v-model="form_monitoring_info.mon_date_monitored"
                                        label="Date Monitored"
                                        readonly
                                        v-bind="attrs"
                                        v-on="on"
                                        clearable
                                    ></v-text-field>
                                </template>
                                <v-date-picker
                                    v-model="form_monitoring_info.mon_date_monitored"
                                    no-title
                                    scrollable
                                >
                                <v-spacer></v-spacer>
                                <v-btn
                                    text
                                    color="primary"
                                    @click="date_monitoring_menu = false"
                                >
                                    Cancel
                                </v-btn>
                                <v-btn
                                    text
                                    color="primary"
                                    @click="$refs.date_monitoring_menu.save(form_monitoring_info.mon_date_monitored)"
                                >
                                    OK
                                </v-btn>
                                </v-date-picker>
                            </v-menu>
                        </div>
                        <div>
                            <v-autocomplete
                                :items="mon_or_sur_selection"
                                v-model="form_monitoring_info.mon_or_survey"
                                label="Monitoring/Survey"
                                clearable
                            ></v-autocomplete>
                        </div>
                        <div>
                            <v-text-field
                                v-model="form_monitoring_info.mon_type"
                                label="Monitoring Type"
                                clearable
                            ></v-text-field>
                        </div>
                        <div>
                            <v-file-input
                            accept="application/pdf"
                            show-size
                            counter
                            multiple
                            v-model="form_monitoring_info.mon_file"
                            label="Monitoring File"
                        ></v-file-input>
                        </div>
                </div>
                <div class="text-center">
                    <v-btn depressed color="primary" type="submit">
                        <v-icon small class="mr-2"> mdi-content-save </v-icon>
                        Submit
                    </v-btn>
                    <v-btn depressed color="warning" type="button" @click="resetMonitoring">
                        <v-icon small class="mr-2"> mdi-autorenew </v-icon>
                        Reset
                    </v-btn>
                    <v-btn depressed color="error" type="button" @click="closeFile">
                        <v-icon small class="mr-2"> mdi-plus-circle </v-icon>
                        Close
                    </v-btn>
                </div>
            </div>
            <v-btn v-if="!addFileForm" depressed color="success" type="button" @click="addFile">
                <v-icon small class="mr-2"> mdi-plus-circle </v-icon>
                Add File
            </v-btn>
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
          width: '100px',
          text: 'Actions',
          value: 'actions',
          sortable: false,
        },

      ],
      date_monitoring_menu: '',
      addFileForm: false,
      mon_or_sur_selection: [
            "Monitoring",
            "Survey",
      ],
    }),
    methods:{
        editMonitoring(item) {
            const lawArray = item.mon_law.split(", ");
            this.form_monitoring_info.mon_id = item.id;
            this.form_monitoring_info.mon_law = lawArray;
            this.form_monitoring_info.mon_date_monitored = item.mon_date_monitored;
            this.form_monitoring_info.mon_or_survey = item.mon_or_survey;
            this.form_monitoring_info.mon_type = item.mon_type;
            this.form_monitoring_info.mon_file = item.mon_file;
            this.addFileForm = true;
        },
        async deleteMonitoring(item) {
            await this.$inertia.delete(`/app/delete_monitoring/${item.id}`);
            this.resetMonitoring();
        },
        resetMonitoring(){
            this.form_monitoring_info.mon_id = null;
            this.form_monitoring_info.mon_law = [];
            this.form_monitoring_info.mon_date_monitored = null;
            this.form_monitoring_info.mon_or_survey = null;
            this.form_monitoring_info.mon_type = null;
            this.form_monitoring_info.mon_file = null;
        },
        addFile(){
            this.addFileForm = true;
        },
        closeFile(){
            this.addFileForm = false;
            this.resetMonitoring();
        },
    }
  }
</script>
