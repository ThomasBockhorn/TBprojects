<template>
  <div>
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
        v-for="projectImage in projectImages.data"
        :key="projectImage.id"
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
          :src="projectImage.image_url"
          alt="project image"
        />
        <div class="px-6 py-4">
          <hr />
          <div
            class="card-footer flex justify-center"
          >
            <Link
              :href="`/project-images/${projectImage.id}/edit`"
              as="button"
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
            <Link
              :href="`/project-images/${projectImage.id}`"
              method="delete"
              as="button"
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
            </Link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components:{
        Link
    },
    props:{
        projectImages: Object
    }
};
</script>

<style scoped>
</style>