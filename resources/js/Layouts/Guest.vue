<script setup>
    import NavBar from "@/Components/Frontend/Navbar/Navbar";
    </script>

<template>
    <div >
        <NavBar />
        <!--Page Content-->
        <main>
            <slot />
        </main>
    </div>
</template>
