export default {
    data() {
        return {
            role_form: {
                access_role: "",
            },
            roles_modal: {
                active: false,
                type: "create",
            },
        };
    },
    methods: {
        setRoleModal(role) {
            this.role_form = {
                ...role,
            };
            this.roles_modal = {
                active: true,
                type: "update",
            };
        },
        async removeRole(role_id) {
            try {
                this.loading = true;
                await this.confirmDelete(
                    "This action  cannot be undone",
                    async () => {
                        this.loading = true;
                        await this.$inertia.delete(
                            `/app/users_access/users_access_role_delete/${role_id}`
                        );
                        this.loading = false;
                    }
                );
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.data.response.messag);
            }
        },
        async submitRole() {
            try {
                const { type } = this.roles_modal;
                this.loading = true;
                if (type === "create") {
                    await this.$inertia.post(
                        "/app/users_access/users_access_role_register_process",
                        this.role_form
                    );
                } else if (type === "update") {
                    await this.$inertia.post(
                        "/app/users_access/users_access_role_update_process",
                        this.role_form
                    );
                }
                this.roles_modal = {
                    active: false,
                    type: "create",
                };
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.data.response.messag);
            }
        },
    },
};
