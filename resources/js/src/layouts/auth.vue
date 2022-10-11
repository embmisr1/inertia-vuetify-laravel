<template>
  <!-- App.vue -->

  <v-app>
    <!-- Sizes your content based upon application components -->
    <v-main>
      <!-- Provides the application the proper gutter -->
      <div class="h-screen bg-gradient-to-t from-lime-400 via-lime-200 to-lime-400">
        <!-- If using vue-router -->
        <slot />
      </div>
    </v-main>

    <!-- <v-footer app rounded class="bg-black">
            <v-spacer></v-spacer>
            &copy; DENR - EMB REGION 1 - UNISYS
        </v-footer> -->
  </v-app>
</template>

<script>
export default {
  metaInfo: {
    // if no subcomponents specify a metaInfo.title, this title will be used
    title: "Unisys",
    // all titles will be injected into this template
    titleTemplate: "%s | EMB - Region 1 - Unisys",
  },
};
</script>

<style></style>
