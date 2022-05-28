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
        bg-amber-50
      "
    >
      <div class="px-6 py-4">
        <h3
          class="
            mt-1
            text-xl
            font-medium
            text-center
            text-black
          "
        >
          Welcome Back
        </h3>

        <p class="mt-1 text-center  text-white">
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
          bg-amber-50
        "
      >
        <span class="text-sm text-black"
          >Don't have an account?
        </span>

        <Link
          href="/register"
          class="
            mx-2
            text-sm
            font-bold
            text-black
            bg-amber-50
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