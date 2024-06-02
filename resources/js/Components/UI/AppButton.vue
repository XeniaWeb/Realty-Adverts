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
  large: {
    type: Boolean,
    default: false
  },
  small: {
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
  },
  icon: {
    type: String,
    required: false,
  }
});

const emit = defineEmits(['click']);

const clickOnButton = () => {
  emit('click');
}
</script>

<template>
  <button
    :class="['btn',
      `btn-${color}`,
      {'btn-rounded': rounded},
      {'btn-large': large},
      {'btn-small': small},
      outlined ? `color-${color} btn-outlined` : '',
      (icon && !label) ? `btn-icon` : '',
      (icon && !label && large) ? `btn-icon-large` : '',
      ]"
    @click="clickOnButton"
  >
    <span class="inline-flex items-center justify-center" v-if="icon">
      <font-awesome-icon :icon="`fa-regular fa-${icon}`"/>
    </span>
    <span class="inline-flex items-center justify-center" v-if="label">
      {{ label }}
    </span>
  </button>
</template>
