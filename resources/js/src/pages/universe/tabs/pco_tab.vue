<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                    <div hidden>
                        <v-text-field
                            v-model="form_pco_info.pco_id"
                            label="Pco Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_pco_info.pco_name"
                            label="Name"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_pco_info.pco_number"
                            label="Pco no."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_pco_info.pco_email"
                            label="Email"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_pco_info.pco_contact"
                            label="Contact no."
                            clearable
                        ></v-text-field>
                    </div>
                    <!--
                    <div>
                        <v-text-field
                            v-model="form_pco_info.pco_start_date"
                            label="Start Date"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_pco_info.pco_end_date"
                            label="End Date"
                            clearable
                        ></v-text-field>
                    </div>
                    -->
                    <div>
                        <v-menu
                            ref="date_pco_start_menu"
                            v-model="date_pco_start_menu"
                            :close-on-content-click="false"
                            :return-value.sync="form_pco_info.pco_start_date"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                        >
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field
                                    v-model="form_pco_info.pco_start_date"
                                    label="Date Monitored"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                    clearable
                                ></v-text-field>
                            </template>
                            <v-date-picker
                                v-model="form_pco_info.pco_start_date"
                                no-title
                                scrollable
                            >
                            <v-spacer></v-spacer>
                            <v-btn
                                text
                                color="primary"
                                @click="date_pco_start_menu = false"
                            >
                                Cancel
                            </v-btn>
                            <v-btn
                                text
                                color="primary"
                                @click="$refs.date_pco_start_menu.save(form_pco_info.pco_start_date)"
                            >
                                OK
                            </v-btn>
                            </v-date-picker>
                        </v-menu>
                    </div>
                    <div>
                        <v-menu
                            ref="date_pco_end_menu"
                            v-model="date_pco_end_menu"
                            :close-on-content-click="false"
                            :return-value.sync="form_pco_info.pco_end_date"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                        >
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field
                                    v-model="form_pco_info.pco_end_date"
                                    label="Date Monitored"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                    clearable
                                ></v-text-field>
                            </template>
                            <v-date-picker
                                v-model="form_pco_info.pco_end_date"
                                no-title
                                scrollable
                            >
                            <v-spacer></v-spacer>
                            <v-btn
                                text
                                color="primary"
                                @click="date_pco_end_menu = false"
                            >
                                Cancel
                            </v-btn>
                            <v-btn
                                text
                                color="primary"
                                @click="$refs.date_pco_end_menu.save(form_pco_info.pco_end_date)"
                            >
                                OK
                            </v-btn>
                            </v-date-picker>
                        </v-menu>
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
                        :items="pco_table"
                        item-key="pco_tables"
                        class="elevation-1"
                    >
                        <template v-slot:item.actions="{ item }">
                            <v-icon
                                small
                                class="mr-2"
                                @click="editPco(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                                @click="deletePco(item)"
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
        form_pco_info: Object,
        pco_table: Array,
    },
    data: () => ({
      headers: [
        {
          text: 'Name',
          align: 'start',
          sortable: false,
          value: 'pco_name',
        },
        {
          text: 'Pco no.',
          align: 'start',
          sortable: false,
          value: 'pco_number',
        },
        {
          text: 'Email',
          align: 'start',
          sortable: false,
          value: 'pco_email',
        },
        {
          text: 'Contact no.',
          align: 'start',
          sortable: false,
          value: 'pco_contact',
        },
        {
          text: 'Start Date',
          align: 'start',
          sortable: false,
          value: 'pco_start_date',
        },
        {
          text: 'End Date',
          align: 'start',
          sortable: false,
          value: 'pco_end_date',
        },
        { 
          width: '100px',
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
      date_pco_start_menu: '',
      date_pco_end_menu: '',
    }),
    methods:{
        editPco(item) {
            this.form_pco_info.pco_id = item.id;
            this.form_pco_info.pco_name = item.pco_name;
            this.form_pco_info.pco_number = item.pco_number;
            this.form_pco_info.pco_email = item.pco_email;
            this.form_pco_info.pco_contact = item.pco_contact;
            this.form_pco_info.pco_start_date = item.pco_start_date;
            this.form_pco_info.pco_end_date = item.pco_end_date;
        },
        async deletePco(item) {
            await this.$inertia.delete(`/app/delete_pco/${item.id}`);
        }
    }
  }
</script>