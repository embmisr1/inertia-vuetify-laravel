<template>
  <div class="box p-0">
    <v-row no-gutters>
      <v-col cols="4">
        <div class="box rounded-r-xl red lighten-2 white--text text-center">
          <h1 class="font-extrabold text-5xl">
            {{ id }}
          </h1>
        </div>
      </v-col>
      <v-col>
        <div class="text-center">
          <p class="m-0 text-xs">Ticket Status:</p>
          <h4 class="uppercase font-black red--text text--lighten-2">
            {{ status }}
          </h4>

          <p class="text-xs m-0">Date Requested:</p>
          <p class="font-semibold text-sm m-0">
            {{ created_at }}
          </p>
        </div>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  name:"VRStatusDeclined",

  props: {
    id: Number,
    status: String,
    created_at: String,
  },
};
</script>

<style></style>
