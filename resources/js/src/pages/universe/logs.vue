<template>
  <DefaultLayout :access="access">
    <!-- <v-btn color="primary" dark class="mb-2" @click="dialog = !dialog">
            <v-icon dark> mdi-filters </v-icon>
            {{ !dialog ? "Open filters" : "Close filters" }}
        </v-btn> -->
    <b-table
      :data="data.data"
      :total="data.meta.total"
      :per-page="data.meta.per_page"
      :current-page.sync="data.meta.current_page"
      pagination-position="both"
      default-sort-direction="asd"
      sort-icon="arrow-up"
      sort-icon-size="is-small"
      :loading="loading"
      paginated
      backend-pagination
      @page-change="onPageChange"
      aria-next-label="Next page"
      aria-previous-label="Previous page"
      aria-page-label="Page"
      aria-current-label="Current page"
    >
      <template #top-left>
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
      <b-table-column field="user" label="User" searchable>
        <template #searchable="props">
          <b-input
            v-model="filters.username"
            placeholder="Search..."
            icon="magnify"
            size="is-small"
          />
        </template>
        <template v-slot="props">
          {{ props.row.user }}
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

      <!-- <b-table-column label="Action" v-slot="props">
                <span>
                    <Link
                        :href="`/app/universe_form/${props.row.id}`"
                        as="button"
                    >
                        <v-btn link small icon>
                            <b-tooltip
                                type="is-dark"
                                :label="`Edit - ${props.row.user}`"
                            >
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
            </b-table-column> -->
    </b-table>
  </DefaultLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
import axios from "axios";
import _ from "lodash";
import { page, toasts } from "../../mixins/";
import urls from "../../helpers/urls";
export default {
  mixins: [page, toasts],
  components: {
    DefaultLayout,
    Link,
  },
  props: {
    data: Object,
    filters: Object,
  },
  methods: {
    get: _.debounce(async function (params) {
      try {
        this.loading = true;
        await this.$inertia.get("#", { ...params });
        this.loading = false;
        // this.dialog = false;
      } catch (error) {
        this.loading = false;
        console.log(error);
        this.error("Project Type Get - error");
      }
    }, 1000),
  },
};
</script>
