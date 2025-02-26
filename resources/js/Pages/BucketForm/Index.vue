
<template>
    <div class=" flex flex-col item-center justify-center">
        <h1>📝 Add a new item to your bucket list</h1>
        <form class="py-3 flex" @submit.prevent>
            <input type="text" placeholder="Title" class="flex border border-gray-300  p-2"/>
            <button class="border border-gray-600 bg-blue-500 text-white px-3 py-1 ml-3">Add</button>
        </form>
    </div>
</template>
<script setup>

</script>