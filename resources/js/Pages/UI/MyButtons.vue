<script setup>
import AppButton from "@/Components/UI/AppButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

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
    <h1 class="heading-2 border-b py-4 mb-6">Buttons</h1>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Disabled</h2>
      <AppButton class="m-2" label="Primary" disabled></AppButton>
      <AppButton class="m-2" label="Success" color="success" disabled></AppButton>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Colors</h2>
      <AppButton class="m-2" label="Primary"></AppButton>
      <AppButton class="m-2" color="secondary">Secondary</AppButton>
      <AppButton class="m-2" label="Danger" color="danger"></AppButton>
      <AppButton class="m-2" label="Success" color="success"></AppButton>
      <AppButton class="m-2" label="Warning" color="warning"></AppButton>
      <AppButton class="m-2" label="Info" color="info"></AppButton>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Rounded</h2>
      <AppButton class="m-2" label="Primary" :rounded="true"/>
      <AppButton class="m-2" color="secondary" :rounded="true">Secondary</AppButton>
      <AppButton class="m-2" label="Danger" color="danger" :rounded="true"/>
      <AppButton class="m-2" label="Success" color="success" :rounded="true"/>
      <AppButton class="m-2" label="Warning" color="warning" :rounded="true"/>
      <AppButton class="m-2" label="Info" color="info" :rounded="true"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Outlined</h2>
      <AppButton class="m-2" label="Primary" :outlined="true"/>
      <AppButton class="m-2" color="secondary" :outlined="true">Secondary</AppButton>
      <AppButton class="m-2" label="Danger" color="danger" :outlined="true"/>
      <AppButton class="m-2" label="Success" color="success" :outlined="true"/>
      <AppButton class="m-2" label="Warning" color="warning" :outlined="true"/>
      <AppButton class="m-2" label="Info" color="info" :outlined="true"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Components</h2>
      <DangerButton label="DangerButton" />
      <PrimaryButton label="PrimaryButton" />
      <SecondaryButton label="SecondaryButton" />
    </div>
  </div>
</template>

<style scoped>

</style>
