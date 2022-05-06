<template>
  <div>
    <h1>This is the project page</h1>

    <div v-for="project in projects.data" :key="project.id">
      <h4>{{ project.project_title }}</h4>
      <p>{{ project.project_description }}</p>
      <p>{{ project.project_url }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    projects: Object,
  },
};
</script>

<style scoped>
</style>