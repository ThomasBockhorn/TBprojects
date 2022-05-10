<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/Guest";

defineProps({
    projects: Object,
});

</script>

<template>
  <div>
    <Head title="Welcome" />

    <GuestLayout>
      <div id="main" class="bg-white w-100 h-50 mt-20">
        <h3 class="text-center text-4xl">Projects</h3>

        <div v-for="project in projects" :key="project.id">
            <h1>{{ project.project_title }}</h1>

        </div>
      </div>
    </GuestLayout>
  </div>
</template>

<style scoped>
</style>
