<template>
    <DefaultLayout :access="access">
        <b-table
            :data="data"
            paginated
            :per-page="perPage"
            :current-page.sync="currentPage"
            :pagination-position="paginationPosition"
            pagination-rounded
            :debounce-page-input="300">

            <b-table-column field="id" label="ID" width="40" sortable numeric v-slot="props">
                {{ props.row.id }}
            </b-table-column>

            <b-table-column field="user.first_name" label="First Name" sortable v-slot="props">
                {{ props.row.user.first_name }}
            </b-table-column>

            <b-table-column field="user.last_name" label="Last Name" sortable v-slot="props">
                {{ props.row.user.last_name }}
            </b-table-column>

            <b-table-column field="date" label="Date" sortable centered v-slot="props">
                <span class="tag is-success">
                    {{ new Date(props.row.date).toLocaleDateString() }}
                </span>
            </b-table-column>

            <b-table-column label="Gender" v-slot="props">
                <span>
                    <b-icon pack="fas"
                        :icon="props.row.gender === 'Male' ? 'mars' : 'venus'">
                    </b-icon>
                    {{ props.row.gender }}
                </span>
            </b-table-column>

        </b-table>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import {page} from '../../mixins'
export default {
    mixins:[page],
    components: {
        DefaultLayout,
    },
    data() {
        return {
            data: [],
            paginationPosition: "both",
            currentPage: 1,
            perPage: 15,
        };
    },
};
</script>
