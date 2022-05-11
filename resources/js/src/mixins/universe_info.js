export default {
    data() {
        return {
            form_basic_info: {
                un_firmname: "",
                un_proponent: "",
                un_crs_number: "",
                un_type: "",
                ...this.query,
            },
            form_permit_info: {
                permit_law: "",
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
