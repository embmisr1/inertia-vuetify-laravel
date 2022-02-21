<template>
    <DefaultLayout>
        <!-- {{ Object.keys(users.data[0]) }} -->

        <div class="my-2">
            <v-btn elevation="10" @click="modal.active = true">
                <box-icon name="plus" animation="tada-hover"></box-icon>
                Add User
            </v-btn>
        </div>
        <b-table
            :data="users.data"
            paginated
            :per-page="perPage"
            :current-page.sync="users.current_Page"
            :pagination-position="paginationPosition"
            pagination-rounded
            :debounce-page-input="300"
        >
            <b-table-column
                field="id"
                label="ID"
                width="40"
                sortable
                numeric
                v-slot="props"
            >
                {{ props.row.id }}
            </b-table-column>

            <b-table-column
                field="user.username"
                label="UserName"
                sortable
                v-slot="props"
            >
                {{ props.row.username }}
            </b-table-column>

            <b-table-column
                field="user.email"
                label="Email"
                sortable
                v-slot="props"
            >
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
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import CUDUser from "../../components/Users/CUD.vue";
export default {
    components: {
        DefaultLayout,
        CUDUser,
    },
    props: {
        users: Object,
        filters: Object,
    },
    data() {
        return {
            data: [],
            paginationPosition: "bottom",
            currentPage: 1,
            perPage: 15,
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
};
</script>
