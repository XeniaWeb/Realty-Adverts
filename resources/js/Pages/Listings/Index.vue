<script setup>
import {Head, Link} from "@inertiajs/vue3";
import ListingAddress from "@/Components/ListingAddress.vue";
import ContentBox from "@/Components/UI/ContentBox.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import ListingPrice from "@/Components/ListingPrice.vue";

defineProps({
  listings: Object
});

</script>
<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
  layout: MainLayout
}
</script>

<template>
  <Head title="Listings"/>
  <div class="container m-auto">
    <div class="content grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 px-4 md:px-2 ">
      <ContentBox v-for="listing in listings" class="" :key="listing.id">
        <Link :href="route('listings.show', listing)">
          <ListingPrice :price="listing.price"/>
          <ListingSpace :listing="listing"/>
          <ListingAddress :listing="listing" class="mb-6"/>
        </Link>
        <div class="flex gap-4">
          <Link :href="route('listings.edit', listing)" class="btn btn-outlined color-secondary btn-small mb-0">Edit
          </Link>
          <Link
            :href="route('listings.destroy', listing)"
            method="delete"
            class="btn btn-danger btn-small mb-0"
            as="button"
          >Delete
          </Link>
        </div>
      </ContentBox>
    </div>
  </div>
</template>

<style scoped>

</style>
