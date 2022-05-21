<template>
  <div>
    <h3 class="text-center text-7xl">Profile</h3>
    <div class="m-20">
      <div class="flex justify-center h-80 w-30 mb-8">
        <img
          src="/images/ThomasBockhorn.jpg"
          alt="Thomas Bockhorn"
          class="max-w-fit max-h-fit rounded-full"
        />
      </div>
      <p class="text-2xl m-5">
        Hi, my name is Thomas Bockhorn. I'm a full stack web developer. Building
        websites and web applications is fun and challenging. Websites can also
        be creative endevors that inspire.
      </p>
      <p class="text-2xl m-5">
        I first got into web development with an invitation by Udacity including
        a Google scholarship for their front-end web development program. After
        taking a few lessions, I became hooked on all things web development. To
        further my education, I took and continue to take Udemy courses for both
        front-end and back-end development. The beauty of both technical and
        asthetic spheres and how they interacted together fascinated me. Just
        like architecture, good websites need to consider both form and
        function.
      </p>
      <p class="text-2xl m-5">
        My other source of inspiration is history and the art of telling
        stories. I received a Master's degree in history. Good historical
        narratives and websites share how important the central theme is and how
        essential the human connection is. History and websites can be dry and
        boring, or can be interesting and compelling. It all depends on the
        content. I make compelling websites that garner viewer's attention.
      </p>
      <p class="text-2xl m-5">
        I work with Java, Spring, PHP, Laravel, CSS, HTML, Vue, MySql.
      </p>
      <p class="text-2xl m-5">-Thomas Bockhorn</p>
    </div>
    <Skills />
  </div>
</template>

<script setup>
import Skills from "@/Components/Frontend/Skills/Skills.vue";
</script>

<style scoped>
</style>