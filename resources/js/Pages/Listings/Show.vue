<script setup>
import ListingItem from "@/Components/ListingItem.vue";

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
  <ListingItem :listing="listing"/>
</template>

<style scoped>

</style>
