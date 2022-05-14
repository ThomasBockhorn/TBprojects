<template>
<div class="h-70 w-auto z-40 fixed bg-amber-200"> 
    <nav class="text-black text-center">
       <Link class="block p-4 hover:bg-amber-400" href="/" preserve-scroll>Home</Link>
       <Link class="block p-4 hover:bg-amber-400" href="/projects" preserve-scroll>Projects</Link>
       <Link class="block p-4 hover:bg-amber-400" href="/contact" preserve-scroll>Contact</Link>
       <Link class="block p-4 hover:bg-amber-400" href="/resume" preserve-scroll>Resume</Link>
    </nav>
</div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<style>
</style>