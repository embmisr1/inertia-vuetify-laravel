export default {
    data() {
        return {
            unit_section_modal: {},
        };
    },
    methods: {
        setModal(data, type) {
            this.unit_section_modal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                }),
                type: type,
            };
        },
        resetUserModal() {
            this.unit_section_modal = {
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
