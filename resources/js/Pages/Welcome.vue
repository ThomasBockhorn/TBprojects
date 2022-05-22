<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/Guest";
import Intro from "@/Components/Frontend/Intro/Intro.vue";
import Hero from "@/Components/Frontend/Hero/Hero.vue"
</script>

<template>
  <div class="bg-amber-50">
    <Head title="Welcome" />
    <GuestLayout>
      <div>
        <Hero/>
        <Intro id="main"/>
      </div>
    </GuestLayout>
  </div>
</template>
