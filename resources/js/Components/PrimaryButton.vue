<template>
    <button
        class="btn-primary"
    >
        <slot />
    </button>
</template>

<style lang="postcss">
.btn-primary {
    @apply inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-white  tracking-widest hover:bg-primary-hover focus:bg-primary-focus active:bg-primary-active focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition ease-in-out duration-150
}
</style>
