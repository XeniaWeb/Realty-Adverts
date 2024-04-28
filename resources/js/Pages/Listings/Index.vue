<script setup>
import {Link} from "@inertiajs/vue3";
import ListingItem from "@/Components/ListingItem.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps({
    listings: Array
});

</script>

<template>
    <Link :href="route('listings.create')"
    class="btn-secondary m-2 ">
        Add new
    </Link>
    <div class="container">
        <div v-for="listing in listings" class="" :key="listing.id">
            <Link :href="route('listings.show', listing)">
                <ListingItem :listing="listing" />
            </Link>
        </div>
    </div>
</template>

<style scoped>

</style>
