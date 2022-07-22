import axios from "axios";

export default {
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
            category: ["Category 1", "Category 2", "Category 3", "Category 4"],
            leachment_type: ["Recirculaation", "Chemical", "Biological"],
            cityMun:[],
            brgy:[],
        };
    },
    computed: {
        prov_id() {
            return this.lce.lce_province_FK;
        },
        cityMun_id() {
            return this.lce.lce_municipality_FK;
        },
    },
    watch: {
        prov_id(value) {
            if (value !== "" || value !== null) return this.search_cityMun();
        },
        cityMun_id(value){
            if (value !== "" || value !== null) return this.search_brgy();
        },
    },
    methods: {
        async search_cityMun() {
            try {
                const { data } = await axios.get(
                    `http://127.0.0.1:8000/api/app/province_dropdown/${this.prov_id}`
                );
                this.cityMun = data
            } catch (error) {
                console.log("search_cityMun - error");
                this.error(error.response.data.message);
            }
        },
        async search_brgy() {
            try {
                const { data } = await axios.get(
                    `http://127.0.0.1:8000/api/app/municipality_dropdown/${this.cityMun_id}`
                );
                this.brgy = data
            } catch (error) {
                console.log("search_brgy - error");
                this.error(error.response.data.message);
            }
        },
    },
};
