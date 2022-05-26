<template>
    <DefaultLayout>
    <div id="app" class="container">
        <section>
            <b-table
                :data="query.data"
                :total="query.total"
                :per-page="query.per_page"
                :current-page.sync="query.current_page"
                pagination-position="bottom"
                default-sort-direction="asd"
                sort-icon="arrow-up"
                sort-icon-size="is-small"
                @page-change="onPageChange"
                paginated
                backend-pagination>

                <b-table-column field="un_firmname" label="Firmname" sortable v-slot="props" searchable>
                    {{ props.row.un_firmname }}
                </b-table-column>

                <b-table-column field="un_crs_number" label="CRS No." sortable v-slot="props" searchable>
                    {{ props.row.un_crs_number }}
                </b-table-column>

                <b-table-column field="un_proponent" label="Proponent" sortable v-slot="props" searchable>
                    {{ props.row.un_proponent }}
                </b-table-column>

                <b-table-column field="un_status" label="Firm Status" sortable centered v-slot="props" searchable>
                    <span class="tag is-success">
                        {{ props.row.un_status }}
                    </span>
                </b-table-column>

                <b-table-column field="provDesc" label="Province" sortable v-slot="props" searchable>
                    {{ props.row.provDesc }}
                </b-table-column>

                <b-table-column field="provDesc" label="City/Municipality" sortable v-slot="props" searchable>
                    {{ props.row.citymunDesc }}
                </b-table-column>

                <b-table-column field="provDesc" label="Barangay" sortable v-slot="props" searchable>
                    {{ props.row.brgyDesc }}
                </b-table-column>

                <b-table-column label="Action" v-slot="props">
                    <span>
                        <Link :href="`/app/universe_form/${props.row.id}`" as="button">
                            <v-btn link small icon>
                                <b-tooltip type="is-dark" :label="`Edit - ${props.row.un_firmname}`">
                                    <box-icon
                                        name="edit"
                                        color="orange"
                                        animation="tada-hover"
                                    >
                                    </box-icon>
                                </b-tooltip>
                            </v-btn>
                        </Link>
                    </span>
                </b-table-column>

            </b-table>
        </section>
    </div>
    </DefaultLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
export default {
    components: {
        DefaultLayout,
        Link,
    },
    props: {
        query: Object,
    },
    computed: {
        current_page_holder(){
            return this.query.current_page;
        },
    },
    data: () => ({
    }),
    methods: {
        async onPageChange(page_content){
            await this.$inertia.get(`/app/universe`,{
                page: page_content,
            });
        }
    },
};
</script>
