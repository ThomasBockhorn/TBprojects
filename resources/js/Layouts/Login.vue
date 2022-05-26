<template>
  <div>
    <div
      class="
        w-full
        max-w-sm
        mx-auto
        overflow-hidden
        bg-white
        rounded-lg
        shadow-md
        dark:bg-gray-800
      "
    >
      <div class="px-6 py-4">
        <h3
          class="
            mt-1
            text-xl
            font-medium
            text-center text-gray-600
            dark:text-gray-200
          "
        >
          Welcome Back
        </h3>

        <p class="mt-1 text-center text-gray-500 dark:text-gray-400">
          Login or create account
        </p>
        <main>
          <slot />
        </main>
      </div>

      <div
        class="
          flex
          items-center
          justify-center
          py-4
          text-center
          bg-gray-50
          dark:bg-gray-700
        "
      >
        <span class="text-sm text-gray-600 dark:text-gray-200"
          >Don't have an account?
        </span>

        <Link
          href="/register"
          class="
            mx-2
            text-sm
            font-bold
            text-blue-500
            dark:text-blue-400
            hover:underline
          "
          >Register</Link
        >
      </div>
    </div>
  </div>
</template>

<script setup>
import {  Link } from "@inertiajs/inertia-vue3";


</script>

<style scoped>
</style>