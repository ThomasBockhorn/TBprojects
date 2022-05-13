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
      <div id="main" class="bg-white mt-20">
        <h3 class="text-center text-4xl">Projects</h3>
        <div class="flex flex-row flex-wrap m-20 p-10 justify-center">
          <div
            v-for="project in projects"
            :key="project.id"
            class="max-w-sm rounded overflow-hidden shadow-lg m-5"
          >
            <img
              class="w-full"
              src="/img/card-top.jpg"
              alt="Sunset in the mountains"
            />
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">
                {{ project.project_title }}
              </div>
              <p class="text-gray-700 text-base">
                {{ project.project_description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </GuestLayout>
  </div>
</template>

<style scoped>
</style>
