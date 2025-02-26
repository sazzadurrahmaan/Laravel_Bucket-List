<script setup>
import { usePage } from '@inertiajs/inertia-vue3';

const items = usePage().props.value.items; // Access the 'items' array directly (no need for ref() since Inertia.js makes it reactive)
console.log('Items:', items);
</script>

<template>
  <div class="py-6">
    <h1 class="text-2xl font-bold mb-4">🎯 My Bucket List</h1>
    <ol>
      <li v-for="(item, index) in items" :key="item.id" class="pl-6 mb-2">
        {{ index + 1 }}. {{ item.title }} 
      </li>
    </ol>
  </div>
</template>

<style scoped>
h1 {
  color: #4f46e5;
}
</style>