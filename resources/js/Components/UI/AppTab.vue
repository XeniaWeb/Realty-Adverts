<script setup>
const props = defineProps({
  names: {
    type: Array,
    required: true
  },
  selectedTab: {
    type: String,
    required: false
  }
});

const emit = defineEmits(['changeTab', 'changeTabVertical'])

const clickOnTab = (tabName) => {
  emit('changeTab', tabName)
}
</script>

<template>
  <div>
    <div class="tab-nav">
      <div v-for="tab in names"
           :key="tab.name"
           :class="[{'tab-selected-item' : tab.name === selectedTab}]"
           class="tab-item inline-flex mb-6"
           @click="clickOnTab(tab.name)"
      >
        {{ tab.label }}
      </div>
    </div>
    <div class="tab-content col-span-8">
      <slot/>
    </div>
  </div>

</template>

<style lang="postcss" scoped>
.tab-nav {
  @apply flex items-center mb-4 gap-x-2
}

.tab-item {
  @apply min-h-10 font-semibold flex items-center border-2 border-primary hover:border-primary-hover px-6 py-2 rounded-t-xl border-b-transparent hover:border-b-transparent cursor-pointer hover:bg-primary-hover hover:text-white dark:hover:bg-primary-focus focus:outline-none focus:ring-1 focus:ring-offset-2 transition ease-in-out duration-150 disabled:opacity-25 focus:ring-outline
}

.tab-selected-item {
  @apply bg-primary/90 border-primary/90 border-b-transparent text-white
}
</style>
