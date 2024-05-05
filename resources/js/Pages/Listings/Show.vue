<script setup>
import ListingItem from "@/Components/ListingAddress.vue";
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
  listing: Object
});

</script>

<!--<script>-->
<!--import MainLayout from "@/Layouts/MainLayout.vue";-->

<!--export default {-->
<!--  layout: MainLayout-->
<!--}-->
<!--</script>-->

<template>
  <MainLayout>
    <ListingItem :listing="listing"/>
  </MainLayout>
</template>

<style scoped>

</style>
