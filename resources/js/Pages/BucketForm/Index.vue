<template>
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-lg">📝 Add a new item to your bucket list</h1>
        <form class="py-3 flex" @submit.prevent="submitForm">
            <input v-model="form.title" type="text" class="border border-gray-300 p-2" placeholder="Enter item title" required/>
            <button type="submit" class="border border-gray-600 bg-blue-500 text-white px-3 py-1 ml-3">Add</button>
        </form>
    </div>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
  title: '',
  description: ''
});

const submitForm = () => {
  form.post('/', {
    onSuccess: () => {
     
      Inertia.reload(); // Reload the current page to fetch updated items
      form.reset();
    },
    onError: (errors) => {
      console.log('Errors:', errors); // Debug any validation errors
    }
  });
};
</script>

<style scoped>
h1 {
  color: #4f46e5;
}
</style>