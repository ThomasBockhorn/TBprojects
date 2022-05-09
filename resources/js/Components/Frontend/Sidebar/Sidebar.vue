<template>
<div class="h-70 w-auto z-40 fixed bg-yellow-300"> 
    <nav class="text-black text-center">
       <Link class="block p-4 hover:bg-yellow-500" href="/">Home</Link>
       <Link class="block p-4 hover:bg-yellow-500" href="/about">About</Link>
       <Link class="block p-4 hover:bg-yellow-500" href="/projects">Projects</Link>
       <Link class="block p-4 hover:bg-yellow-500" href="/contact">Contact</Link>
       <Link class="block p-4 hover:bg-yellow-500" href="/resume">Resume</Link>
    </nav>
</div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<style>
</style>