<template>
        <v-card class="p-4" elevation="0">
            <v-card class="p-2" elevation="1" color="#E0E0E0">Permit</v-card>
            <div class="grid grid-cols-5 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_permit_info.law"
                            label="Law"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.permit_number"
                            label="Permit No."
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.permit_status"
                            label="Permit Status"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.permit_date_issued"
                            label="Date Issued"
                            clearable
                        ></v-text-field>
                    </div>
                    <div>
                        <v-text-field
                            v-model="form_permit_info.permit_date_expiry"
                            label="Date Expiry"
                            clearable
                        ></v-text-field>
                    </div>
            </div>
            <div class="grid grid-cols-1 gap-y-0 gap-x-4 ml-8">
                    <div>
                        <v-text-field
                            v-model="form_permit_info.permit_files"
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
        </v-card>
</template>
<script>
  export default {
    props:{
        form_permit_info: Object,
    },
  }
</script>