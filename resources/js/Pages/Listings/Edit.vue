<script setup>
import {Link, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Components/UI/InputLabel.vue";
import TextInput from "@/Components/UI/TextInput.vue";
import InputError from "@/Components/UI/InputError.vue";
import AppButton from "@/Components/UI/AppButton.vue";

const props = defineProps({
  listing: Object
})
const form = useForm({
  'beds': props.listing.beds,
  'baths': props.listing.baths,
  'area': props.listing.area,
  'city': props.listing.city,
  'code': props.listing.code,
  'street': props.listing.street,
  'street_number': props.listing.street_number,
  'price': props.listing.price
});

const update = (listing) => {
  // form.put(route('listings.update', form))
  form.put(route('listings.update', {listing: props.listing}))
}
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
  layout: MainLayout
}
</script>

<template>
  <div class="container m-auto">
    <div class="w-full m-auto">
      <h1 class="text-lg py-4 font-semibold">Edit Advert #{{ listing.id }}</h1>
      <form @submit.prevent="update">
        <div class="grid grid-cols-6 gap-4">
          <div class="pb-2 col-span-2">
            <InputLabel for='beds' value="Count of beds"/>
            <TextInput
              id="beds"
              type="number"
              min="0"
              class="mt-1 block w-full"
              v-model.number="form.beds"
              required
              autofocus
            />
            <InputError class="mt-2" :message="form.errors.beds"/>
          </div>
          <div class="pb-2 col-span-2">
            <InputLabel for='baths' value="Count of baths"/>
            <TextInput
              id="baths"
              type="number"
              min="0"
              class="mt-1 block w-full"
              v-model.number="form.baths"
              required
            />
            <InputError class="mt-2" :message="form.errors.baths"/>
          </div>
          <div class="pb-2 col-span-2">
            <InputLabel for='area' value="Area (sq.m)"/>
            <TextInput
              id="area"
              type="number"
              min="0"
              max="10000"
              class="mt-1 block w-full"
              v-model.number="form.area"
              required
            />
            <InputError class="mt-2" :message="form.errors.area"/>
          </div>
          <div class="pb-2 col-span-4">
            <InputLabel for='city' value="City"/>
            <TextInput
              id="city"
              type="text"
              class="mt-1 block w-full"
              v-model="form.city"
              required
            />
            <InputError class="mt-2" :message="form.errors.city"/>
          </div>
          <div class="pb-2 col-span-2">
            <InputLabel for='code' value="Zip code"/>
            <TextInput
              id="code"
              type="text"
              class="mt-1 block w-full"
              v-model="form.code"
              required
            />
            <InputError class="mt-2" :message="form.errors.code"/>
          </div>
          <div class="pb-2 col-span-4">
            <InputLabel for='street' value="Street"/>
            <TextInput
              id="street"
              type="text"
              class="mt-1 block w-full"
              v-model="form.street"
              required
            />
            <InputError class="mt-2" :message="form.errors.street"/>
          </div>
          <div class="pb-2 col-span-2">
            <InputLabel for='street_number' value="Street number"/>
            <TextInput
              id="street_number"
              type="text"
              class="mt-1 block w-full"
              v-model="form.street_number"
              required
            />
            <InputError class="mt-2" :message="form.errors.street_number"/>
          </div>
          <div class="pb-2 col-span-6">
            <InputLabel for='price' value="Price"/>
            <TextInput
              id="price"
              type="text"
              class="mt-1 block w-full"
              v-model.number="form.price"
              required
            />
            <InputError class="mt-2" :message="form.errors.price"/>
          </div>
        </div>
        <div class="flex justify-between">
          <AppButton type="submit" class="my-2" color="primary" label="Save Changes"/>
          <Link :href="route('listings.index')"
                class="btn btn-outlined color-secondary my-2 mx-0">
            Cancel
          </Link>
        </div>
      </form>
    </div>
  </div>
</template>

<style scoped>

</style>
