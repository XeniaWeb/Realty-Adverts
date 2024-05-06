<script setup>
defineProps({
  listing: {
    type: Object
  }
})
</script>

<template>
  <div class="">
    {{ listing.beds }} bds | {{ listing.baths }} ba | {{ listing.area }} m²
  </div>
</template>

<style scoped>

</style>
