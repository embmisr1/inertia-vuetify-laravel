export default {
    data() {
        return {
            change_pass_modal: {
                active: false,
                form: this.$inertia.form({
                    old: "",
                    new: "",
                    conf: "",
                }),
            },
            user_modal: {},
            admin_reset_password: {
                active: false,
                form: this.$inertia.form({
                    id: "",
                    new: "",
                    conf: "",
                }),
            },
        };
    },
    methods: {
        setModal(data, type) {
            this.user_modal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                }),
                type: type,
            };
        },
        resetUserModal() {
            this.user_modal = {
                active: false,
                form: this.$inertia.form({
                    // username: "",
                    // email: "",
                    // password: "",
                }),
                type: "Add",
            };
        },
        setChangePassModal(data, type) {
            this.change_pass_modal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                }),
                type: type,
            };
        },
        setAdminReset(data){
            this.admin_reset_password = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                    new: "",
                    conf: "",
                }),
            };
        },
        resetAdminResetPasswordModal() {
            this.admin_reset_password = {
                active: false,
                form: this.$inertia.form({
                    id: "",
                    new: "",
                    conf: "",
                }),
            };
        },
        resetChangePassModal() {
            this.change_pass_modal = {
                active: false,
                form: this.$inertia.form({
                    old: "",
                    new: "",
                    conf: "",
                }),
                type: "Change Password",
            };
        },
    },
};
