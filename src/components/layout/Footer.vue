<template>
  <footer class="footer-area">
    <div class="container">
      <div class="footer-content text-center">

        <RouterLink to="/" class="logo">
          <img :src="logo" alt="Logo" />
        </RouterLink>

        <p class="copyright">
          © {{ new Date().getFullYear() }} Mushary. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { RouterLink } from "vue-router";
import logo from "/assets/images/others/logo.png";
</script>
