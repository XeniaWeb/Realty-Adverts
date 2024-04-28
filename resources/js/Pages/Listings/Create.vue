<script setup>
import {Link, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const form = useForm({
    'beds': 0,
    'baths': 0,
    'area': 0,
    'city': '',
    'code': '',
    'street': '',
    'street_number': '',
    'price': 0
});

const submit = () => {
    form.post(route('listings.store'))
}</script>

<template>
    <div class="container m-auto">
        <div class="w-full md:w-1/2 lg:w-1/3 p-2 m-auto">
            <h1 class="text-lg py-4 font-semibold">Create a new Advert</h1>
            <form @submit.prevent="submit">
                <div class="pb-2">
                    <InputLabel for='beds' value="Count of beds" />
                    <TextInput
                        id="beds"
                        type="number"
                        min="0"
                        class="mt-1 block w-full"
                        v-model="form.beds"
                        required
                        autofocus
                    />
                    <InputError class="mt-2" :message="form.errors.beds"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='baths' value="Count of baths" />
                    <TextInput
                        id="baths"
                        type="number"
                        min="0"
                        class="mt-1 block w-full"
                        v-model="form.baths"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.baths"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='area' value="Area (sq.m)" />
                    <TextInput
                        id="area"
                        type="number"
                        min="0"
                        max="10000"
                        class="mt-1 block w-full"
                        v-model="form.area"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.area"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='city' value="City" />
                    <TextInput
                        id="city"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.city"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.city"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='code' value="Zip code" />
                    <TextInput
                        id="code"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.code"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.code"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='street' value="Street" />
                    <TextInput
                        id="street"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.street"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.street"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='street_number' value="Street number" />
                    <TextInput
                        id="street_number"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.street_number"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.street_number"/>
                </div>
                <div class="pb-2">
                    <InputLabel for='price' value="Price" />
                    <TextInput
                        id="price"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.price"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.price"/>
                </div>
                <div class="flex justify-between">
                    <PrimaryButton type="submit" class="mt-2 bg-amber-700">Save</PrimaryButton>
                    <Link :href="route('listings.index')"
                          class="btn-secondary m-2 ">
                        Cancel
                    </Link>
                </div>
            </form>
        </div>

    </div>

</template>

<style scoped>

</style>
