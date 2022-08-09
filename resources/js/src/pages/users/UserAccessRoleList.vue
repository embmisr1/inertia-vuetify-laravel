<template>
    <DefaultLayout>
        <v-container>
            <v-btn elevation="10" small @click="roles_modal.active = true">
                <box-icon
                    name="plus"
                    animation="tada-hover"
                    :color="isTheme ? 'white' : 'black'"
                ></box-icon>
                Add User Role
            </v-btn>
            <b-table
                :data="query_access_role"
                pagination-size="is-small"
                page-input
                hoverable
                backend-pagination
                pagination-position="top"
                pagination-rounded
                @page-change="onPageChange"
                narrowed
                :loading="loading"
                bordered
                sticky-header
                scrollable
                :row-class="
                    (row, index) => (isTheme ? 'bg-black text-white' : '')
                "
                :header-class="isTheme ? 'bg-black text-white' : ''"
                height="420"
            >
                <b-table-column
                    field="access_role"
                    label="Access Role"
                    centered
                >
                    <template #searchable="props">
                        <!-- v-model="filters.position" -->
                        <b-input
                            placeholder="Search..."
                            icon="magnify"
                            size="is-small"
                        />
                    </template>
                    <template v-slot="props">
                        {{ props.row.access_role }}
                    </template>
                </b-table-column>

                <b-table-column field="action" label="" sortable v-slot="props">
                    <v-btn small icon @click="setRoleModal(props.row)">
                        <box-icon
                            name="edit"
                            color="orange"
                            animation="tada-hover"
                        ></box-icon>
                    </v-btn>
                    <v-btn icon @click="removeRole(props.row.id)" small
                        ><box-icon
                            name="trash"
                            color="red"
                            animation="tada-hover"
                        ></box-icon
                    ></v-btn>
                </b-table-column>
                <template #empty>
                    <div
                        class="text-center text-3xl text-gray-500 font-extrabold"
                    >
                        No Data Found
                    </div>
                </template>
            </b-table>
            <Roles
                :modal="roles_modal"
                :form_field="role_form"
                :close="() => (roles_modal.active = false)"
                :submitForm="submitRole"
            />
        </v-container>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDUser from "../../components/Users/CUD.vue";
import ChangePassword from "../../components/Users/ChangePassword.vue";
import { page, toasts, dialogs } from "../../mixins/";
import user_modal from "../../mixins/user_modal";
import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import Roles from "../../components/Roles/Roles.vue";
export default {
    metaInfo: {
        title: "Users",
    },
    mixins: [page, toasts, dialogs],
    components: {
        DefaultLayout,
        CUDUser,
        ChangePassword,
        Link,
        Roles,
    },
    props: {
        query_access_role: Array,
        filters: Object,
    },
    data() {
        return {
            data: [],
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
        get: _.debounce(async function (params) {
            try {
                await this.$inertia.get("/app/users", { ...params });
            } catch (error) {
                console.log(error);
            }
        }, 1500),
    },
    watch: {
        filtersObject() {
            this.loading = true;
            this.get({ ...this.filtersObject });
            this.loading = false;
            // this.$inertia.get("/app/users", {
            //     filters: { ...this.filtersObject },
            // });
        },
    },
};
</script>
