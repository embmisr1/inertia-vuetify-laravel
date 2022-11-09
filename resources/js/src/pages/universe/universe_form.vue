<template>
  <DefaultLayout :access="access">
    <PageTitle
      :title="`Firm ${form_basic_info.un_firmname}`"
      :route="`${route_back}/universe`"
    />
    <ValidationObserver v-slot="{}" ref="validation_observer">
      <form @submit.prevent="submit_basic_info">
        <MainTab
          :province_list="province_list"
          :municipality_list="municipality_list"
          :barangay_list="barangay_list"
          :psic_group_list="psic_group_list"
          :psic_class_list="psic_class_list"
          :psic_subclass_list="psic_subclass_list"
          :project_type_list="project_type_list"
          :project_subtype_list="project_subtype_list"
          :project_specific_type_list="project_specific_type_list"
          :project_specific_subtype_list="project_specific_subtype_list"
          :form_basic_info="form_basic_info"
          :form_permit_info="form_permit_info"
          :form_monitoring_info="form_monitoring_info"
          :form_legal_info="form_legal_info"
          :form_hazwaste_info="form_hazwaste_info"
          :form_pco_info="form_pco_info"
          :form_complaint_info="form_complaint_info"
          :permit_table="permit_table"
          :monitoring_table="monitoring_table"
          :legal_table="legal_table"
          :hazwaste_table="hazwaste_table"
          :pco_table="pco_table"
          :complaint_table="complaint_table"
          :submit_basic_info="submit_basic_info"
          :ctr_file="ctr_file"
          :laws="laws"
          :access="access"
        ></MainTab>
      </form>
    </ValidationObserver>
    <!--<LoadingScreen :loading="loading" />-->
  </DefaultLayout>
</template>

<script>
import DefaultLayout from "../../layouts/default.vue";
import MainTab from "./tabs/main_tab";
import UniverseInfo from "../../mixins/universe_info";
import { page, toasts } from "../../mixins/";
import { Link } from "@inertiajs/inertia-vue";
import PageTitle from "../../components/PageTitle.vue";
// import LoadingScreen from "../../components/LoadingScreen.vue";
export default {
  mixins: [page, toasts, UniverseInfo],
  components: {
    DefaultLayout,
    Link,
    MainTab,
    PageTitle,
    // LoadingScreen,
  },
  props: {
    query: Object,
    permit_table: Array,
    monitoring_table: Array,
    legal_table: Array,
    hazwaste_table: Array,
    pco_table: Array,
    complaint_table: Array,
    ctr_file: Object,

    province_list: Array,
    municipality_list: Array,
    barangay_list: Array,
    psic_group_list: Array,
    psic_class_list: Array,
    psic_subclass_list: Array,
    project_type_list: Array,
    project_subtype_list: Array,
    project_specific_type_list: Array,
    project_specific_subtype_list: Array,
  },
  data: () => ({}),
};
</script>
