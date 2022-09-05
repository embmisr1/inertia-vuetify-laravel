<template>
    <v-card class="p-4" elevation="0">
        <div class="grid grid-cols-4 gap-y-0 gap-x-4 mt-0 ml-8">
            <div class="col-span-4">
                <div
                    class="text-white bg-blue-500 rounded-md p-2"
                    style="box-shadow: 0px 0px 5px #9c9c9c"
                >
                    Basic Information
                </div>
            </div>
            <div hidden>
                <v-text-field
                    v-model="form_basic_info.id"
                    label="Universe ID"
                    clearable
                ></v-text-field>
            </div>
            <div>
                <ValidationProvider
                    vid="un_firmname"
                    name="Firm name"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-text-field
                        v-model="form_basic_info.un_firmname"
                        :error-messages="errors[0]"
                        label="Firm Name"
                        clearable
                    ></v-text-field>
                </ValidationProvider>
            </div>
            <div>
                <ValidationProvider
                    vid="un_proponent"
                    name="Proponent"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-text-field
                        v-model="form_basic_info.un_proponent"
                        :error-messages="errors[0]"
                        label="Proponent"
                        clearable
                    ></v-text-field>
                </ValidationProvider>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_crs_number"
                    label="CRS No."
                    clearable
                ></v-text-field>
            </div>
            <div>
                <ValidationProvider
                    vid="un_type"
                    name="Universe Type"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-autocomplete
                        :error-messages="errors[0]"
                        :items="universe_type_selection"
                        v-model="form_basic_info.un_type"
                        label="Universe Type"
                        item-text="universe_type_selection_obj"
                        item-value="universe_type_selection_obj"
                        clearable
                    ></v-autocomplete>
                </ValidationProvider>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
            <div class="col-span-3">
                <div
                    class="text-white bg-blue-500 rounded-md p-2"
                    style="box-shadow: 0px 0px 5px #9c9c9c"
                >
                    Project Location
                </div>
            </div>
            <div>
                <ValidationProvider
                    vid="un_province"
                    name="Province"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-autocomplete
                        :error-messages="errors[0]"
                        :items="province_list_alter"
                        v-model="form_basic_info.un_province"
                        @change="provinceDropdown"
                        label="Province"
                        item-text="provDesc"
                        item-value="PK_province_ID"
                        clearable
                    ></v-autocomplete>
                </ValidationProvider>
            </div>
            <div>
                <ValidationProvider
                    vid="un_municipality"
                    name="Municipality"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-autocomplete
                        :error-messages="errors[0]"
                        :items="municipality_list_alter"
                        v-model="form_basic_info.un_municipality"
                        @change="municipalityDropdown"
                        label="Municipality"
                        item-text="citymunDesc"
                        item-value="PK_citymun_ID"
                        clearable
                    ></v-autocomplete>
                </ValidationProvider>
            </div>
            <div>
                <ValidationProvider
                    vid="un_brgy"
                    name="Barangay"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-autocomplete
                        :error-messages="errors[0]"
                        :items="barangay_list_alter"
                        v-model="form_basic_info.un_brgy"
                        label="Barangay"
                        item-text="brgyDesc"
                        item-value="PK_brgy_ID"
                        clearable
                    ></v-autocomplete>
                </ValidationProvider>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_specific_address"
                    label="Specific Address"
                    clearable
                ></v-text-field>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_lat"
                    label="Latitude"
                    clearable
                ></v-text-field>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_long"
                    label="Longitude"
                    clearable
                ></v-text-field>
            </div>
            <div class="mb-5 col-span-3 text-right">
                <v-btn tile type="button" color="success">
                    <!--
                            <v-icon left>
                                <Link :href="`/app/universe_map/${form_basic_info.id}`">
                                    mdi-map-marker-radius-outline
                                </Link>
                            </v-icon>
                            View Location
                            -->
                    <a
                        :href="`/app/universe_map/${form_basic_info.id}`"
                        target="_blank"
                        class="text-white"
                    >
                        View Location
                    </a>
                </v-btn>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
            <div class="col-span-3">
                <div
                    class="text-white bg-blue-500 rounded-md p-2"
                    style="box-shadow: 0px 0px 5px #9c9c9c"
                >
                    Representative
                </div>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_representative_name"
                    label="Name"
                    clearable
                ></v-text-field>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_representative_designation"
                    label="Designation"
                    clearable
                ></v-text-field>
            </div>
            <div>
                <v-select
                    v-model="form_basic_info.un_representative_gender"
                    :items="['MALE', 'FEMALE']"
                    label="Gender"
                    clearable
                ></v-select>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
            <div class="col-span-3">
                <div
                    class="text-white bg-blue-500 rounded-md p-2"
                    style="box-shadow: 0px 0px 5px #9c9c9c"
                >
                    PSIC Code
                </div>
            </div>
            <div>
                <v-autocomplete
                    :items="psic_group_list_alter"
                    v-model="form_basic_info.un_psic_group"
                    @change="psicGroupDropdown"
                    label="Group"
                    item-text="psic_group_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
            <div>
                <v-autocomplete
                    :items="psic_class_list_alter"
                    v-model="form_basic_info.un_psic_class"
                    @change="psicClassDropdown"
                    label="Class"
                    item-text="psic_class_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
            <div>
                <v-autocomplete
                    :items="psic_subclass_list_alter"
                    v-model="form_basic_info.un_psic_subclass"
                    label="Sub Class"
                    item-text="psic_subclass_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-y-0 gap-x-4 ml-8">
            <div class="col-span-3">
                <div
                    class="text-white bg-blue-500 rounded-md p-2"
                    style="box-shadow: 0px 0px 5px #9c9c9c"
                >
                    Project Type
                </div>
            </div>
            <div>
                <v-autocomplete
                    :items="project_type_list_alter"
                    v-model="form_basic_info.un_project_type"
                    @change="projectTypeDropdown"
                    label="Project Type"
                    item-text="project_type_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
            <div>
                <v-autocomplete
                    :items="project_subtype_list_alter"
                    v-model="form_basic_info.un_project_subtype"
                    @change="projectSubTypeDropdown"
                    label="Project Sub Type"
                    item-text="project_subtype_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
            <div>
                <v-autocomplete
                    :items="project_specific_type_list_alter"
                    v-model="form_basic_info.un_project_specific_type"
                    @change="projectSpecificTypeDropdown"
                    label="Project Specific Type"
                    item-text="project_specific_type_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
            <div>
                <v-autocomplete
                    :items="project_specific_subtype_list_alter"
                    v-model="form_basic_info.un_project_specific_subtype"
                    label="Project Specific Sub Type"
                    item-text="project_specific_subtype_desc"
                    item-value="id"
                    clearable
                ></v-autocomplete>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_detailed_description"
                    label="Description"
                    clearable
                ></v-text-field>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-y-0 gap-x-4 ml-8">
            <div class="col-span-2">
                <div
                    class="text-white bg-blue-500 rounded-md p-2"
                    style="box-shadow: 0px 0px 5px #9c9c9c"
                >
                    Status
                </div>
            </div>
            <div>
                <v-text-field
                    v-model="form_basic_info.un_remarks"
                    label="Remarks"
                    clearable
                ></v-text-field>
            </div>
            <div>
                <ValidationProvider
                    vid="un_status"
                    name="Status"
                    rules="required"
                    v-slot="{ errors }"
                >
                    <v-autocomplete
                        :error-messages="errors[0]"
                        :items="basic_status"
                        v-model="form_basic_info.un_status"
                        label="Status"
                        item-text="basic_status_selection"
                        item-value="basic_status_selection"
                        clearable
                    ></v-autocomplete>
                </ValidationProvider>
            </div>
        </div>
        <div class="text-center" v-if="has_permit">
            <v-btn depressed color="primary" type="submit"> Submit </v-btn>
        </div>
    </v-card>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue";
