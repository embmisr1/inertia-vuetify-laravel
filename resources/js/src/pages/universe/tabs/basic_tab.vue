<template>
    <v-form @submit.prevent="submit_basic_info">
        <v-card class="p-5" elevation="2">
            <div class="grid grid-cols-4 gap-4 mt-0">
                <div>
                    <v-text-field
                        v-model="form_basic_info.firm_name"
                        label="Firm Name"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_basic_info.proponent"
                        label="Solo"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_basic_info.crs_number"
                        label="Filled"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                    <v-text-field
                        v-model="form_basic_info.universe_type"
                        label="Outlined"
                        clearable
                    ></v-text-field>
                </div>
                <div hidden>
                    <v-text-field
                        v-model="form_basic_info.id"
                        label="Outlined"
                        clearable
                    ></v-text-field>
                </div>
                <div>
                        <v-btn depressed color="primary" type="submit">
                            Submit
                        </v-btn>
                </div>
            </div>
        </v-card>
    </v-form>
</template>
<script>
  export default {
    props:{
        form_basic_info: Object,
        submit_basic_info: Function,
    },
    data () {},
  }
</script>