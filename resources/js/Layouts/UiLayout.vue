<script setup>
import AppSideBar from "@/Components/UI/AppSideBar.vue";
import AppHeader from "@/Components/UI/AppHeader.vue";
import UiMenu from "@/Components/Elemenrs/UiMenu.vue";

defineProps({});

</script>

<template>
  <div class="min-h-screen">
    <AppHeader class="bg-white"/>
    <AppSideBar class=" pt-10">
      <UiMenu class=""/>
    </AppSideBar>

    <div class="max-w-7xl m-auto  pl-32 sm:pl-60 pt-20 pb-8">
      <slot>Default</slot>
    </div>
  </div>
</template>

<style scoped>

</style>
