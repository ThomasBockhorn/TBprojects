<template>
  <div>
    <GuestLayout>
    <h1>This is the project page</h1>

    <div v-for="project in projects.data" :key="project.id">
      <h4>{{ project.project_title }}</h4>
      <p>{{ project.project_description }}</p>
      <p>{{ project.project_url }}</p>
    </div>
    </GuestLayout>
  </div>
</template>

<script>
import GuestLayout from "@/Layouts/Guest";

export default {
  props: {
    projects: Object,
  },

   components:{
       GuestLayout
   }
};
</script>

<style scoped>
</style>