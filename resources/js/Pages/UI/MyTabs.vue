<script setup>

import AppTab from "@/Components/UI/AppTab.vue";
import {ref} from "vue";

const tabs = [
  {name: 'About', label: 'About the Project'},
  {name: 'React', label: 'About React'},
  {name: 'Vue', label: 'About Vue.js'},
]

const selectedTab = ref('React')

const tabs2 = [
  {name: 'About2', label: 'About the Project 2'},
  {name: 'React2', label: 'About React 2'},
  {name: 'Vue2', label: 'About Vue.js 2'},
]

const changeTab = (tabName) => {
  selectedTab.value = tabName
}
defineProps({});

</script>

<script>
import UiLayout from "@/Layouts/UiLayout.vue";

export default {
  layout: UiLayout
}
</script>

<template>
  <div class="">
    <h1 class="heading-2 border-b py-4 mb-6">MyTabs</h1>
    <div class="">
      <h2 class="heading-3"> Horizontal control buttons</h2>
      <AppTab
        :names="tabs"
        :selectedTab="selectedTab"
        @changeTab="changeTab">
        <div v-if="selectedTab === 'About'" class="bg-red-300 p-6">
          <img src="" alt="img About" class="bg-red-50 w-72 h-40">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur cumque eum fugit inventore perferendis quidem quisquam saepe tempora ut?
        </div>
        <div v-if="selectedTab === 'React'" class="bg-blue-300 p-6">
          <img src="" alt="img React" class="bg-blue-50 w-72 h-96">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur cumqueipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur cumque eum fugit inventore perferendis quidem quisquam saepe tempora ut?
        </div>
        <div v-if="selectedTab === 'Vue'" class="bg-amber-300 p-6">
          <img src="" alt="img Vue" class="bg-amber-50 w-72 h-40">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eum fugit inventore perferendis quidem quisquam saepe tempora ut?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eum fugit inventore perferendis quidem quisquam saepe tempora ut?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eng elit. Amet aspernatur cumque eum fugit inventore perferendis quidem quisquam saepe tempora ut?
        </div>
      </AppTab>
    </div>
  </div>

</template>

<style scoped>

</style>
