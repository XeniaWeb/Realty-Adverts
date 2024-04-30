<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
  <header class="bg-white shadow-sm fixed top-0 left-0 w-full z-10">
    <div class="flex justify-between mx-auto py-4 px-4 sm:px-6 lg:px-8">
      <Link :href="route('ui.index')" class="heading-4 my-2">UI Components (Vue 3 Composition API)</Link>
      <Link :href="route('listings.index')" class="m-2">Listings</Link>
    </div>
  </header>
</template>

<style scoped>

</style>
