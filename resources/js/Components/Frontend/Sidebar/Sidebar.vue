<template>
  <div class="h-70 w-auto z-40 fixed bg-amber-200">
    <nav class="text-black text-center">
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url === '/' }"
        href="/"
        preserve-scroll
        >Home</Link
      >
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url.startsWith('/projects') }"
        href="/projects"
        preserve-scroll
        >Projects</Link
      >
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url === '/contact' }"
        href="/contact"
        preserve-scroll
        >Contact</Link
      >
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url === '/resume' }"
        href="/resume"
        preserve-scroll
        >Resume</Link
      >
    </nav>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<style>
</style>