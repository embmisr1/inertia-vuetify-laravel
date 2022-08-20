export default {
    data() {
        return {
            position_modal: {},
        };
    },
    methods: {
        setModal(data, type) {
            this.position_modal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                }),
                type: type,
            };
        },
        resetPositionModal() {
            this.position_modal = {
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
