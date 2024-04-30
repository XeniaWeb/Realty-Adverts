<script setup>
defineProps({});

</script>
<script>
import UiLayout from "@/Layouts/UiLayout.vue";

export default {
  layout: UiLayout
}
</script>
<template>
  <div class="bg-white dark:bg-stone-800">
    <h1 class="heading-2 border-b py-4 mb-6">Typography: Headings</h1>
    <h2 class="heading-1">Heading h1</h2>
    <h2 class="heading-2">Heading h2</h2>
    <h2 class="heading-3">Heading h3</h2>
    <h2 class="heading-4">Heading h4</h2>
    <h2 class="heading-5">Heading h5</h2>
    <h2 class="heading-6">Heading h6</h2>
    <div class="">Some regular text...</div>
  </div>
</template>

<style lang="postcss">

</style>
