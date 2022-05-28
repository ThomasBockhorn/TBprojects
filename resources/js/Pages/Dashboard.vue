<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import ProjectPageDisplay from "@/Components/Projects/ProjectPageDisplay/ProjectPageDisplay.vue";

defineProps({
  projects: Object,
});
</script>

<template>
  <div>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class=" overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-amber-50">
              <ProjectPageDisplay :projects="projects"/>
            </div>
          </div>
        </div>
      </div>
    </BreezeAuthenticatedLayout>
  </div>
</template>
