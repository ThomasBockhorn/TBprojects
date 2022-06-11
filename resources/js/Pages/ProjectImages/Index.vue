<template>
  <div>
    <BreezeAuthenticatedLayout>
      <Head title="Project Images" />
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-amber-50">
              <h3 class="text-center text-7xl pt-10">Project Images</h3>
                <ProjectImagePage :projectImages="projectImages"/>
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
import ProjectImagePage from "@/Components/ProjectImages/ProjectImagePage.vue";

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
    ProjectImagePage
  },
  props:{
      projectImages: Object
  }
};
</script>

<style scoped>
</style>