<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const items = ref(usePage().props).value.items;
console.log(items);
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">🎯 My Bucket List</h1>
    <ul>
      <li v-for="item in items" :key="item.id" class="list-none pl-6 mb-2">
         {{ item.title }}
      </li>
    </ul>
  </div>
</template>

<style scoped>
h1 {
  color: #4f46e5;
}
</style>
