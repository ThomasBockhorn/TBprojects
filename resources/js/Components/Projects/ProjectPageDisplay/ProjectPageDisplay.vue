<template>
    <div>
  <div id="main">
        <h3 class="text-center text-7xl pt-10">Projects</h3>
        <div class="flex flex-row flex-wrap m-20 p-10 justify-center">
          <div
            v-for="project in projects.data"
            :key="project.id"
            class="max-w-sm rounded overflow-hidden shadow-lg m-5 bg-white"
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
          <Pagination :project_links="projects.links"/>
        </div>
      </div>
    </div>
</template>

<script setup>
import Pagination from "@/Components/Projects/Navigation/Pagination.vue";

defineProps({
    projects: Object,
});
</script>

<style scoped>

</style>