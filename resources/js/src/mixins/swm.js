import axios from "axios";

export default {
    props: {
        lce_edit: Array,
        province_dropdown: Array,
    },
    data() {
        return {
            lce: {
                lce_title: "",
                lce_first_name: "",
                lce_middle_name: "",
                lce_last_name: "",
                lce_salutation: "",
                lce_position: "",
                lce_municipality_FK: "",
                lce_province_FK: "",
                lce_barangay_FK: "",
                lce_disctrict: "",
                lce_zip_code: "",
                lce_focal_person: "",
                lce_contact_number: "",
                lce_email_address: "",
            },
            slf: {
                slf_complete_address: null,
                slf_latitude: null,
                slf_longitude: null,
                slf_project_operator: null,
                slf_ecc_number: null,
                slf_contact_person: null,
                slf_contact_number: null,
                slf_category: null,
                slf_site_hectares: null,
                slf_total_capacity: null,
                slf_tons_per_day: null,
                slf_service_life: null,
                slf_remaining_service_life: null,
                slf_exceeded_capacity: null,
                slf_with_planned_extension: null,
                slf_lgu_served: null,
                slf_leachate_treatment: null,
                slf_daily_soil_cover: null,
                slf_presence_of_mrf: null,
                slf_separate_cells_for_hazwaste: null,
                slf_methane_recovery: null,
                slf_discharge_permit: null,
                slf_file: null,
                lce_FK: null,
            },
            complete_address: null,
            complete_address_setter: {
                prov: {},
                cityMun: {},
                brgy: {},
            },
            category: ["Category 1", "Category 2", "Category 3", "Category 4"],
            leachment_type: ["Recirculaation", "Chemical", "Biological"],
            cityMun: [],
            brgy: [],
        };
    },
    computed: {
        lce_details() {
            return this.lce_edit[0];
        },
        lce_complete_name() {
            const { lce_first_name, lce_middle_name, lce_last_name } =
                this.lce_details;
            return `${lce_first_name} ${lce_middle_name} ${lce_last_name}`;
        },
        lce_address() {
            const { provDesc, citymunDesc, lce_zip_code } = this.lce_details;
            return `${citymunDesc}, District No, ${provDesc}, ${lce_zip_code} `;
        },
        lce_prov_id() {
            return this.lce.lce_province_FK;
        },
        lce_cityMun_id() {
            return this.lce.lce_municipality_FK;
        },
        address_setter() {
            return { ...this.complete_address_setter };
        },
        prov_id() {
            return this.complete_address_setter.prov.PK_province_ID;
        },
        cityMun_id() {
            return this.complete_address_setter.cityMun.PK_citymun_ID;
        },
    },
    watch: {
        lce_prov_id(value) {
            if (value !== "" || value !== null)
                return this.search_cityMun(value);
        },
        lce_cityMun_id(value) {
            if (value !== "" || value !== null) return this.search_brgy(value);
        },
        prov_id(value) {
            if (value !== "" || value !== null)
                return this.search_cityMun(value);
        },
        cityMun_id(value) {
            if (value !== "" || value !== null) return this.search_brgy(value);
        },
        address_setter(data) {
            const { prov, cityMun, brgy } = data;
            this.complete_address = `${prov.provDesc ?? ""}, ${
                cityMun.citymunDesc ?? ""
            }, ${brgy.brgyDesc ?? ""}`;
        },
    },
    methods: {
        async search_cityMun(prov_id) {
            try {
                this.loading = true;
                const { data } = await axios.get(
                    `http://127.0.0.1:8000/api/app/province_dropdown/${prov_id}`
                );
                this.cityMun = data;
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log("search_cityMun - error");
                this.error(error.response.data.message);
            }
        },
        async search_brgy(cityMun_id) {
            try {
                this.loading = true;
                const { data } = await axios.get(
                    `http://127.0.0.1:8000/api/app/municipality_dropdown/${cityMun_id}`
                );
                this.brgy = data;
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log("search_brgy - error");
                this.error(error.response.data.message);
            }
        },
    },
};
