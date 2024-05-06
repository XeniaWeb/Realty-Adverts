<script setup>

defineProps({
    listing: Object
});

</script>

<template>
    <div>{{ listing.street }} {{ listing.street_number }}, {{ listing.city }}, {{ listing.code }}</div>
</template>

<style scoped>

</style>
