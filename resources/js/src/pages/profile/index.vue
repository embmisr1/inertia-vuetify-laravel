<template>
    <DefaultLayout :access="access">
        <PageTitle
            route="/app/universe"
            :title="`Manage your Profile ${user_data.username}`"
        />
        <b-table
            :data="user_logs.data"
            paginated
            :per-page="user_logs.meta.per_page"
            pagination-size="is-small"
            page-input
            hoverable
            backend-pagination
            :total="user_logs.meta.total"
            :current-page.sync="user_logs.meta.current_page"
            pagination-position="both"
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
            <template #top-left>
                <b-button
                    type="is-text"
                    size="is-small"
                    @click="change_pass_modal.active = true"
                    >Change your Password</b-button
                >
                <div class="border border-black mx-2"></div>
                <b-select
                    placeholder="Rows Per Page"
                    v-model="filters.per_page"
                    size="is-small"
                >
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="500">500</option>
                </b-select>
            </template>
            <template #bottom-left>
                <b-field type="is-dark">
                    <b-select
                        placeholder="Rows Per Page"
                        v-model="filters.per_page"
                        size="is-small"
                    >
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                    </b-select>
                </b-field>
            </template>
            <b-table-column field="activity" label="Activity" searchable>
                <template #searchable="props">
                    <b-input
                        v-model="filters.activity"
                        placeholder="Search..."
                        icon="magnify"
                        size="is-small"
                    />
                </template>
                <template v-slot="props">
                    {{ props.row.activity }}
                </template>
            </b-table-column>
            <b-table-column field="type" label="Activity Type" searchable>
                <template #searchable="props">
                    <b-select
                        placeholder="Search Activity Type"
                        v-model="filters.activity_type"
                        size="is-small"
                    >
                        <option value="Create">Create</option>
                        <option value="Update">Update</option>
                        <option value="Delete">Delete</option>
                    </b-select>
                </template>
                <template v-slot="props">
                    {{ props.row.type }}
                </template>
            </b-table-column>
            <b-table-column field="created_at" label="Created At">
                <template #searchable="props">
                    <b-select
                        placeholder="Search Activity Type"
                        v-model="filters.activity_type"
                        size="is-small"
                    >
                        <option value="Create">Create</option>
                        <option value="Update">Update</option>
                        <option value="Delete">Delete</option>
                    </b-select>
                </template>
                <template v-slot="props">
                    {{ props.row.created_at }}
                </template>
            </b-table-column>
            <template #empty>
                <div class="text-center text-3xl text-gray-500 font-extrabold">
                    No Data Found
                </div>
            </template>
        </b-table>
        <ChangePassword
            :modal="change_pass_modal"
            :close="resetChangePassModal"
        />
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import { Link } from "@inertiajs/inertia-vue";
import { page, toasts, dialogs, user_modal } from "../../mixins/";
import urls from "../../helpers/urls";
import PageTitle from "../../components/PageTitle.vue";
import ChangePassword from "../../components/Users/ChangePassword.vue";
import _ from "lodash";
export default {
    components: {
        DefaultLayout,
        Link,
        PageTitle,
        ChangePassword,
    },
    mixins: [page, toasts, dialogs, user_modal],
    props: {
        data: Object,
        user_logs: Object,
    },
    computed: {
        user_data() {
            return { ...this.data.data };
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                username: "",
                email: "",
                // password: "",
                // conf_password: "",
                avatar: null,
                selected_roles: [],
            }),
        };
    },
    methods: {
        get: _.debounce(async function (params) {
            try {
                this.loading = true;
                await this.$inertia.get("#", { ...params });
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error("PSIC Group Class Get - error");
            }
        }, 1500),
    },
};
</script>

<style></style>
