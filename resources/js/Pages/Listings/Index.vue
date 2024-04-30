<script setup>
import {Link} from "@inertiajs/vue3";
import ListingItem from "@/Components/ListingItem.vue";

defineProps({
  listings: Array
});

</script>
<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
  layout: MainLayout
}
</script>

<template>
  <div class="container">
    <div v-for="listing in listings" class="" :key="listing.id">
      <Link :href="route('listings.show', listing)">
        <ListingItem :listing="listing"/>
      </Link>
      <div class="flex gap-4">
        <Link :href="route('listings.edit', listing)" class="btn btn-outlined color-secondary">Edit</Link>
        <!--                <Link :href="route('listings.edit', listing)" class="inline-flex items-center px-4 py-1 bg-white border border-gray-300 rounded-md font-semibold text-gray-700 tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-outline focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Edit</Link>-->
        <Link :href="route('listings.destroy', listing)" method="delete" class="btn btn-danger">Delete</Link>
        <!--                <Link :href="route('listings.destroy', listing)" method="delete" class="inline-flex items-center px-4 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-white hover:bg-red-500 focus:bg-red-800 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition ease-in-out duration-150">Delete</Link>-->
      </div>
    </div>

  </div>
</template>

<style scoped>

</style>
