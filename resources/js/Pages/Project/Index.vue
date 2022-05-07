<template>
  <div>
    <GuestLayout>
    <h1>This is the project page</h1>

    <div v-for="project in projects.data" :key="project.id">
      <h4>{{ project.project_title }}</h4>
      <p>{{ project.project_description }}</p>
      <p>{{ project.project_url }}</p>
    </div>
    </GuestLayout>
  </div>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
    projects: Object,
});

</script>

<style scoped>
</style>