<template>
  <v-overlay v-if="loading">
    <div class="text-center p-4 text-white font-bold text-xl">Please stand by</div>
    <div class="text-center p-4">
      <v-progress-circular
        :rotate="-90"
        indeterminate
        :size="80"
        :width="5"
        color="green"
      >
        <img :src="require('../assets/emb_logo.png')" class="h-16 object-contain" />
      </v-progress-circular>
    </div>
  </v-overlay>
</template>

<script>
export default {
  props: ["loading"],
};
</script>

<style></style>
