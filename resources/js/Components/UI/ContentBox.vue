<script setup>
defineProps({});

</script>

<template>
  <div class="p-4 border border-gray-300 dark:border-gray-800 shadow-sm dark:shadow-gray-800 shadow-gray-300 rounded-md">
    <div v-if="$slots.header" class="text-gray-400 font-bold border-b border-b-gray-300 dark:border-b-gray-800 mb-4">
      <slot name="header" />
    </div>
    <slot />
  </div>
</template>

<style scoped>

</style>
