<script setup>
import LocalPrice from "@/Components/LocalPrice.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import ContentBox from "@/Components/UI/ContentBox.vue";
import InputLabel from "@/Components/UI/InputLabel.vue";
import RangeInput from "@/Components/UI/RangeInput.vue";
import {ref} from "vue";
import {useMonthlyPayment} from "@/Composables/useMonthlyPayment.js";

const interestRate = ref(2.5);
const duration = ref(25);

const props = defineProps({
  listing: Object
});

const {monthlyPayment} = useMonthlyPayment(props.listing.price, interestRate, duration)
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
  layout: MainLayout
}
</script>

<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-3 gap-4">
    <ContentBox class="col-span-2 flex items-center justify-center">
      <div class="text-secondary font-medium">
        <!--      <img src="" alt="">-->
        No images yet...
      </div>
    </ContentBox>
    <div class="col-span-1 flex flex-col gap-4">
      <ContentBox class="">
        <template #header>
          Base Info
        </template>
        <LocalPrice :price="listing.price"/>
        <ListingSpace :listing="listing"/>
        <ListingAddress :listing="listing" class="mb-6"/>
      </ContentBox>
      <ContentBox>
        <template #header>
          Monthly payment
        </template>
        <div class="">
          <div class="">
            <InputLabel for="interestRate">
              Interest Rate ({{ interestRate }}%)
            </InputLabel>
            <RangeInput
              id="interestRate"
              v-model.number="interestRate"
              max="30"
              step="0.1"
            />
          </div>
          <div class="">
            <InputLabel for="duration">
              Duration ({{ duration }} years)
            </InputLabel>
            <RangeInput
              id="duration"
              v-model.number="duration"
              max="35"
            />
          </div>
          <div class="text-gray-600 dark:text-gray-300 mt-1">
            <div class="text-gray-400">Your monthly payment</div>
            <LocalPrice :price="monthlyPayment"/>
          </div>
        </div>
      </ContentBox>
    </div>
  </div>
</template>

<style scoped>

</style>
