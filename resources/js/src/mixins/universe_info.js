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
                perm_number: "",
                perm_date_issuance: "",
                perm_date_expiry: "",
                perm_file: "",
                perm_description: "",
                perm_status: "",
                ...this.query
            },
        };
    },
    methods: {
        async submit_basic_info() {
            if(confirm('Do you want to proceed?')){
                const data = {
                    'basic': this.form_basic_info,
                    'permit': this.form_permit_info,
                };
                await this.$inertia.post("/app/universe_process", {
                    ...data,
                });
                console.log(data);
                console.log(this.permit_table);
                this.reset_basic_info();
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
            this.form_permit_info = {
                permit_law: "",
            };
        },
    },
};
