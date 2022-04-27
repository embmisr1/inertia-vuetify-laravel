<template>
    <DefaultLayout>
        <template>
            <v-form @submit.prevent="submit_basic_info">
                <v-container>
                <v-row>
                    <!--- Divider -->
                    <v-col
                    cols="12"
                    sm="6"
                    >
                        <v-text-field
                            v-model="form_basic_info.firmname"
                            label="Firmname"
                            clearable
                        ></v-text-field>
                    </v-col>
                    <!--- Divider -->
                    <v-col
                    cols="12"
                    sm="6"
                    >
                        <v-text-field
                            v-model="message2"
                            solo
                            label="Solo"
                            clearable
                        ></v-text-field>
                    </v-col>
                    <!--- Divider -->
                    <v-col
                    cols="12"
                    sm="6"
                    >
                        <v-text-field
                            v-model="message3"
                            filled
                            label="Filled"
                            clearable
                        ></v-text-field>
                    </v-col>
                    <!--- Divider -->
                    <v-col
                    cols="12"
                    sm="6"
                    >
                        <v-text-field
                            v-model="message4"
                            label="Outlined"
                            outlined
                            clearable
                        ></v-text-field>
                    </v-col>
                    <!--- Divider -->
                    <v-col
                    cols="12"
                    sm="6"
                    >
                        <v-btn depressed color="primary" type="submit">
                            Submit
                        </v-btn>
                    </v-col>
                    <!--- Divider -->
                </v-row>
                </v-container>
            </v-form>
        </template>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
// import CUDUser from "../../components/Users/CUD.vue";
// import ChangePassword from "../../components/Users/ChangePassword.vue";
// import PageMixins from "../../mixins/page";
// import user_modal from "../../mixins/user_modal";
import { Link } from "@inertiajs/inertia-vue";
// import _ from "lodash";
export default {
    // mixins: [PageMixins, user_modal],
    components: {
        DefaultLayout,
        // CUDUser,
        // ChangePassword,
        Link,
    },
    props: {
    },
    data: () => ({
      form_basic_info: {
        firmname: 'Sample Data',
      },
    }),
    methods: {
      async submit_basic_info(){
        await this.$inertia.post("/crud", {fimname:this.form_basic_info.firmname});
      },
    },
};
</script>
