export default {
    data() {
        return {
            form_basic_info: {
                firm_name: "",
                proponent: "",
                crs_number: "",
                universe_type: "",
                ...this.query
            },
        };
    },
    computed: {
        // form_basic_info() {
        //     if(this.query){
        //         return {...this.query}
        //     }else{
        //         return {
        //             id: '',
        //             firm_name: '',
        //             proponent: '',
        //             crs_number: '',
        //             universe_type: '',
        //         }
        //     }
        // },
    },
    methods: {
        async submit_basic_info() {
            const data = {
                ...this.form_basic_info,
            };
            await this.$inertia.post("/app/universe_process", {
                ...data,
            });
            this.reset_basic_info();
        },
        reset_basic_info() {
            this.form_basic_info = {
                firm_name: "",
                proponent: "",
                crs_number: "",
                universe_type: "",
            };
        },
    },
};
