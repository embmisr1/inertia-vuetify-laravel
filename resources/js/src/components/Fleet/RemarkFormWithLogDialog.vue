<template>
  <Dialog
    :visible.sync="active"
    :maximizable="true"
    :modal="true"
    :closable="false"
    :closeOnEscape="false"
    class="w-[90vw] lg:w-[50vw]"
  >
    <template #header>
      <header class="font-bold">Request Vehicle Summary</header>
    </template>
    <div class="" v-for="log in historyLogs" :key="log.id">
      <div class="card my-2">
        <small class="card-header p-0 m-0">
          <p class="card-header-title">{{ log.user }}</p>
          <small class="pr-4 pt-2">{{ log.created_at }}</small>
        </small>
        <div class="card-content">
          <div class="content">
            {{ log.remarks }}
          </div>
        </div>
      </div>
    </div>
    <template #footer>
      <v-btn
        color="green lighten--2 white--text"
        small
        dense
        depressed
        @click="closeDialog"
        >Okay</v-btn
      >
    </template>
  </Dialog>
</template>

<script>
import Dialog from "primevue/dialog";
export default {
  name: "RemarkFormWithLogDialog",
  components: { Dialog },
  props: {
    active: Boolean,
    historyLogs: Array,
    closeDialog: Function,
  },
  data() {
    return {
      fields: "",
    };
  },
};
</script>

<style></style>
