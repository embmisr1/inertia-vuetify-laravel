<template>
  <DefaultLayout :access="access">
    <div class="my-2 p-2 flex space-x-2 overflow-auto">
      <Link href="#">
        <TopCards
          v-if="query_registered_industries_lgu_only"
          title="Total LGU"
          :counter="query_registered_industries_lgu_only"
        />
      </Link>
      <Link
        :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=&searchStatus=&searchType=firm&search1586=&search8749=&search9275=&search6969=&search9003=`"
      >
        <TopCards title="Registered Firms" :counter="query_registered_industries" />
      </Link>
      <Link
        :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=firm&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=`"
      >
        <TopCards title="With 6969" :counter="query_permit_6969" />
      </Link>
      <Link
        :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=firm&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=`"
      >
        <TopCards title="With 1586" :counter="query_permit_1586" />
      </Link>
      <Link
        as="button"
        :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=ORDER&searchStatus=&searchType=firm&search1586=&search8749=&search9275=&search6969=&search9003=`"
      >
        <TopCards title="With Order" :counter="query_order_issued" />
      </Link>
      <Link
        :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PCO&searchStatus=&searchType=firm&search1586=&search8749=&search9275=&search6969=&search9003=`"
      >
        <TopCards title="With PCO" :counter="query_pco_all" />
      </Link>
      <Link
        :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=COMPLAINT&searchStatus=&searchType=firm&search1586=&search8749=&search9275=&search6969=&search9003=`"
      >
        <TopCards title="Complaints" :counter="query_complaint" />
      </Link>
    </div>
    <div class="border-t border-black w-full my-2"></div>

    <div class="">
      <div class="grid grid-cols-2 gap-x-2 gap-y-4 overflow-auto">
        <div class="w-full border-4 p-2 shadow-xl rounded">
          <Chart type="bar" :data="with_9275" :options="horizontalOptions" />
          <div class="group-hover:hidden flex justify-between">
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=`"
                target="_blank"
              >
                <v-btn small color="#60A5FA" text
                  >Total: <br />{{
                    new Intl.NumberFormat().format(query_permit_9275)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=&searchValidity=VALID`"
                target="_blank"
              >
                <v-btn small color="#0B9700" text
                  >Valid: <br />{{
                    new Intl.NumberFormat().format(query_permit_9275_valid)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=&searchValidity=EXPIRED`"
                target="_blank"
              >
                <v-btn small color="#D62728" text
                  >Expired:<br />
                  {{ new Intl.NumberFormat().format(query_permit_9275_expired) }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=&searchValidity=UNDEFINED`"
                target="_blank"
              >
                <v-btn small color="#7E7E7E" text
                  >Undefined: <br />{{
                    new Intl.NumberFormat().format(query_permit_9275_undefined)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
          </div>
        </div>
        <div class="w-full border-4 p-2 shadow-xl rounded">
          <Chart type="bar" :data="with_8749" :options="horizontalOptions" />
          <div class="flex justify-between">
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=`"
              >
                <v-btn small color="#60A5FA" text
                  >Total: <br />{{
                    new Intl.NumberFormat().format(query_permit_8749)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%208749&search6969=&search9003=&searchValidity=VALID`"
              >
                <v-btn small color="#0B9700" text
                  >Valid: <br />{{
                    new Intl.NumberFormat().format(query_permit_8749_valid)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%208749&search6969=&search9003=&searchValidity=EXPIRED`"
              >
                <v-btn small color="#D62728" text
                  >Expired:<br />
                  {{ new Intl.NumberFormat().format(query_permit_8749_expired) }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%208749&search6969=&search9003=&searchValidity=UNDEFINED`"
              >
                <v-btn small color="#7E7E7E" text
                  >Undefined: <br />{{
                    new Intl.NumberFormat().format(query_permit_8749_undefined)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
          </div>
        </div>
        <div class="w-full border-4 p-2 shadow-xl rounded">
          <Chart type="bar" :data="with_nov" :options="horizontalOptions" />
          <div class="flex justify-between">
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=${firm_type}&search1586=PD%201586&search8749=RA%208749&search9275=RA%209275&search6969=RA%206969&search9003=RA%209003`"
              >
                <v-btn small color="#0E1111" text
                  >Total: <br />{{ new Intl.NumberFormat().format(query_nov_all) }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=${firm_type}&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >PD 1586: <br />{{
                    new Intl.NumberFormat().format(query_nov_1586)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=${firm_type}&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >RA 8749:<br />
                  {{ new Intl.NumberFormat().format(query_nov_8749) }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >RA 9275: <br />{{
                    new Intl.NumberFormat().format(query_nov_9275)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >RA 6969:<br />
                  {{ new Intl.NumberFormat().format(query_nov_6969) }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=&search6969=&search9003=RA%209003`"
              >
                <v-btn small color="#0E1111" text
                  >RA 9003: <br />{{
                    new Intl.NumberFormat().format(query_nov_9003)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
          </div>
        </div>
        <div class="w-full border-4 p-2 shadow-xl rounded">
          <Chart type="bar" :data="monitoring" :options="horizontalOptions" />
          <div class="flex justify-between">
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=${firm_type}&search1586=PD%201586&search8749=RA%208749&search9275=RA%209275&search6969=RA%206969&search9003=RA%209003`"
              >
                <v-btn small color="#0E1111" text
                  >Total: <br />{{
                    new Intl.NumberFormat().format(query_monitoring_all)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=${firm_type}&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >PD 1586: <br />{{
                    new Intl.NumberFormat().format(query_monitoring_1586)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=${firm_type}&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >RA 8749:<br />
                  {{ new Intl.NumberFormat().format(query_monitoring_8749) }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >RA 9275: <br />{{
                    new Intl.NumberFormat().format(query_monitoring_9275)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>

            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=`"
              >
                <v-btn small color="#0E1111" text
                  >RA 6969:<br />
                  {{ new Intl.NumberFormat().format(query_monitoring_6969) }}</v-btn
                >
              </Link>
            </b-tooltip>
            <b-tooltip label="Detailed View" type="is-dark">
              <Link
                :href="`/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=${firm_type}&search1586=&search8749=&search9275=&search6969=&search9003=RA%209003`"
              >
                <v-btn small color="#0E1111" text
                  >RA 9003: <br />{{
                    new Intl.NumberFormat().format(query_monitoring_9003)
                  }}</v-btn
                >
              </Link>
            </b-tooltip>
          </div>
        </div>
        <div class="w-full border-4 p-2 shadow-xl rounded">
          <Chart type="bar" :data="with_order" :options="horizontalOptions" />
          <div class="flex justify-between">
            <v-btn small color="#0E1111" text
              >Total: <br />{{
                new Intl.NumberFormat().format(query_order_issued)
              }}</v-btn
            >
            <v-btn small color="#0E1111" text
              >PD 1586: <br />{{
                new Intl.NumberFormat().format(query_order_issued_1586)
              }}</v-btn
            >

            <v-btn small color="#0E1111" text
              >RA 8749:<br />
              {{ new Intl.NumberFormat().format(query_order_issued_8749) }}</v-btn
            >

            <v-btn small color="#0E1111" text
              >RA 9275: <br />{{
                new Intl.NumberFormat().format(query_order_issued_9275)
              }}</v-btn
            >

            <v-btn small color="#0E1111" text
              >RA 6969:<br />
              {{ new Intl.NumberFormat().format(query_order_issued_6969) }}</v-btn
            >

            <v-btn small color="#0E1111" text
              >RA 9003: <br />{{
                new Intl.NumberFormat().format(query_order_issued_9003)
              }}</v-btn
            >
          </div>
        </div>
      </div>
    </div>

    <div class="border-t border-black w-full my-2"></div>

    <!-- <div class="grid grid-cols-9">
      <div class="col-span-7">
        <div class="grid grid-cols-2 gap-x-2 gap-y-4 overflow-auto">
          <div class="w-96 border-4 p-2 shadow-xl rounded">
            <Chart type="bar" :data="with_9275" :options="horizontalOptions" />
          </div>
          <div class="w-96 border-4 p-2 shadow-xl rounded">
            <Chart type="bar" :data="with_8749" :options="horizontalOptions" />
          </div>
          <div class="w-96 border-4 p-2 shadow-xl rounded">
            <Chart type="bar" :data="with_nov" :options="horizontalOptions" />
          </div>
          <div class="w-96 border-4 p-2 shadow-xl rounded">
            <Chart type="bar" :data="monitoring" :options="horizontalOptions" />
          </div>
        </div>
      </div>
      <div class="space-y-4">
        <div class="h-96 space-y-4 overflow-auto w-56">
          <RightCards
            title="with 9275"
            :total="query_permit_9275"
            :type_1="{
              valid: query_permit_9275_valid,
              expired: query_permit_9275_expired,
              undef: query_permit_9275_undefined,
            }"
            card_type="cat_1"
          />
          <RightCards
            title="with 8749"
            :total="query_permit_8749"
            :type_1="{
              valid: query_permit_8749_valid,
              expired: query_permit_8749_expired,
              undef: query_permit_8749_undefined,
            }"
            card_type="cat_1"
          />
          <RightCards
            title="with NOV"
            :total="query_nov_all"
            :type_2="{
              PD1586: query_nov_1586,
              RA8749: query_nov_8749,
              RA9275: query_nov_9275,
              RA6969: query_nov_6969,
              RA9003: query_nov_9003,
            }"
            card_type="cat_2"
          />
          <RightCards
            title="Monitoring"
            :total="query_monitoring_all"
            :type_2="{
              PD1586: query_monitoring_1586,
              RA8749: query_monitoring_8749,
              RA9275: query_monitoring_9275,
              RA6969: query_monitoring_6969,
              RA9003: query_monitoring_9003,
            }"
            card_type="cat_2"
          />
        </div>
      </div>
    </div> -->
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import UniverseDashboard from "../../mixins/universe_dashboard";
import MainDashboard from "./dashboard_cards/main_dashboard_card";
import { Link } from "@inertiajs/inertia-vue";
import { page } from "../../mixins/";
import TopCards from "../../components/Dashboard/TopCards.vue";
import RightCards from "../../components/Dashboard/RightCards.vue";
export default {
  mixins: [UniverseDashboard, page],

  components: {
    DefaultLayout,
    Link,
    MainDashboard,
    TopCards,
    RightCards,
  },
  props: {
    firm_type: String,
    query_registered_industries: Number,
    query_all_firm: Number,
    query_permit_1586: Number,
    query_permit_8749: Number,
    query_permit_9275: Number,
    query_permit_6969: Number,
    query_permit_8749_valid: Number,
    query_permit_9275_valid: Number,
    query_permit_8749_expired: Number,
    query_permit_9275_expired: Number,
    query_permit_8749_undefined: Number,
    query_permit_9275_undefined: Number,
    query_pco_all: Number,
    query_nov_all: Number,
    query_nov_1586: Number,
    query_nov_8749: Number,
    query_nov_9275: Number,
    query_nov_6969: Number,
    query_nov_9003: Number,
    query_order_issued: Number,
    query_monitoring_all: Number,
    query_monitoring_1586: Number,
    query_monitoring_8749: Number,
    query_monitoring_9275: Number,
    query_monitoring_6969: Number,
    query_monitoring_9003: Number,
    query_complaint: Number,
    query_order_issued: Number,
    query_order_issued_1586: Number,
    query_order_issued_8749: Number,
    query_order_issued_9275: Number,
    query_order_issued_6969: Number,
    query_order_issued_9003: Number,
    query_registered_industries_lgu_only: Number,
  },
  data() {
    return {
      with_9275: {
        labels: ["Total", "Valid", "Expired", "Undefined"],
        datasets: [
          {
            label: "With 9275",
            // backgroundColor: "#60A5FA",
            data: [
              this.query_permit_9275,
              this.query_permit_9275_valid,
              this.query_permit_9275_expired,
              this.query_permit_9275_undefined,
            ],
            backgroundColor: ["#60A5FA", "#0B9700", "#D62728", "#7E7E7E"],
          },
        ],
      },

      with_8749: {
        labels: ["Total", "Valid", "Expired", "Undefined"],
        datasets: [
          {
            label: "With 8749",
            // backgroundColor: "#60A5FA",
            backgroundColor: ["#60A5FA", "#0B9700", "#D62728", "#7E7E7E"],
            data: [
              this.query_permit_8749,
              this.query_permit_8749_valid,
              this.query_permit_8749_expired,
              this.query_permit_8749_undefined,
            ],
          },
        ],
      },
      with_nov: {
        labels: ["Total", "PD 1586", "RA 8749", "RA 9275", "RA 6969", "RA 9003"],
        datasets: [
          {
            label: "With NOV",
            backgroundColor: "#60A5FA",
            data: [
              this.query_nov_all,
              this.query_nov_1586,
              this.query_nov_8749,
              this.query_nov_9275,
              this.query_nov_6969,
              this.query_nov_9003,
            ],
          },
        ],
      },
      with_order: {
        labels: ["Total", "PD 1586", "RA 8749", "RA 9275", "RA 6969", "RA 9003"],
        datasets: [
          {
            label: "With Order",
            backgroundColor: "#60A5FA",
            data: [
              this.query_order_issued,
              this.query_order_issued_1586,
              this.query_order_issued_8749,
              this.query_order_issued_9275,
              this.query_order_issued_6969,
              this.query_order_issued_9003,
            ],
          },
        ],
      },

      monitoring: {
        labels: ["Total", "PD 1586", "RA 8749", "RA 9275", " RA 6969", "RA 9003"],

        datasets: [
          {
            label: "Monitoring",
            backgroundColor: "#60A5FA",
            data: [
              this.query_monitoring_all,
              this.query_monitoring_1586,
              this.query_monitoring_8749,
              this.query_monitoring_9275,
              this.query_monitoring_6969,
              this.query_monitoring_9003,
            ],
          },
        ],
      },
      horizontalOptions: {
        indexAxis: "y",
        plugins: {
          legend: {
            labels: {
              color: "#495057",
            },
          },
          datalabels: {
            listeners: {
              enter: function (context, event) {
                // Receives `enter` events for any labels of any dataset. Indices of the
                // clicked label are: `context.datasetIndex` and `context.dataIndex`.
                // For example, we can modify keep track of the hovered state and
                // return `true` to update the label and re-render the chart.
                context.hovered = true;
                return true;
              },
              leave: function (context, event) {
                // Receives `leave` events for any labels of any dataset.
                context.hovered = false;
                return true;
              },
            },
            color: function (context) {
              // Change the label text color based on our new `hovered` context value.
              return context.hovered ? "blue" : "gray";
            },
          },
        },
        scales: {
          x: {
            ticks: {
              color: "#495057",
            },
            grid: {
              color: "#ebedef",
            },
          },
          y: {
            ticks: {
              color: "#495057",
            },
            grid: {
              color: "#ebedef",
            },
          },
        },
      },
    };
  },
};
</script>
