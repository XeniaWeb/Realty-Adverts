<script setup>
import AppButton from "@/Components/UI/AppButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps({});

const eventForButton = () => {
  alert('You clicked on button!')
}
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
      <AppButton class="m-2" label="Primary"/>
      <AppButton class="m-2" label="Secondary" color="secondary"/>
      <AppButton class="m-2" label="Danger" color="danger"/>
      <AppButton class="m-2" label="Success" color="success"/>
      <AppButton class="m-2" label="Warning" color="warning"/>
      <AppButton class="m-2" label="Info" color="info"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Rounded</h2>
      <AppButton class="m-2" label="Primary" :rounded="true"/>
      <AppButton class="m-2" label="Secondary" color="secondary" :rounded="true"/>
      <AppButton class="m-2" label="Danger" color="danger" :rounded="true"/>
      <AppButton class="m-2" label="Success" color="success" :rounded="true"/>
      <AppButton class="m-2" label="Warning" color="warning" :rounded="true"/>
      <AppButton class="m-2" label="Info" color="info" :rounded="true"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Outlined</h2>
      <AppButton class="m-2" label="Primary" :outlined="true"/>
      <AppButton class="m-2" label="Secondary" color="secondary" :outlined="true"/>
      <AppButton class="m-2" label="Danger" color="danger" :outlined="true"/>
      <AppButton class="m-2" label="Success" color="success" :outlined="true"/>
      <AppButton class="m-2" label="Warning" color="warning" :outlined="true"/>
      <AppButton class="m-2" label="Info" color="info" :outlined="true"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Components</h2>
      <DangerButton label="DangerButton"/>
      <PrimaryButton label="PrimaryButton"/>
      <SecondaryButton label="SecondaryButton"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Large & Small</h2>
      <AppButton label="Large" large="true"/>
      <AppButton label="Normal"/>
      <AppButton label="Small" small="true"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Icons</h2>
      <AppButton class="m-2" color="primary" icon="heart"/>
      <AppButton class="m-2" label="Credit Card" color="secondary" :outlined="true" icon="credit-card"></AppButton>
      <AppButton class="m-2" color="danger" :outlined="true" icon="hand"/>
      <AppButton class="m-2" label="Address" color="success" icon="address-book"/>
      <AppButton class="m-2" color="warning" :outlined="true" icon="lemon"/>
      <AppButton class="m-2" color="info" icon="hourglass"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Icons Large</h2>
      <AppButton class="m-2" label="Credit Card" color="secondary" :large="true" :outlined="true" icon="credit-card"/>
      <AppButton class="m-2" color="danger" :outlined="true" icon="hand" :large="true"/>
      <AppButton class="m-2" color="info" icon="hourglass" :large="true"/>
    </div>
    <div class="mb-4">
      <h2 class="heading-3 font-light mb-2">Event</h2>
      <AppButton class="m-2" label="@click" color="danger" @click="eventForButton"/>
    </div>
  </div>
</template>

<style scoped>

</style>
