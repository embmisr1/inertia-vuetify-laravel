<template>
    <v-toolbar flat>
        <v-toolbar-title>{{title}}</v-toolbar-title>
        <v-divider class="mx-4" inset vertical></v-divider>
        <v-spacer></v-spacer>
        <slot/>
    </v-toolbar>
</template>

<script>
export default {
  props:{
    title:String
  }
};
</script>

<style></style>
