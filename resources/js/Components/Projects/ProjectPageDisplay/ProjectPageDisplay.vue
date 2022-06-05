<template>
  <div>
    <div id="main">
      <h3 class="text-center text-7xl pt-10">Projects</h3>
      <div
        class="
          mt-10
          grid grid-cols-1
          sm:grid-cols-1
          md:grid-cols-2
          lg:grid-cols-2
          xl:grid-cols-2
          place-content-between
          items-center
          gap-6
          m-20
          p-10
        "
      >
        <div
          v-for="project in projects.data"
          :key="project.id"
          class="
            rounded
            h-100
            overflow-hidden
            shadow-lg
            bg-white
            card
            p-10
            cursor-pointer
            border border-gray-400
            rounded-lg
            hover:shadow-md hover:border-opacity-0
            transform
            hover:-translate-y-1
            transition-all
            duration-200
          "
        >
          <img
            class="w-full card-img"
            src="/img/card-top.jpg"
            alt="Sunset in the mountains"
          />
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 card-title">
              {{ project.project_title }}
            </div>
            <div class="text-gray-700 text-base card-body">
              {{ project.project_description }}
            </div>
            <hr />
            <div
              v-if="$page.props.auth.user"
              class="card-footer flex justify-center"
            >
              <Link
              :href="`/projects/${project.id}/edit`"
                class="
                  bg-amber-200
                  hover:bg-amber-400
                  text-black
                  font-bold
                  py-2
                  px-4
                  rounded-full
                  m-5
                "
              >
                Edit
              </Link>
              <button
                class="
                  bg-amber-200
                  hover:bg-amber-400
                  text-black
                  font-bold
                  py-2
                  px-4
                  rounded-full
                  m-5
                "
              >
                Delete
              </button>
            </div>
            <div v-else class="flex justify-center">
              <button
                class="
                  bg-amber-200
                  hover:bg-amber-400
                  text-black
                  font-bold
                  py-2
                  px-4
                  rounded-full
                  m-5
                "
              >
                Check It Out
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="w-100 mt-20 mb-20 flex justify-center">
        <Pagination :project_links="projects.links" />
      </div>
    </div>
  </div>
</template>

<script setup>
import Pagination from "@/Components/Projects/Navigation/Pagination.vue";
import { Link } from "@inertiajs/inertia-vue3";



defineProps({
  projects: Object,
});
</script>

<style scoped>
</style>