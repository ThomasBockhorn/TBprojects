<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-amber-200 border border-black rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-amber-400 active:bg-amber-400 focus:outline-none focus:bg-amber-400 focus:shadow-outline-gray transition ease-in-out duration-150">
        <slot />
    </button>
</template>
