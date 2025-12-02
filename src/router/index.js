import { createRouter, createWebHistory } from 'vue-router'

import Home from '@/pages/Home.vue'
import About from '@/pages/About.vue'
import Works from '@/pages/Works.vue'
import WorkDetail from '@/pages/WorkDetail.vue'
import Contact from '@/pages/Contact.vue'
import Credential from '@/pages/Credential.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Home },
    { path: '/about', component: About },
    { path: '/works', component: Works },
    { path: '/work/:id', component: WorkDetail},
    { path: '/contact', component: Contact },
    { path: '/credential', component: Credential },
  ],
})

export default router
