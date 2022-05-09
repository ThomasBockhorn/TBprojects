<script setup>
    import SideBar from "@/Components/Frontend/Sidebar/Sidebar";
    import Footer from "@/Components/Frontend/Footer/Footer";
    import Hero from "@/Components/Frontend/Hero/Hero";
    </script>

<template>
    <div >
        <SideBar />
        <Hero />
        <!--Page Content-->
        <main>
            <slot />
        </main>
        <Footer />
    </div>
</template>
