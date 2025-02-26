<template>
    <div class="flex flex-col items-center justify-center p-6">
        <BucketList :items="items" @itemAdded="fetchItems" />
        <BucketForm @itemAdded="fetchItems" />
    </div>
</template>

<script setup>
import BucketList from '@/Pages/BucketList/Index.vue';
import BucketForm from '@/Pages/BucketForm/Index.vue';
import { usePage } from '@inertiajs/inertia-vue3';
import { ref, onMounted } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const items = ref(usePage().props.value.items);

const fetchItems = () => {
  Inertia.reload({ only: ['items'] }); // Reload only the 'items' prop
};

onMounted(() => {
  fetchItems(); // Initial fetch
});
</script>

<style>
</style>