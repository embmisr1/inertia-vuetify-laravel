<template>
    <DefaultLayout>
      {{Object.keys(users.data[0])}}
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
        </b-table>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
export default {
    components: {
        DefaultLayout,
    },
    props:{
      users: Object,
        filters: Object,
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
