import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

// GLOBAL CSS IMPORTS (Vite will bundle them)
import "@/assets/css/bootstrap.min.css";
import "@/assets/css/aos.css";
import "@/assets/css/style.css";

import AOS from "aos";
AOS.init();

createApp(App).use(router).mount("#app");
