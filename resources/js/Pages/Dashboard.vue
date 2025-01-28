<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head ,Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    tasks: Array,
});

const form = useForm({
    title: '',
});

const submit = () => {
    form.post(route('tasks.store'), {
        onSuccess: () => form.reset('title'),
    });
};

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Bucket Lists</div>
                </div>
            </div>
        </div>

        <!-- Add Task Form -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form @submit.prevent="submit" class="mt-4">
                <div class="flex items-center gap-2">
                    <input
                        v-model="form.title"
                        type="text"
                        class="border rounded-lg px-4 py-2 w-full"
                        placeholder="Enter task title"
                        required
                    />
                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                    >
                        Add Task
                    </button>
                </div>
            </form>
        </div>

        <!-- Task List -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center text-normal text-gray-600 mt-6">
            <ul>
                <li
                    v-for="task in tasks"
                    :key="task.id"
                    class="border-b p-2"
                >
                    {{ task.title }}
                </li>
            </ul>
        </div>
    </AuthenticatedLayout>
</template>
