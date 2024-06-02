<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({});

</script>

<template>
  <div class="pt-8 sm:pt-4">
    <Link :href="route('ui.buttons')" class="link-item">Buttons</Link>
    <Link :href="route('ui.headings')" class="link-item">Headings</Link>
    <Link :href="route('ui.tabs')" class="link-item">Tabs</Link>
  </div>
</template>

<style lang="postcss" scoped>
.link-item {
  @apply focus:outline-none focus:ring-1 focus:ring-primary block text-lg text-primary hover:text-primary-active py-4 px-5 sm:px-6 lg:px-8 hover:bg-secondary-hover/10 active:text-primary-active transition ease-in-out duration-150
}
</style>
