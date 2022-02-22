<template>
    <DefaultLayout>
        <div class="my-2">
            <v-btn elevation="10" @click="modal.active = true" small>
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
                <v-btn icon
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
        </b-table>
        <CUDUser :modal="modal" :close="resetModal" />
        ChangePassword
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDUser from "../../components/Users/CUD.vue";
import ChangePassword from "../../components/Users/ChangePassword.vue";
import PageMixins from "../../mixins/page";
import _ from "lodash";
export default {
    mixins: [PageMixins],
    components: {
        DefaultLayout,
        CUDUser,
        ChangePassword
    },
    props: {
        users: Object,
        filters: Object,
    },
    data() {
        return {
            data: [],
            modal: {
                active: false,
                form: this.$inertia.form({
                    username: "",
                    email: "",
                    password: "",
                }),
                type: "Add",
            },
        };
    },
    methods: {
        get: _.debounce(function (params) {
            try {
                this.$inertia.get("/app/users", { ...params });
            } catch (error) {
                console.log(error);
            }
        }, 1500),
        setModal(data, type) {
            this.modal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                }),
                type: type,
            };
        },
        resetModal() {
            this.modal = {
                active: false,
                form: this.$inertia.form({
                    username: "",
                    email: "",
                    password: "",
                }),
                type: "Add",
            };
        },
    },
    watch: {
        filtersObject() {
            this.get({ ...this.filtersObject });
            // this.$inertia.get("/app/users", {
            //     filters: { ...this.filtersObject },
            // });
        },
    },
};
</script>
