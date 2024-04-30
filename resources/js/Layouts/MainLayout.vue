<script setup>
import {Link, useForm} from "@inertiajs/vue3";
import AppLogoXeniaWeb from "@/Components/AppLogoXeniaWeb.vue";
import {computed, ref} from "vue";

defineProps({});

const timer = ref(0);

setInterval(() => timer.value++, 1000)
</script>

<template>
  <header class="shadow-sm py-1 px-4 mb-6">
    <div class="flex justify-between items-center max-w-6xl m-auto">
      <div class="font-semibold text-xl text-amber-700 p-2 inline-block w-1/6">
        Timer is {{ timer }}
      </div>
      <Link :href="route('listings.index')">Listings</Link>
      <Link :href="route('welcome')">
        <AppLogoXeniaWeb class="h-8"/>
      </Link>
      <Link :href="route('ui.index')" class="heading-4 my-2">UI</Link>

      <Link :href="route('listings.create')"
            class="btn btn-outlined color-primary">
        + New Listing
      </Link>

    </div>
  </header>
  <div class="max-w-6xl m-auto">

    <slot>Default</slot>

  </div>
</template>

<style lang="postcss" scoped>

</style>
