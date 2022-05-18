<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-4 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_id"
                            label="Hazwaste Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_type"
                            label="Hazwaste Type"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_number"
                            label="Hazwaste Number"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_date_acceptance"
                            label="Date Acceptance"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_date_issuance"
                            label="Date Issuance"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_date_expiry"
                            label="Date Expiry"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_hazwaste_info.haz_file"
                            label="Hazwaste File"
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
                        :items="hazwaste_table"
                        item-key="hazwaste_tables"
                        class="elevation-1"
                    >
                        <template v-slot:item.actions="{ item }">
                            <v-icon
                                small
                                class="mr-2"
                                @click="editHazwaste(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                                @click="deleteHazwaste(item)"
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
        form_hazwaste_info: Object,
        hazwaste_table: Array,
    },
    data: () => ({
      headers: [
        {
          text: 'Hazwaste Type',
          align: 'start',
          sortable: false,
          value: 'haz_type',
        },
        {
          text: 'Hazwaste Number',
          align: 'start',
          sortable: false,
          value: 'haz_number',
        },
        { 
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
    }),
    methods:{
        editHazwaste(item) {
            this.form_hazwaste_info.haz_id = item.id;
            this.form_hazwaste_info.haz_type = item.haz_type;
            this.form_hazwaste_info.haz_number = item.haz_number;
            this.form_hazwaste_info.haz_date_acceptance = item.haz_date_acceptance;
            this.form_hazwaste_info.haz_date_issuance = item.haz_date_issuance;
            this.form_hazwaste_info.haz_date_expiry = item.haz_date_expiry;
            this.form_hazwaste_info.haz_file = item.haz_file;
        },
        async deleteHazwaste(item) {
            await this.$inertia.delete(`/app/delete_hazwaste/${item.id}`);
        }
    }
  }
</script>