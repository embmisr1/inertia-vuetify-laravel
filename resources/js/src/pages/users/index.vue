<template>
    <DefaultLayout>
        <div class="my-2">
            <v-btn elevation="10" @click="setModal(user_fields, 'Add')" small>
                <box-icon name="plus" animation="tada-hover"></box-icon>
                Add User
            </v-btn>
        </div>
        <b-table
            :data="users.data"
            paginated
            :per-page="users.per_page"
            pagination-size="is-small"
            hoverable
            backend-pagination
            :total="users.total"
            :current-page.sync="users.current_page"
            pagination-position="bottom"
            pagination-rounded
            @page-change="onPageChange"
            narrowed
            :loading="loading"
        >
            <b-table-column
                field="id"
                label="ID"
                width="70"
                sortable
                numeric
                searchable
            >
                <template #searchable="props">
                    <b-input
                        v-model="filters.id"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.id }}
                </template>
            </b-table-column>

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

            <b-table-column field="user.email" label="Email" v-slot="props">
                {{ props.row.email }}
            </b-table-column>

            <b-table-column field="action" label="" sortable v-slot="props">
                <v-btn icon @click="setModal(props.row, 'Update')"
                    ><box-icon
                        name="edit"
                        color="orange"
                        animation="tada-hover"
                    ></box-icon
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
        <ChangePassword :modal="change_pass_modal"  :close="resetChangePassModal" />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDUser from "../../components/Users/CUD.vue";
import ChangePassword from "../../components/Users/ChangePassword.vue";
import PageMixins from "../../mixins/page";
import user_modal from "../../mixins/user_modal";
import _ from "lodash";
export default {
    mixins: [PageMixins, user_modal],
    components: {
        DefaultLayout,
        CUDUser,
        ChangePassword,
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
        };
    },
    methods: {
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
