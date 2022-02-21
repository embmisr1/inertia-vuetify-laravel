<template>
    <DefaultLayout>
        <!-- {{Object.keys(users.links[0])}} -->
        {{filters}}
        <div class="my-2">
            <v-btn elevation="10" @click="modal.active = true">
                <box-icon name="plus" animation="tada-hover"></box-icon>
                Add User
            </v-btn>
        </div>
        <b-table
            :data="users.data"
            paginated
            :per-page="users.per_page"
            focusable
            pagination-size="is-small"
            hoverable
            backend-pagination
            :total="users.total"
            :current-page.sync="users.current_page"
            :pagination-position="paginationPosition"
            pagination-rounded
            aria-next-label="Next page"
            aria-previous-label="Previous page"
            aria-page-label="Page"
            aria-current-label="Current page"
            :debounce-page-input="1000"
            @page-change="onPageChange"
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
import Pagination from "../../components/Pagination-native.vue";
export default {
    components: {
        DefaultLayout,
        CUDUser,
        Pagination,
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
        async get() {
            try {
                // console.log(Object.keys(users))
                this.$inertia.get("/app/users", { page: this.currentPage });
            } catch (error) {
                console.log(error);
            }
        },
        async onPageChange(page) {
            // console.log(page);
            this.currentPage = page;
            await this.get();
        },
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
