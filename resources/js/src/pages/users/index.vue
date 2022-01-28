<template>
    <DefaultLayout>
        <v-data-table
            :headers="headers"
            :items="users.data"
            sort-by="calories"
            class="elevation-1"
            :page="users.current_page"
            :server-items-length="users.total"
            :options="{
                page: users.current_page,
                itemsPerPage: users.per_page,
                pageStart: users.from,
                pageStop: users.to,
                pageCount: users.per_page,
                itemsLength: users.total,
            }"
            hide-default-footer
            disable-pagination
        >
            <template v-slot:top>
                <TableHeader title="Users">
                    <div>
                        <v-tooltip left>
                            <template v-slot:activator="{ on, attrs }">
                                <v-btn
                                    icon
                                    v-bind="attrs"
                                    v-on="on"
                                    @click="modal.active = true"
                                    ><box-icon
                                        name="plus"
                                        animation="tada-hover"
                                        :color="
                                            $vuetify.theme.dark
                                                ? 'white'
                                                : 'dark'
                                        "
                                        small
                                    ></box-icon
                                ></v-btn>
                            </template>
                            <span>Add User</span>
                        </v-tooltip>
                    </div>
                </TableHeader>
            </template>	

            <template v-slot:item.actions="{ item }">
                <box-icon
                    name="edit"
                    color="orange"
                    animation="tada-hover"
					@click="setModal(item,'Update')"
                ></box-icon>
                <box-icon
                    type="solid"
                    name="trash"
                    color="red"
                    animation="tada-hover"
					@click="setModal(item,'Delete')"
                ></box-icon>
            </template>
            <template v-slot:footer>
				<v-spacer/>
                <Pagination :links="users.links" />
            </template>
        </v-data-table>
        <CUDUser :modal="modal" :close="resetModal" />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import TableHeader from "../../components/TableHeader.vue";
import CUDUser from "../../components/Users/CUD.vue";
import Pagination from "../../components/Pagination.vue";
export default {
    props: {
        users: Object,
        filters: Object,
    },
    components: {
        DefaultLayout,
        TableHeader,
        CUDUser,
        Pagination,
    },
    data() {
        return {
            headers: [
                {
                    text: "Username",
                    align: "start",
                    sortable: false,
                    value: "username",
                },
                { text: "Email", value: "email", sortable: false },
                { text: "", value: "actions", sortable: false },
            ],
            modal: {
                active: false,
                form: this.$inertia.form({
                    username: "",
                    email: "",
                    password: "",
                }),
                type: "Add",
            },
            options: {},
        };
    },
    methods: {
		setModal(data,type){
			this.modal = {
                active: true,
                form: this.$inertia.form({
                   ...data
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
