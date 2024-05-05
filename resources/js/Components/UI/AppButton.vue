<script setup>
const props = defineProps({
  label: {
    type: String,
    required: false,
  },
  color: {
    type: String,
    default: 'primary'
  },
  isLarge: {
    type: Boolean,
    default: false
  },
  isSmall: {
    type: Boolean,
    default: false
  },
  rounded: {
    type: Boolean,
    required: false
  },
  outlined: {
    type: Boolean,
    required: false
  }
});
</script>

<template>
  <button
    :class="['btn',
      `btn-${color}`,
      {'btn-rounded': rounded},
      {'btn-large': isLarge},
      {'btn-small': isSmall},
      outlined ? `color-${color} btn-outlined` : ''
      ]">
    {{ label }}
    <slot/>
  </button>
</template>
