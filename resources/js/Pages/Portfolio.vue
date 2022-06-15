<template>
  <div class="bg-amber-50">
  <Head title="Projects" />
    <GuestLayout>
      <ProjectPageDisplay  :projects="projects" :project_images="project_images"/>
    </GuestLayout>
  </div>
</template>

<script setup>
import GuestLayout from "@/Layouts/Guest";
import { Head } from "@inertiajs/inertia-vue3";
import ProjectPageDisplay from "@/components/Projects/ProjectPageDisplay/ProjectPageDisplay.vue"

defineProps({
    projects: Object,
    project_images: Object
});

</script>

<style scoped>

</style>