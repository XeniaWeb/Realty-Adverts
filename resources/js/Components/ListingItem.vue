<script setup>

defineProps({
    listing: Object
});

</script>

<template>
    <span>{{ listing.street }} {{ listing.street_number }}, {{ listing.city }},
        {{ listing.beds }} beds and {{ listing.baths }} baths for ${{ listing.price }}</span>
</template>

<style scoped>

</style>
