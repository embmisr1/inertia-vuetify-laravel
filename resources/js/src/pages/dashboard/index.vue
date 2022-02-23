<template>
    <DefaultLayout>
        <!-- <b-table
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

        </b-table> -->
        <div
            class="scrollbar-thin scrollbar-thumb-gray-900 scrollbar-thumb-rounded-full scrollbar-track-rounded-full h-32 overflow-y-scroll"
        >
            <!-- This element is just here so that something overflows the parent -->
            <div class="h-64 bg-gray-400"></div>
        </div>
    </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
export default {
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
