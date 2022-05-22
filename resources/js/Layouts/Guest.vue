<script setup>
import SideBar from "@/Components/Frontend/Sidebar/Sidebar";
import Footer from "@/Components/Frontend/Footer/Footer";
</script>

<template>
  <div>
    <SideBar />
    <!--Page Content-->
    <main>
      <transition name="page">
        <slot />
      </transition>
    </main>
    <Footer />
  </div>
</template>
<style scoped>
.page-enter-active,
.page-leave-active {
  transition: all 0.5s;
}

.page-enter,
.page-leave-active {
  opacity: 0;
}
</style>
