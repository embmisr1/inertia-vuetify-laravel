import axios from "axios";

export default {
    props: {
        query_closed_dumpsite_id: Number,
        lce_edit: Array,
        province_dropdown: Array,
        lce_info: Array,
        query_slf: Array, // slf table
        slf_edit: Array,
        query_mrf: Array, // mrf table
        mrf_edit: Array,
        cd_edit: Array,
        query_rca: Array,
        attachments: Object,
        query_ten_year: Array,
        ten_year_edit: Array,
        ten_year_monitoring_list: Array,
        ten_year_monitoring_edit: Array,
        ten_year_findings_array: Array,
        query_equipment: Array,
        query_dues: Array,
        dues_edit: Array,
        query_gad: Array,
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
                slf_1586_compliance: null,
                slf_9275_compliance: null,
                slf_6969_compliance: null,
                slf_file: null,
                lce_FK: null,
            },
            mrf: {
                mrf_complete_address: null,
                mrf_emb_funded: null,
                mrf_latitude: null,
                mrf_longitude: null,
                mrf_status_operation: null,
                mrf_service_area: null,
                mrf_total_waste_generation: null,
                mrf_biodegradable: null,
                mrf_recyclable: null,
                mrf_special_waste: null,
                mrf_total_waste_diverted: null,
                mrf_number_of_waste_diverted: null,
                mrf_file: null,
                lce_FK: null,
            },
            cd: {
                cd_total_land_area: null,
                cd_date_monitored: new Date(
                    Date.now() - new Date().getTimezoneOffset() * 60000
                )
                    .toISOString()
                    .substr(0, 10),
                cd_site_clearing: null,
                cd_site_grading: null,
                cd_application_maintenance: null,
                cd_provision_drainage: null,
                cd_leachate_management: null,
                cd_gas_management: null,
                cd_fencing_security: null,
                cd_putting_sinages: null,
                cd_prohibition: null,
                cd_status: null,
                cd_remarks: null,
                cd_date_closure: null,
                lce_FK: null,
            },
            ten_yr: {
                ten_year_planning_period: null,
                ten_year_year_approved: null,
                ten_year_number: null,
                ten_year_file: null,
                ten_year_copy_plan: null,
                ten_year_copy_resolution: null,
                ten_year_copy_form: null,
                lce_FK: null,
                finding_a: false,
                finding_b: false,
                finding_c: false,
                finding_d: false,
                finding_e: false,
                finding_f: false,
                finding_g: false,
                finding_h: false,
                finding_i: false,
                finding_j: false,
            },
            ten_yr_mon: {
                ten_year_mon_status: null,
                ten_year_mon_date_monitored: null,
                ten_year_mon_date_submitted: null,
                ten_year_mon_iis_number: null,
                ten_year_mon_copy_report: null,
                ten_year_mon_by: null,
                ten_year_FK: null,
            },
            dues: {
                dues_purpose: null,
                dues_amount_granted: null,
                dues_date_granted: null,
                dues_unliquidated: null,
                dues_remarks: null,
                dues_accountant: null,
                dues_contact_email: null,
                lce_FK: null,
            },
            gad: {
                gad_male: null,
                gad_female: null,
            },
            complete_address: null,
            complete_address_setter: {
                prov: {},
                cityMun: {},
                brgy: {},
            },
            equipment: {
                equipment_description: "",
            },
            category: ["Category 1", "Category 2", "Category 3", "Category 4"],
            leachment_type: ["Recirculaation", "Chemical", "Biological"],
            status_of_operation: ["Operational", "Not Operational"],
            cd_status: ["Closed", "Rehabilitation", "Ongoing"],
            cityMun: [],
            brgy: [],
            equipment_modal: {
                active: false,
                type: "create",
            },
        };
    },
    computed: {
        withAttachment() {
            let toReturn = true;
            if (this.attachments === undefined) {
                return (toReturn = false);
            } else if (this.attachments.data.length === 0) {
                return (toReturn = false);
            }

            return toReturn;
        },
        date_now() {
            return new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
                .toISOString()
                .substr(0, 10);
        },
        lce_id() {
            return this.lce_details.id;
        },
        lce_details() {
            return this.lce_edit[0];
        },
        lce_complete_name() {
            const { lce_first_name, lce_middle_name, lce_last_name } =
                this.lce_details;
            return `${lce_first_name ? lce_first_name : ""} ${
                lce_middle_name ? lce_middle_name : ""
            } ${lce_last_name ? lce_last_name : ""}`;
        },
        lce_address() {
            const { provDesc, citymunDesc, lce_zip_code, districtCode } =
                this.lce_details;
            return `${citymunDesc}, District No ${
                districtCode ? districtCode : ""
            }, ${provDesc}, ${lce_zip_code ? lce_zip_code : ""} `;
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
        slf_details() {
            return this.slf_info[0];
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
        async export_swm() {
            try {
                const {value,label} = await this.exportable
                const { data } = await axios.get(`/app/swm/${value}`, {
                    params: { ...this.filter },
                    responseType: "blob",
                });
                const blob = new Blob([data], {
                    // type: "text/csv",
                    typ: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                });
                let fileURL = window.URL.createObjectURL(blob);
                let fileLink = document.createElement("a");

                fileLink.href = fileURL;
                fileLink.setAttribute("download", `${value}.xlsx`);
                // fileLink.setAttribute("download", "items.csv");
                document.body.appendChild(fileLink);

                fileLink.click();
                // this.get(this.filterObject);
            } catch (error) {
                console.log(error);
            }
        },
        async search_cityMun(prov_id) {
            try {
                this.loading = true;
                const { data } = await axios.get(
                    `http://210.213.92.250/api/app/province_dropdown/${prov_id}`
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
                    `http://210.213.92.250/api/app/municipality_dropdown/${cityMun_id}`
                );
                this.brgy = data;
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log("search_brgy - error");
                this.error(error.response.data.message);
            }
        },
        goBack() {
            window.history.back();
        },
        setEquipmentModal(active, type) {
            this.equipment_modal = {
                active,
                type,
            };
        },
        setUpdateEquipment(equip) {
            this.equipment = { ...equip };
            this.setEquipmentModal(true, "update");
        },
        async submitEquimentForm() {
            try {
                const data = {
                    ...this.equipment,
                    lce_FK: this.lce_id,
                };
                const { type } = this.equipment_modal;
                this.loading = true;
                if (type === "create") {
                    await this.$inertia.post(
                        "/app/swm/equipment_register_process",
                        data
                    );
                } else if (type === "update") {
                    await this.$inertia.post(
                        "/app/swm/equipment_update_process",
                        data
                    );
                }
                // this.submitEquimentForm(false,"create")
                this.equipment_modal = {
                    active: false,
                    type: "create",
                };
                this.loading = false;
            } catch (error) {
                this.loading = false;
                this.error(error.response.data.message);
                console.log(error);
            }
        },
    },
};
