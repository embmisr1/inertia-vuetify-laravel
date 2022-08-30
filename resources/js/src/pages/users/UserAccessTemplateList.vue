<template>
    <DefaultLayout :access="access">
        <v-container>
            <div class="py-4">
                <Link href="/app/users_access/users_access_template_register">
                    <v-btn elevation="10" small>
                        <box-icon
                            name="plus"
                            animation="tada-hover"
                            :color="isTheme ? 'white' : 'black'"
                        ></box-icon>
                        Add Template
                    </v-btn>
                </Link>
            </div>
            <b-table
                :data="query_access_template"
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
                <b-table-column field="access_template" label="Template Name">
                    <template #searchable="props">
                        <!-- v-model="filters.position" -->
                        <b-input
                            placeholder="Search..."
                            icon="magnify"
                            size="is-small"
                        />
                    </template>
                    <template v-slot="props">
                        {{ props.row.access_template }}
                    </template>
                </b-table-column>

                <b-table-column field="action" label="" sortable v-slot="props">
                    <Link
                        :href="`/app/users_access/users_access_template_edit/${props.row.id}`"
                    >
                        <box-icon
                            name="edit"
                            color="orange"
                            animation="tada-hover"
                        ></box-icon>
                    </Link>
                    <v-btn icon @click="removeTemplate(props.row.id)" small
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
        </v-container>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import { page, toasts, dialogs, users } from "../../mixins";
import { Link } from "@inertiajs/inertia-vue";
import _ from "lodash";
export default {
    metaInfo: {
        title: "Users",
    },
    mixins: [page, toasts, dialogs, users],
    components: {
        DefaultLayout,
        Link,
    },
    props: {
        query_access_template: Array,
        filters: Object,

    },
    data() {
        return {
            data: [],
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
        async removeTemplate(template_id) {
            try {
                this.loading = true;
                await this.confirmDelete(
                    "This action  cannot be undone",
                    async () => {
                        this.loading = true;

                        await this.$inertia.delete(
                            `/app/users_access/users_access_template_delete/${template_id}`
                        );
                        this.loading = false;
                    }
                );
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.response.data.message);
            }
        },
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
