<template>
  <div>
    <div
      id="image"
      class="bg-cover bg-no-repeat bg-center flex justify-center items-center"
    >
      <div class="flex justify-center items-center">
        <div class="text-center">
          <h1 class="text-5xl font-bold">Thomas Bockhorn</h1>
          <hr/>
          <h2 class="text-5xl">Web Developer</h2>
          <div class="mt-16 flex justify-center">
            <a href="#main"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19 13l-7 7-7-7m14-8l-7 7-7-7"
                /></svg
            ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style  scoped>
#image {
  background-image: url("../../../../assets/imgs/pexels-will-mu.jpg");
  width: 100%;
  height: 100vh;
}

html {
  scroll-behavior: smooth;
}

hr{
     border-top: 5px solid black;
}
</style>