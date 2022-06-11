<template>
  <div>
    <Head title="Add Image" />

    <BreezeAuthenticatedLayout>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-amber-50">
              <div id="main">
                <h3 class="text-center text-7xl pt-10">
                  Create A Project Image
                </h3>
                <div class="h-screen flex flex-col justify-center items-center">
                  <form
                    method="post"
                    class="block p-6 rounded-lg shadow-lg bg-white w-2/4"
                    @submit.prevent="form.post(route('project-images.store'))"
                  >
                    <div class="form-group mb-6">
                      <select
                        name="project_id"
                        id="projects"
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700
                          focus:bg-white
                          focus:border-blue-600
                          focus:outline-none
                        "
                      >
                        <option>Choose a Project</option>
                        <option
                          v-for="project in projects.data"
                          :key="project.id"
                        >
                          {{ project.project_title }}
                        </option>
                      </select>
                    </div>
                    <div class="form-group mb-6">
                      <label
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-gray-700
                          bg-white bg-clip-padding
                          rounded
                        "
                        for="image"
                        >Choose a project image</label
                      >
                      <input
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                        "
                        id="image"
                        type="file"
                        name="project_image"
                        accept="image/png, image/jpg"
                        @input="form.project_image = $event.target.files[0]"
                      />
                    </div>
                    <button
                      type="submit"
                      class="
                        w-full
                        px-6
                        py-2.5
                        bg-amber-200
                        text-black
                        font-medium
                        text-xs
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-amber-400 hover:shadow-lg
                        focus:bg-amber-400
                        focus:shadow-lg
                        focus:outline-none
                        focus:ring-0
                        active:bg-amber-400 active:shadow-lg
                        transition
                        duration-150
                        ease-in-out
                      "
                    >
                      Send
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </BreezeAuthenticatedLayout>
  </div>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, useForm} from "@inertiajs/inertia-vue3";

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
  },
  props: {
    projects: Object,
  },
  setup(){
      const form = useForm({
          project_image: null
      })

      return { form };
  }
};
</script>

<style scoped>
</style>