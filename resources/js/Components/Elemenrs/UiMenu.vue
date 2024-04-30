<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({});

</script>

<template>
  <div class="">
    <Link :href="route('ui.buttons')" class="link-item">Buttons</Link>
    <Link :href="route('ui.headings')" class="link-item">Headings</Link>
  </div>
</template>

<style lang="postcss" scoped>
.link-item {
  @apply focus:outline-none focus:ring-1 focus:ring-primary block text-lg text-primary hover:text-primary-active py-4 px-5 sm:px-6 lg:px-8 hover:bg-secondary-hover/10 active:text-primary-active transition ease-in-out duration-150
}
</style>
