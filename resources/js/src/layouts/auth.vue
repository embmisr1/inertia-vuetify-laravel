<template>
    <!-- App.vue -->

    <v-app>
        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container  class="min-h-screen grid place-content-center">
                <!-- If using vue-router -->
                <slot />
            </v-container>
        </v-main>

        <v-footer app rounded >
          <v-spacer></v-spacer>
          &copy; DENR - EMB REGION 1 - UNISYS
        </v-footer>
    </v-app>
</template>

<script>
export default {};
</script>

<style></style>
