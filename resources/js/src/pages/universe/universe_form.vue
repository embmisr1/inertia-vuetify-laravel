<template>
    <DefaultLayout>
            <v-form @submit.prevent="submit_basic_info">
                <v-card class="white mt-10 p-5" elevation="2">
                    <Link class="btn btn-blue" href="/app/universe_form/">
                        New Registration
                    </Link>
                    <v-card
                        class="mx-auto"
                        color="#1976D2"
                        outlined
                        :elevation="2"
                    >
                        <p class="text-h5 white--text m-2 ml-5">
                            Universe Form
                        </p>
                    </v-card>
                
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
        <!-- {{query}} -->
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import BasicInfo from "../../mixins/basic_info";
import { Link } from "@inertiajs/inertia-vue";
// import _ from "lodash";
export default {
    mixins: [
        BasicInfo,
    ],
    components: {
        DefaultLayout,
        Link,
    },
    props: {
        query: Object,
    },
    data: () => ({}),
};
</script>
