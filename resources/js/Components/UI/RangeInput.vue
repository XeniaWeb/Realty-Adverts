<script setup>
import {onMounted, ref} from 'vue';

const model = defineModel({
  type: String,
  required: true,
});

const attr = defineProps({
  min: {
    type: Number,
    default: 0
  },
  max: {
    type: Number,
    default: 100
  },
  step: {
    type: Number,
    default: 1
  }
})

const input = ref(null);

onMounted(() => {
  if (input.value.hasAttribute('autofocus')) {
    input.value.focus();
  }
});

defineExpose({focus: () => input.value.focus()});
</script>

<template>
  <input type="range"
         :min="attr.min"
         :max="attr.max"
         :step="attr.step"
         :class="[`slider`]"
         v-model="model"
         ref="input"
  />
</template>

<style scoped lang="postcss">
.slider {
  @apply my-1 w-full h-2 accent-primary cursor-pointer appearance-none bg-gray-300 dark:bg-gray-700 rounded-lg focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-primary-hover
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  @apply w-5 h-5 rounded-3xl bg-primary cursor-pointer hover:bg-primary-hover
}

.slider::-moz-range-thumb {
  @apply w-5 h-5 rounded-3xl bg-primary cursor-pointer border-primary
}
</style>
