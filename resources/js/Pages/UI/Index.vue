<script setup>
import UiMenu from "@/Components/Elemenrs/UiMenu.vue";

defineProps({});

</script>

<script>
import UiLayout from "@/Layouts/UiLayout.vue";

export default {
  layout: UiLayout
}
</script>

<template>
  <h2 class="heading-2 py-4">
    Welcome to My XeniaWeb UI Kit
  </h2>
  <UiMenu class=""/>
</template>

<style scoped>

</style>
