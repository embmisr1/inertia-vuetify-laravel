
export default {
    computed:{
        form_basic_info(){
            if(this.query){
                return {...this.query}
            }else{
                return {
                    id: '',
                    firm_name: '',
                    proponent: '',
                    crs_number: '',
                    universe_type: '',
                }
            }
        }
    },
    methods: {
      async submit_basic_info(){
        await this.$inertia.post("/app/universe_process", {
            ...this.form_basic_info
        });
      },
    },
};