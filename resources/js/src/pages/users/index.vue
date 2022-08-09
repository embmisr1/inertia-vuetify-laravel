<template>
    <DefaultLayout>
        <Link href="/app/users/create" as="button">
            <v-btn elevation="10" link small>
                <box-icon
                    name="plus"
                    animation="tada-hover"
                    :color="isTheme ? 'white' : 'black'"
                ></box-icon>
                Add User
            </v-btn>
        </Link>

        <b-table
            :data="users.data"
            paginated
            :per-page="users.meta.per_page"
            pagination-size="is-small"
            page-input
            hoverable
            backend-pagination
            :total="users.meta.total"
            :current-page.sync="users.meta.current_page"
            pagination-position="top"
            pagination-rounded
            @page-change="onPageChange"
            narrowed
            :loading="loading"
            bordered
            sticky-header
            scrollable
            :row-class="(row, index) => (isTheme ? 'bg-black text-white' : '')"
            :header-class="isTheme ? 'bg-black text-white' : ''"
            height="420"
        >
            <b-table-column field="username" label="UserName" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filters.username"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.username }}
                </template>
            </b-table-column>

            <b-table-column field="email" label="Email" v-slot="props">
                {{ props.row.email }}
            </b-table-column>

            <b-table-column field="position" label="Position" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filters.position"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.position }}
                </template>
            </b-table-column>

            <b-table-column
                field="unit_section"
                label="Unit Section"
                searchable
            >
                <template #searchable="props">
                    <b-input
                        v-model="filters.unit_section"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{
                        props.row.unit_section ? props.row.unit_section : "N/A"
                    }}
                </template>
            </b-table-column>

            <b-table-column field="action" label="" sortable v-slot="props">
                <!-- <v-btn icon @click="setModal(props.row, 'Update')"
                    ><box-icon
                        name="edit"
                        color="orange"
                        animation="tada-hover"
                    ></box-icon
                ></v-btn> -->
                <Link :href="`/app/users/${props.row.id}`" as="button">
                    <v-btn link small icon>
                        <box-icon
                            name="edit"
                            color="orange"
                            animation="tada-hover"
                        ></box-icon>
                    </v-btn>
                </Link>
                <v-btn
                    icon
                    small
                    color="success"
                    @click="setRoleModal(props.row.id)"
                    ><box-icon name="id-card"></box-icon
                ></v-btn>
                <v-btn
                    icon
                    @click="
                        setChangePassModal(
                            change_pass_fields,
                            'Change Password'
                        )
                    "
                    ><box-icon
                        name="lock-alt"
                        animation="tada-hover"
                        type="solid"
                        :color="isTheme ? 'white' : 'black'"
                    ></box-icon
                ></v-btn>
                <v-btn icon @click="setModal(props.row, 'Delete')"
                    ><box-icon
                        name="trash"
                        color="red"
                        animation="tada-hover"
                    ></box-icon
                ></v-btn>
            </b-table-column>
            <template #empty>
                <div class="text-center text-3xl text-gray-500 font-extrabold">
                    No Data Found
                </div>
            </template>
        </b-table>
        <CUDUser :modal="user_modal" :close="resetUserModal" />
        <ChangePassword
            :modal="change_pass_modal"
            :close="resetChangePassModal"
        />
        <UserRole
            :modal="role_modal"
            :close="() => (role_modal.active = false)"
        />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDUser from "../../components/Users/CUD.vue";
import ChangePassword from "../../components/Users/ChangePassword.vue";
import PageMixins from "../../mixins/page";
import { page, toasts } from "../../mixins/";
import user_modal from "../../mixins/user_modal";
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
import UserRole from "../../components/Users/UserRole.vue";
export default {
    metaInfo: {
        title: "Users",
    },
    mixins: [page, toasts, user_modal],
    components: {
        DefaultLayout,
        CUDUser,
        ChangePassword,
        Link,
        UserRole,
    },
    props: {
        users: Object,
        filters: Object,
    },
    data() {
        return {
            data: [],
            user_fields: {
                username: "",
                email: "",
                password: "",
            },
            change_pass_fields: {
                password: "",
                confirm_password: "",
            },
            role_modal: {
                active: false,
            },
        };
    },
    methods: {
        async setRoleModal(user_id) {
            try {
                // this.role_modal = true;
                this.loading = true;
                const { data } = await axios.get(
                    `/app/users_access/users_access_register/${user_id}`
                );
                this.role_modal = {
                    active: true,
                    data,
                };
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.response.data.message);
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
