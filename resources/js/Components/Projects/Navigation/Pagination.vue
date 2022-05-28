<template>
  <div v-if="project_links.length > 3">
    <div class="flex flex-wrap -mb-1 mt-5">
      <div v-for="(project_link, index) in project_links" :key="index">
        <div v-if="project_link.url === null"  class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="project_link.label" />
        <Link v-else class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-amber-400 focus:bg-amber-400 bg-amber-200"  preserve-scroll :class="{ 'bg-amber-400 text-black': project_link.active }" :href="project_link.url" v-html="project_link.label" />
      </div>
    </div>
  </div>
</template>
  
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components:{
      Link,
  },
  
  props: {
    project_links: Array,
  },
}
</script>