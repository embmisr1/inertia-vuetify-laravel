<template>
  <DefaultLayout :access="access">
    <v-container>
      <b-table
        :data="user_requests.data"
        paginated
        :per-page="user_requests.meta.per_page"
        pagination-size="is-small"
        page-input
        hoverable
        backend-pagination
        :total="user_requests.meta.total"
        :current-page.sync="user_requests.meta.current_page"
        pagination-position="top"
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
        <b-table-column field="purpose" label="Purpose" searchable>
          <template #searchable="props">
            <b-input
              v-model="filters.purpose"
              placeholder="Search..."
              icon="magnify"
              size="is-small"
            />
          </template>
          <template v-slot="props">
            {{ props.row.purpose }}
          </template>
        </b-table-column>

        <b-table-column field="destination" label="Destination" v-slot="props">
          {{ props.row.destination }}
        </b-table-column>

        <b-table-column field="created_at" label="Requested At" v-slot="props">
          {{ props.row.created_at }}
        </b-table-column>

        <b-table-column field="action" label="" sortable v-slot="props" width="3vw">
          <Link :href="`/app/chauffeur/${props.row.id}`" as="button">
            <v-btn link small icon>
              <box-icon name="edit" color="orange" animation="tada-hover"></box-icon>
            </v-btn>
          </Link>
        </b-table-column>
        <template #empty>
          <div class="text-center text-3xl text-gray-500 font-extrabold">
            No Data Found
          </div>
        </template>
      </b-table>
    </v-container>
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import { page, toasts } from "../../mixins/";
import { Link } from "@inertiajs/inertia-vue";
export default {
  name: "RequestVehicle",
  components: { DefaultLayout, Link },
  mixins: [page, toasts],
  props: {
    user_requests: Object,
  },
  data() {
    return {
      arrivalModal: false,
      departureModal: false,
      date: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
        .toISOString()
        .substr(0, 10),

      form: this.$inertia.form({
        name: "",
        purpose: "",
        destination: "",
        name_of_firms: "",
        places: "",
        departure: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10),
        arrival: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10),
        approvedBy: "",
      }),
    };
  },
  methods: {
    get: _.debounce(async function (params) {
      try {
        await this.$inertia.get("/app/chauffeur", { ...params });
      } catch (error) {
        console.log(error);
      }
    }, 1500),
    async submit() {
      try {
        await this.form.post("/app/chauffeur");
        //   await this.submitform(this.form);

        this.$nextTick(() => {
          this.$refs.validation_observer.reset();
        });
      } catch (error) {
        this.success("Failed Successfully");
        console.log(error);
      }
    },
    disableWeekends(date) {
      const day = new Date(date).getDay();
      return day === 1 || day === 2 || day === 3 || day === 4 || day === 5;
    },
  },
};
</script>

<style></style>
