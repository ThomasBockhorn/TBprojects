<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/Guest";
import Intro from "@/Components/Frontend/Intro/Intro.vue";
</script>

<template>
  <div class="bg-amber-50">
    <Head title="Welcome" />
    <GuestLayout>
      <div id="main" class="mt-20">
        <Intro />
      </div>
    </GuestLayout>
  </div>
</template>
