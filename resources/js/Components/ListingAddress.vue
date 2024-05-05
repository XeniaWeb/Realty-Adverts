<script setup>

defineProps({
    listing: Object
});

</script>

<template>
    <div>{{ listing.street }} {{ listing.street_number }}, {{ listing.city }},
        {{ listing.beds }} beds and {{ listing.baths }} baths for ${{ listing.price }}</div>
</template>

<style scoped>

</style>
