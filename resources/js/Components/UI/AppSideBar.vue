<script setup>

</script>

<template>
  <div class="side">
    <div class="w-full">
      <slot/>
    </div>
  </div>
</template>

<style lang="postcss">
.side {
  @apply flex justify-between h-full fixed left-0 top-[58px] py-5 transition ease-in-out duration-200 dark:bg-gray-800
}
</style>
