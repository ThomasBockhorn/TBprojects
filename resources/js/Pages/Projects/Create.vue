<template>
  <div>
    <Head title="AddProject" />

    <BreezeAuthenticatedLayout>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-amber-50">
              <div id="main">
                <h3 class="text-center text-7xl pt-10">Create A Project</h3>
                <div class="h-screen flex flex-col justify-center items-center">
                  <form
                    method="post"
                    class="block p-6 rounded-lg shadow-lg bg-white w-2/4"
                    @submit.prevent="form.post(route('projects.store'))"
                  >
                    <div class="form-group mb-6">
                      <input
                        type="text"
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
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
                        placeholder="Project Title"
                        name="project_title"
                        v-model="form.project_title"
                      />
                    </div>
                    <div class="form-group mb-6">
                      <input
                        type="text"
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
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
                        placeholder="Project URL"
                        name="project_url"
                        v-model="form.project_url"
                      />
                    </div>
                    <div class="form-group mb-6">
                      <textarea
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
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
                        rows="3"
                        placeholder="Project Description"
                        name="project_description"
                        v-model="form.project_description"
                      ></textarea>
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
                      :disabled="form.processing"
                    >Send</button>
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
import { Head } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
  },
  setup(){
    const form = useForm({
      project_title: null,
      project_url: null,
      project_description: null
    })

    return { form };
  },
  methods:{
     sendProject(){
         form.post('/projects');
         form.reset();
      }
  }
};
</script>

<style scoped>
</style>