<template>
  <header class="header-area">
    <div class="container">
      <div class="gx-row d-flex align-items-center position-relative">

        <!-- Logo (Left) -->
        <RouterLink to="/" class="logo position-absolute start-0">
          <img :src="logo" alt="Logo" />
        </RouterLink>

        <!-- Navbar (Centered) -->
        <nav class="navbar" :class="{ active: menuOpen }">
          <ul class="menu d-flex justify-content-center">
            <li :class="{ active: route.path === '/' }">
              <RouterLink to="/" @click="closeMenu">Home</RouterLink>
            </li>

            <li :class="{ active: route.path === '/about' }">
              <RouterLink to="/about" @click="closeMenu">About</RouterLink>
            </li>

            <li :class="{ active: route.path === '/works' }">
              <RouterLink to="/works" @click="closeMenu">Works</RouterLink>
            </li>

            <li :class="{ active: route.path === '/contact' }">
              <RouterLink to="/contact" @click="closeMenu">Contact</RouterLink>
            </li>
          </ul>
        </nav>

        <!-- Right Side Controls -->
        <div class="right-actions position-absolute end-0 d-flex align-items-center gap-3">
          <!-- Theme -->
          <svg class="theme-toggle"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            v-html="currentIcon"
            @click="toggleTheme">
          </svg>

          <!-- Mobile Menu -->
          <div class="show-menu" :class="{ active: menuOpen }" @click="toggleMenu">
            <span></span><span></span><span></span>
          </div>
        </div>

      </div>
    </div>
  </header>
</template>

<script setup>
import { ref } from "vue";
import { useRoute, RouterLink } from "vue-router";
import logo from "/assets/images/others/logo.png";
import { useTheme } from "@/composables/useTheme.js";

const route = useRoute();
const { currentIcon, toggleTheme } = useTheme();
const menuOpen = ref(false);

const toggleMenu = () => (menuOpen.value = !menuOpen.value);
const closeMenu = () => (menuOpen.value = false);
</script>

<style scoped>
/* Center navbar container */
.navbar {
  display: flex;
  justify-content: center;
  width: 100%;
}

.menu {
  display: flex;
  gap: 30px;
}

.right-actions {
  top: 50%;
  transform: translateY(-50%);
}

.logo {
  top: 50%;
  transform: translateY(-50%);
}

/* Mobile navbar behavior */
.show-menu {
  cursor: pointer;
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.show-menu span {
  width: 22px;
  height: 2px;
  background: currentColor;
  transition: 0.3s;
}

.show-menu.active span:nth-child(1) {
  transform: translateY(6px) rotate(45deg);
}
.show-menu.active span:nth-child(2) {
  opacity: 0;
}
.show-menu.active span:nth-child(3) {
  transform: translateY(-6px) rotate(-45deg);
}

/* Default: Desktop View */
.show-menu {
  display: none; /* hide hamburger on desktop */
}

.navbar {
  display: flex;
}

/* Mobile View */
@media (max-width: 768px) {
  /* Show hamburger on mobile */
  .show-menu {
    display: flex;
  }

  /* Hide full menu on mobile unless opened */
  .navbar {
    display: none;
  }

  .navbar.active {
    display: block;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    padding: 20px 0;
    text-align: center;
  }

  .menu {
    flex-direction: column;
    gap: 20px;
  }
}
</style>
