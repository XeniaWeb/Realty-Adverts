<script setup>
import ListingItem from "@/Components/ListingItem.vue";

defineProps({
    listing: Object
});

</script>

<template>
    <ListingItem :listing="listing"/>
</template>

<style scoped>

</style>
