<template>
  <div class="h-70 w-auto z-40 fixed bg-amber-200">
    <nav class="text-black text-center">
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url === '/' }"
        href="/"
        >Home</Link
      >
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url.startsWith('/portfolio') }"
        href="/portfolio"
        >Projects</Link
      >
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url === '/contact' }"
        href="/contact"
        >Contact</Link
      >
      <Link
        class="block p-4 hover:bg-amber-400"
        :class="{ 'bg-amber-400': $page.url === '/resume' }"
        href="/resume"
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