<template>
  <v-card class="p-4" elevation="0">
    <div v-if="form_complaint_info.addFileForm">
      <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
        <div hidden>
          <v-text-field
            v-model="form_complaint_info.comp_id"
            label="Complaint Id"
            clearable
          ></v-text-field>
        </div>
        <div>
          <ValidationProvider
            vid="name_of_complaint"
            name="Name of Complainant"
            rules="required"
            v-slot="{ errors }"
          >
            <v-text-field
              :error-messages="errors[0]"
              v-model="form_complaint_info.comp_name"
              label="Name of Complainant"
              clearable
            ></v-text-field>
          </ValidationProvider>
        </div>
        <div>
          <ValidationProvider
            vid="nature_of_complaint"
            name="Nature of Complaint"
            rules="required"
            v-slot="{ errors }"
          >
            <v-text-field
              :error-messages="errors[0]"
              v-model="form_complaint_info.comp_nature"
              label="Nature of complaint"
              clearable
            ></v-text-field>
          </ValidationProvider>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
        <div>
          <v-file-input
            accept="application/pdf"
            show-size
            counter
            multiple
            v-model="form_complaint_info.comp_attached_file"
            label="Attached File"
          ></v-file-input>
        </div>
        <div>
          <v-file-input
            accept="application/pdf"
            show-size
            counter
            multiple
            v-model="form_complaint_info.comp_action_file"
            label="Action File"
          ></v-file-input>
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
        <v-btn v-if="has_permit" depressed color="primary" type="submit">
          <v-icon small class="mr-2"> mdi-content-save </v-icon>
          Submit
        </v-btn>
        <!-- <v-btn
                    v-if="has_permit"
                    depressed
                    color="warning"
                    type="button"
                    @click="resetComplaint"
                >
                    <v-icon small class="mr-2"> mdi-autorenew </v-icon>
                    Reset
                </v-btn> -->

        <v-btn depressed color="error" type="button" @click="resetComplaint">
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
        @click="form_complaint_info.addFileForm = true"
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
          :items="complaint_table"
          item-key="complaint_tables"
          class="elevation-1"
        >
          <template v-slot:item.comp_attached_file="{ item }">
            <a
              v-if="item.comp_attached_file > 0"
              :href="`/app/attachments?type=complaint-ftp&id=${item.id}`"
              target="_blank"
            >
              <v-btn small dark>Download File</v-btn>
            </a>
            <div v-else class="text-xs font-bold italic">No Attachment Found</div>
          </template>
          <template v-slot:item.comp_action_file="{ item }">
            <a
              v-if="item.comp_action_file > 0"
              :href="`/app/attachments?type=complaintaction&id=${item.id}`"
              target="_blank"
            >
              <v-btn small dark>Download File</v-btn>
            </a>
            <div v-else class="text-xs font-bold italic">No Attachment Found</div>
          </template>
          <template v-slot:item.actions="{ item }">
            <div v-if="has_permit">
              <v-icon small class="mr-2" @click="editComplaint(item)">
                mdi-pencil
              </v-icon>
              <v-icon small @click="deleteComplaint(item)"> mdi-delete </v-icon>
            </div>
            <v-icon v-else small class="mr-2" @click="editComplaint(item)">
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
    form_complaint_info: Object,
    complaint_table: Array,

    has_permit: Boolean,
  },
  data: () => ({
    headers: [
      {
        text: "Name of Complainant",
        align: "start",
        sortable: false,
        value: "comp_name",
      },
      {
        text: "Nature of Complaint",
        align: "start",
        sortable: false,
        value: "comp_nature",
      },
      {
        text: "Attachment",
        align: "start",
        sortable: false,
        value: "comp_attached_file",
      },
      {
        text: "Action Taken",
        align: "start",
        sortable: false,
        value: "comp_action_file",
      },
      {
        text: "Remarks",
        align: "start",
        sortable: false,
        value: "comp_remarks",
      },
      {
        width: "100px",
        text: "Actions",
        value: "actions",
        sortable: false,
      },
    ],
  }),
  computed: {
    addFileForm() {
      return this.form_complaint_info.addFileForm;
    },
  },
  methods: {
    editComplaint(item) {
      this.form_complaint_info.comp_id = item.id;
      this.form_complaint_info.comp_name = item.comp_name;
      this.form_complaint_info.comp_nature = item.comp_nature;
      this.form_complaint_info.comp_attached_file = [];
      this.form_complaint_info.comp_action_file = [];
      this.form_complaint_info.comp_remarks = item.comp_remarks;
      this.form_complaint_info.addFileForm = true;
    },
    async deleteComplaint(item) {
      if (confirm("Do you want to proceed?")) {
        await this.$inertia.delete(`/app/delete_complaint/${item.id}`);
        this.resetComplaint();
      }
    },
    resetComplaint() {
      this.form_complaint_info.comp_id = null;
      this.form_complaint_info.comp_name = null;
      this.form_complaint_info.comp_nature = null;
      this.form_complaint_info.comp_attached_file = [];
      this.form_complaint_info.comp_action_file = [];
      this.form_complaint_info.comp_remarks = null;
      this.form_complaint_info.addFileForm = false;
    },
    addFile() {
      this.addFileForm = true;
    },
    closeFile() {
      this.addFileForm = false;
      this.resetComplaint();
    },
  },
};
</script>
