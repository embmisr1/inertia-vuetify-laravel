export default {
    data() {
        return {
            form_basic_info: {
                id: "",
                un_brgy: "",
                un_crs_number: "",
                un_firmname: "",
                un_municipality: "",
                un_proponent: "",
                un_province: "",
                un_type: "",
                ...this.query,
            },
            form_permit_info: {
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
                this.reset_basic_info();
            }
        },
        reset_basic_info() {
            this.form_basic_info = {
                un_firmname: "",
                un_proponent: "",
                un_crs_number: "",
                un_type: "",
            };
            this.form_permit_info = {
                permit_law: "",
            };
        },
    },
};
