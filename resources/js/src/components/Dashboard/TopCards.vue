<template>
  <div
    class="cursor-pointer text-center shadow-xl h-20 w-52 uppercase text-lg rounded rounded-b-md border-b border-blue-400"
  >
    <div :class="`${title_bg} text-white rounded-b-lg font-bold  `">{{ title }}</div>
    <div class="p-2 font-black tracking-wide text-xl text-black">
      {{ new Intl.NumberFormat().format(counter) }}
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    counter: Number,
    title_bg: {
      type: String,
      default: "bg-blue-400",
    },
  },
};
</script>

<style></style>
