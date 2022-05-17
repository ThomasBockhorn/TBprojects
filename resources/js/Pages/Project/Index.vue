<template>
  <div id="zig-zag" class="bg-amber-200">
    <GuestLayout>
      <div id="main" class="mt-20">
        <h3 class="text-center text-7xl">Projects</h3>
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
        </div>
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
#zig-zag {
  background-image: linear-gradient(135deg, #F5E390 25%, transparent 25%),
    linear-gradient(225deg, #F5E390 25%, transparent 25%),
    linear-gradient(315deg, #F5E390 25%, transparent 25%),
    linear-gradient(45deg, #F5E390 25%, transparent 25%);
  background-position: -30px 0, -30px 0, 0 0, 0 0;
  background-size: 60px 60px;
  background-repeat: repeat;
}
</style>