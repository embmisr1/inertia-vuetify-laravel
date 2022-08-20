export default {
    data() {
        return {
            division_modal: {},
        };
    },
    methods: {
        setModal(data, type) {
            this.division_modal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                }),
                type: type,
            };
        },
        resetDivisionModal() {
            this.division_modal = {
                active: false,
                form: this.$inertia.form({
                    // username: "",
                    // email: "",
                    // password: "",
                }),
                type: "Add",
            };
        },
    },
};
