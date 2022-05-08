<script setup>
    import SideBar from "@/Components/Frontend/Sidebar/Sidebar";
    import Footer from "@/Components/Frontend/Footer/Footer";
    </script>

<template>
    <div >
        <SideBar />
        <!--Page Content-->
        <main>
            <slot />
        </main>
        <Footer />
    </div>
</template>
