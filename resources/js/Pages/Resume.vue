<template>
  <div>
    <Head title="Resume" />
    <GuestLayout>
      <div id="main">
        <VuePdfEmbed :page="1" :source="'/pdf/TechResume2020.pdf'" />
      </div>
    </GuestLayout>
  </div>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest";
import { Head } from "@inertiajs/inertia-vue3";
import VuePdfEmbed from "vue-pdf-embed";
</script>

<style scoped>
</style>