<template>
  <div>
  <v-card>
    <v-toolbar
      color="#1976D2"
      dark
      flat
    >
      <v-btn icon>
        <v-icon>mdi-arrow-left</v-icon>
      </v-btn>

      <v-toolbar-title>Firm Information</v-toolbar-title>

      <v-spacer></v-spacer>

      <template v-slot:extension>
        <v-tabs
          v-model="tab"
          align-with-title
        >
          <v-tabs-slider color="yellow"></v-tabs-slider>

          <v-tab>
            Basic Information
          </v-tab>
          <v-tab>
            Permits
          </v-tab>
          <v-tab>
            Monitoring
          </v-tab>
          <v-tab>
            Legal
          </v-tab>
          <v-tab>
            Location
          </v-tab>
        </v-tabs>
      </template>
    </v-toolbar>

    <v-tabs-items v-model="tab">
      <v-tab-item>
        <v-card flat>
          123123
        </v-card>
      </v-tab-item>
      <v-tab-item>
        <v-card flat>
          qqq
        </v-card>
      </v-tab-item>
    </v-tabs-items>
  </v-card>
    <!--<BasicTab :form_basic_info="form_basic_info" :submit_basic_info="submit_basic_info"></BasicTab>-->
  </div>
</template>
<script>
  import BasicTab from "./basic_tab";
  export default {
    props:{
      form_basic_info: Object,
      submit_basic_info: Function,
    },
    components:{
        BasicTab,
    },
    data () {
      return {
        tab: null,
        items: [
          'Basic Information', 'Permits', 'Monitoring', 'Legal', 'Location',
        ],
      }
    },
  }
</script>