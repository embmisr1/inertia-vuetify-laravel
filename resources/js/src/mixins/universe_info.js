export default {
    data() {
        return {
            form_basic_info: {
                id: "",
                un_crs_number : "",
                un_psic_group : "",
                un_psic_class : "",
                un_psic_subclass : "",
                un_firmname : "",
                un_proponent : "",
                un_project_type : "",
                un_project_subtype : "",
                un_project_specific_type : "",
                un_project_specific_subtype : "",
                un_detailed_description : "",
                un_specific_address : "",
                un_region : "",
                un_brgy : "",
                un_municipality : "",
                un_province : "",
                un_lat : "",
                un_long : "",
                un_representative_name : "",
                un_representative_designation : "",
                un_representative_gender : "",
                un_remarks : "",
                un_status : "",
                un_type : "",
                ...this.query,
            },
            form_permit_info: {
                perm_id: "",
                perm_law: "",
                perm_hazwaste_type: "",
                perm_number: "",
                perm_date_issuance: "",
                perm_date_expiry: "",
                perm_file: "",
                perm_description: "",
                perm_status: "",
            },
            form_monitoring_info: {
                mon_id: "",
                mon_law: "",
                mon_date_monitored: "",
                mon_type: "",
                mon_file: "",
            },
            form_legal_info: {
                nov_id: "",
                nov_law: "",
                nov_desc: "",
                nov_date: "",
                nov_tc_date: "",
                nov_tc_status: "",
                nov_file: "",
                nov_order_number: "",
                nov_order_amt: "",
                nov_order_date_issuance: "",
                nov_order_date_settlement: "",
                nov_official_receipt_number: "",
                nov_compliance_status: "",
                nov_order_remarks: "",
            },
            form_hazwaste_info: {
                haz_id: "",
                haz_type: "",
                haz_number: "",
                haz_date_acceptance: "",
                haz_date_issuance: "",
                haz_date_expiry: "",
                haz_file: "",
            },
            form_pco_info: {
                pco_id: "",
                pco_name: "",
                pco_number: "",
                pco_email: "",
                pco_contact: "",
                pco_start_date: "",
                pco_end_date: "",
            },
            form_complaint_info: {
                comp_id: "",
                comp_name: "",
                comp_nature: "",
                comp_attached_file: "",
                comp_action_file: "",
                comp_remarks: "",
            },
        };
    },
    methods: {
        async submit_basic_info() {
            if(confirm('Do you want to proceed?')){
                const data = {
                    'basic': this.form_basic_info,
                    'permit': this.form_permit_info,
                    'monitoring': this.form_monitoring_info,
                    'legal': this.form_legal_info,
                    'hazwaste': this.form_hazwaste_info,
                    'pco': this.form_pco_info,
                    'complaint': this.form_complaint_info,
                };
                await this.$inertia.post("/app/universe_process", {
                    ...data,
                });
                if(!data.basic.id){
                    this.reset_basic_info();
                }
                this.reset_permit_info();
                this.reset_monitoring_info();
                this.reset_legal_info();
                this.reset_hazwaste_info();
                this.reset_pco_info();
                this.reset_complaint_info();
            }
        },
        reset_basic_info() {
            this.form_basic_info = {
                id: "",
                un_crs_number : "",
                un_psic_group : "",
                un_psic_class : "",
                un_psic_subclass : "",
                un_firmname : "",
                un_proponent : "",
                un_project_type : "",
                un_project_subtype : "",
                un_project_specific_type : "",
                un_project_specific_subtype : "",
                un_detailed_description : "",
                un_specific_address : "",
                un_region : "",
                un_brgy : "",
                un_municipality : "",
                un_province : "",
                un_lat : "",
                un_long : "",
                un_representative_name : "",
                un_representative_designation : "",
                un_representative_gender : "",
                un_remarks : "",
                un_status : "",
                un_type : "",
            };
        },
        reset_permit_info() {
            this.form_permit_info = {
                perm_id: "",
                perm_law: "",
                perm_hazwaste_type: "",
                perm_number: "",
                perm_date_issuance: "",
                perm_date_expiry: "",
                perm_file: "",
                perm_description: "",
                perm_status: "",
            };
        },
        reset_monitoring_info() {
            this.form_monitoring_info = {
                mon_id: "",
                mon_law: "",
                mon_date_monitored: "",
                mon_type: "",
                mon_file: "",
            };
        },
        reset_legal_info() {
            this.form_legal_info = {
                nov_id: "",
                nov_law: "",
                nov_desc: "",
                nov_date: "",
                nov_tc_date: "",
                nov_tc_status: "",
                nov_file: "",
                nov_order_number: "",
                nov_order_amt: "",
                nov_order_date_issuance: "",
                nov_order_date_settlement: "",
                nov_official_receipt_number: "",
                nov_compliance_status: "",
                nov_order_remarks: "",
            };
        },
        reset_hazwaste_info() {
            this.form_hazwaste_info = {
                haz_id: "",
                haz_type: "",
                haz_number: "",
                haz_date_acceptance: "",
                haz_date_issuance: "",
                haz_date_expiry: "",
                haz_file: "",
            };
        },
        reset_pco_info() {
            this.form_pco_info = {
                pco_id: "",
                pco_name: "",
                pco_number: "",
                pco_email: "",
                pco_contact: "",
                pco_start_date: "",
                pco_end_date: "",
            };
        },
        reset_complaint_info() {
            this.form_complaint_info = {
                comp_id: "",
                comp_name: "",
                comp_nature: "",
                comp_attached_file: "",
                comp_action_file: "",
                comp_remarks: "",
            };
        },
    },
};
