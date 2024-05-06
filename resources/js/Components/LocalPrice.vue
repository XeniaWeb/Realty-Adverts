<script setup>
import {computed} from "vue";

const props = defineProps({
  price: {
    type: [Number, String],
  },
  locale: {
    type: String,
    default: 'en-US',
  },
  currency: {
    type: String,
    default: 'USD',
  },

  decimals: {
    type: [Number, String],
    default: 0,
  }
});

const formattedPrice = computed(
  () => Number(props.price).toLocaleString(props.locale, {
    style: 'currency',
    currency: props.currency,
    maximumFractionDigits: Number(props.decimals),
  })
)
</script>

<template>
  <div class="text-xl font-bold">
    {{ formattedPrice }}
  </div>
</template>

<style scoped>

</style>
