<template>
  <nav class="bg-white shadow dark:bg-gray-800">
    <div
      class="
        container
        flex
        items-center
        justify-center
        p-6
        mx-auto
        text-gray-600
        capitalize
        dark:text-gray-300
      "
    >
      <Link
        href="/"
        class="
          text-gray-800
          transition-colors
          duration-200
          transform
          dark:text-gray-200
          border-b-2 border-blue-500
          mx-1.5
          sm:mx-6
        "
        >home</Link
      >

      <Link
        href="/projects"
        class="
          border-b-2 border-transparent
          hover:text-gray-800
          transition-colors
          duration-200
          transform
          dark:hover:text-gray-200
          hover:border-blue-500
          mx-1.5
          sm:mx-6
        "
        >Projects</Link
      >

      <Link
        href="/about"
        class="
          border-b-2 border-transparent
          hover:text-gray-800
          transition-colors
          duration-200
          transform
          dark:hover:text-gray-200
          hover:border-blue-500
          mx-1.5
          sm:mx-6
        "
        >About</Link
      >

      <Link
        href="/contact"
        class="
          border-b-2 border-transparent
          hover:text-gray-800
          transition-colors
          duration-200
          transform
          dark:hover:text-gray-200
          hover:border-blue-500
          mx-1.5
          sm:mx-6
        "
        >Contact</Link
      >
      <Link
        href="/resume"
        class="
          border-b-2 border-transparent
          hover:text-gray-800
          transition-colors
          duration-200
          transform
          dark:hover:text-gray-200
          hover:border-blue-500
          mx-1.5
          sm:mx-6
        "
        >Resume</Link
      >
    </div>
  </nav>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<style>
</style>