import axios from "axios";

import urls from "../../../helpers/urls";
export default {
    props: {
        form_basic_info: Object,
        province_list: Array,
        municipality_list: Array,
        barangay_list: Array,
        psic_group_list: Array,
        psic_class_list: Array,
        psic_subclass_list: Array,
        project_type_list: Array,
        project_subtype_list: Array,
        project_specific_type_list: Array,
        project_specific_subtype_list: Array,
        has_permit: Boolean,
    },
    components: {
        Link,
    },
    methods: {
        async provinceDropdown(val) {
            const municipality = await axios.get(
                `${urls.provinceDropdown}/${val}`
            );
            this.municipality_list_alter = municipality.data;
            this.barangay_list_alter = [];
        },
        async municipalityDropdown(val) {
            const barangay = await axios.get(
                `${urls.municipalityDropdown}/${val}`
            );
            this.barangay_list_alter = barangay.data;
        },
        async psicGroupDropdown(val) {
            const psic_class = await axios.get(
                `${urls.psic_group_dropdown}/${val}`
            );
            this.psic_class_list_alter = psic_class.data;
        },
        async psicClassDropdown(val) {
            const psic_subclass = await axios.get(
                `${urls.psic_class_dropdown}/${val}`
            );
            this.psic_subclass_list_alter = psic_subclass.data;
        },
        async projectTypeDropdown(val) {
            const project_subtype = await axios.get(
                `${urls.project_type_dropdown}/${val}`
            );
            this.project_subtype_list_alter = project_subtype.data;
        },
        async projectSubTypeDropdown(val) {
            const project_specific_type = await axios.get(
                `${urls.project_subtype_dropdown}${val}`
            );
            this.project_specific_type_list_alter = project_specific_type.data;
        },
        async projectSpecificTypeDropdown(val) {
            const project_specific_subtype = await axios.get(
                `${urls.project_specific_type_dropdown}/${val}`
            );
            this.project_specific_subtype_list_alter =
                project_specific_subtype.data;
        },
    },
    data() {
        return {
            universe_type_selection: [
                { universe_type_selection_obj: "FIRM" },
                { universe_type_selection_obj: "LGU" },
            ],
            basic_tab: null,
            province_list_alter: this.province_list,
            municipality_list_alter: this.municipality_list,
            barangay_list_alter: this.barangay_list,
            basic_status: [
                { basic_status_selection: "Active-Operational" },
                { basic_status_selection: "Operational" },
                { basic_status_selection: "Non-Operational" },
                { basic_status_selection: "Temporary Closure" },
                { basic_status_selection: "Closed" },
                { basic_status_selection: "Temporary Ceased Operation" },
                { basic_status_selection: "Ceased" },
                { basic_status_selection: "Completed" },
                { basic_status_selection: "Cancelled" },
                { basic_status_selection: "Delisted" },
            ],
            psic_group_list_alter: this.psic_group_list,
            psic_class_list_alter: this.psic_class_list,
            psic_subclass_list_alter: this.psic_subclass_list,
            project_type_list_alter: this.project_type_list,
            project_subtype_list_alter: this.project_subtype_list,
            project_specific_type_list_alter: this.project_specific_type_list,
            project_specific_subtype_list_alter:
                this.project_specific_subtype_list,
        };
    },
};
</script>
