<script setup>
import ListingPrice from "@/Components/ListingPrice.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import ContentBox from "@/Components/UI/ContentBox.vue";

defineProps({
  listing: Object
});

</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
  layout: MainLayout
}
</script>

<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-3 gap-4">
    <ContentBox class="col-span-2 flex items-center justify-center">
      <div class="text-secondary font-medium">
        <!--      <img src="" alt="">-->
        No images yet...
      </div>
    </ContentBox>
    <div class="col-span-1 flex flex-col gap-4">
      <ContentBox class="">
        <template #header>
          Base Info
        </template>
        <ListingPrice :price="listing.price"/>
        <ListingSpace :listing="listing"/>
        <ListingAddress :listing="listing" class="mb-6"/>
      </ContentBox>
      <ContentBox>
        <template #header>
          Offer
        </template>
        Make offer
      </ContentBox>
    </div>
  </div>
</template>

<style scoped>

</style>
