<script setup>
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue';
import {Link} from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div>
      <Link href="/">
        <AppLogoXeniaWeb color-xenia="#65a30d" class="w-32 h-28"/>
      </Link>
    </div>

    <div
      class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md bg-white border border-gray-300 dark:border-gray-800 dark:bg-gray-950 dark:shadow-gray-800 shadow-gray-300 overflow-hidden sm:rounded-lg"
    >
      <slot/>
    </div>
  </div>
</template>
