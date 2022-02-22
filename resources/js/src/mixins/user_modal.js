export default {
    data() {
        return {
            change_pass_modal: {},
            user_modal: {},
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
      resetChangePassModal() {
          this.change_pass_modal = {
              active: false,
              form: this.$inertia.form({
                  // username: "",
                  // email: "",
                  // password: "",
              }),
              type: "Change Password",
          };
      },
    },
};
