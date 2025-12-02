<template>
  <MainLayout>
    <router-view />
  </MainLayout>
</template>

<script setup>
import MainLayout from "@/components/layout/MainLayout.vue";
import { onMounted, ref } from "vue";
import AOS from "aos"
import "aos/dist/aos.css"

onMounted(() => {
  AOS.init({
    duration: 800,
    once: true,
  })
})
</script>
