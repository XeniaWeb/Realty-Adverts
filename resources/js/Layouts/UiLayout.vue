<script setup>
import AppSideBar from "@/Components/UI/AppSideBar.vue";
import AppHeader from "@/Components/UI/AppHeader.vue";
import UiMenu from "@/Components/Elemenrs/UiMenu.vue";
import {ref} from "vue";
import {ArrowsRightLeftIcon} from "@heroicons/vue/24/solid/index.js";

const props = defineProps({
  openSidebar: Boolean,
  required: true,
  default: true
})

const isSideBar = ref(true);

const menuToggle = () => {
  isSideBar.value = !isSideBar.value
}
</script>

<template>
  <div class="min-h-screen">
    <AppHeader class=""/>
    <AppSideBar class="pt-10 relative bg-green-50/50" :class="[(!isSideBar) ? 'side-translate' : '']">
      <div class="fill-white hover:fill-gray-200 flex items-center bg-primary-hover/80 dark:bg-primary-focus/80 w-6 justify-center absolute top-0 bottom-0 left-full cursor-pointer shadow-gray-500"
           @click="menuToggle">
        <ArrowsRightLeftIcon class="fill-inherit"/>
      </div>
      <UiMenu class="side-width"/>
    </AppSideBar>

    <div :class="['main-content-format', (isSideBar) ? 'menu-open' : 'menu-closed']">
      <slot>Default</slot>
    </div>
  </div>
</template>

<style lang="postcss" scoped>
.side-width {
  @apply w-28 sm:w-48 lg:w-56
}

.main-content-format {
  @apply max-w-7xl m-auto pt-20 pb-8 transition-all ease-in-out duration-200
}

.menu-closed {
  @apply pl-8 sm:pl-12 lg:pl-12
}

.menu-open {
  @apply pl-36 sm:pl-60 lg:pl-72
}

.side-translate {
  @apply -translate-x-28 sm:-translate-x-48 lg:-translate-x-56
}
</style>
