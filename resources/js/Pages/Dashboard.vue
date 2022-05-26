<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Projects/Navigation/Pagination.vue";

defineProps({
  projects: Object,
});
</script>

<template>
  <div>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Dashboard
        </h2>
      </template>

      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div id="main">
                <h3 class="text-center text-7xl pt-10">Projects</h3>
                <div class="flex flex-row flex-wrap m-20 p-10 justify-center">
                  <div
                    v-for="project in projects.data"
                    :key="project.id"
                    class="
                      max-w-sm
                      rounded
                      overflow-hidden
                      shadow-lg
                      m-5
                      bg-white
                    "
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
                  <Pagination />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </BreezeAuthenticatedLayout>
  </div>
</template>
