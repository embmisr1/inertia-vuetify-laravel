<template>
        <v-card class="p-4" elevation="0">
            <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
                    <div hidden>
                        <v-text-field
                            v-model="form_complaint_info.comp_id"
                            label="Complaint Id"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_complaint_info.comp_name"
                            label="Name of Complainant"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_complaint_info.comp_nature"
                            label="Nature of complaint"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_complaint_info.comp_attached_file"
                            label="Attached File"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_complaint_info.comp_action_file"
                            label="Action File"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-1 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_complaint_info.comp_remarks"
                            label="Complaint Remarks"
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
                        :items="complaint_table"
                        item-key="complaint_tables"
                        class="elevation-1"
                    >
                        <template v-slot:item.actions="{ item }">
                            <v-icon
                                small
                                class="mr-2"
                                @click="editComplaint(item)"
                            >
                                mdi-pencil
                            </v-icon>
                            <v-icon
                                small
                                @click="deleteComplaint(item)"
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
        form_complaint_info: Object,
        complaint_table: Array,
    },
    data: () => ({
      headers: [
        {
          text: 'Name of Complainant',
          align: 'start',
          sortable: false,
          value: 'comp_name',
        },
        {
          text: 'Nature of Complaint',
          align: 'start',
          sortable: false,
          value: 'comp_nature',
        },
        {
          text: 'Attachment',
          align: 'start',
          sortable: false,
          value: 'comp_attached_file',
        },
        {
          text: 'Action Taken',
          align: 'start',
          sortable: false,
          value: 'comp_action_file',
        },
        {
          text: 'Remarks',
          align: 'start',
          sortable: false,
          value: 'comp_remarks',
        },
        { 
          text: 'Actions', 
          value: 'actions', 
          sortable: false,
        },
        
      ],
    }),
    methods:{
        editComplaint(item) {
            this.form_complaint_info.comp_id = item.id;
            this.form_complaint_info.comp_name = item.comp_name;
            this.form_complaint_info.comp_nature = item.comp_nature;
            this.form_complaint_info.comp_attached_file = item.comp_attached_file;
            this.form_complaint_info.comp_action_file = item.comp_action_file;
            this.form_complaint_info.comp_remarks = item.comp_remarks;
        },
        async deleteComplaint(item) {
            await this.$inertia.delete(`/app/delete_complaint/${item.id}`);
        }
    }
  }
</script>