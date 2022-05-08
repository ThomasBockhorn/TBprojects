<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/Guest";
</script>

<template>
  <div>
    <Head title="Welcome" />

    <GuestLayout> 
        <div id="image" class="bg-cover bg-no-repeat bg-center">image</div>

    </GuestLayout>
  </div>
</template>

<style scoped>
#image{
  background-image: url('../../assets/imgs/pexels-will-mu.jpg');
  width: 100%;
  height: 100vh;
}
</style>
