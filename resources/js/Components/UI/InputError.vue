<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-danger-focus dark:text-danger-hover">
            {{ message }}
        </p>
    </div>
</template>
