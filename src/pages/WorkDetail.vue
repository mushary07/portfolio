<template>
  <section class="breadcrumb-area">
    <div class="container">
      <div class="breadcrumb-content" data-aos="fade-up">
        <p>{{ work.caption }}</p>

        <h1 class="section-heading">
          <img :src="starImg" alt="Star" />
          {{ work.name }}
          <img :src="starImg" alt="Star" />
        </h1>
      </div>
    </div>
  </section>

  <section class="project-details-wrap">

    <!-- Banner 1 -->
    <div class="project-details-img" data-aos="zoom-in">
      <img :src="work['banner-1']" alt="Project Details" />
    </div>

    <div class="container">

      <!-- Info BOX -->
      <div data-aos="zoom-in">
        <div class="d-flex project-infos-wrap shadow-box mb-24">
          <img :src="bg1Img" alt="BG" class="bg-img" />
          <img :src="floatIconImg" alt="Icon" />

          <div class="project-details-info flex-1">
            <h3>{{ work.name }}</h3>
            <p>{{ work.description }}</p>
          </div>

          <div class="project-details-info flex-1">
            <h3>About</h3>
            <p>{{ work.about }}</p>
          </div>
        </div>
      </div>

      <!-- Banner 2 -->
      <div class="project-details-2-img mb-24" data-aos="zoom-in">
        <img :src="work['banner-2']" alt="Project" />
      </div>

      <!-- Gallery 1–2 -->
      <div class="row mb-24">
        <div class="col-md-6" v-for="n in [1,2]" :key="n" data-aos="zoom-in">
          <div class="project-details-3-img">
            <img :src="work[`gallery-${n}`]" alt="Project" />
          </div>
        </div>
      </div>

      <!-- Gallery 3–4 -->
      <div class="row mb-24">
        <div class="col-md-6" v-for="n in [3,4]" :key="n" data-aos="zoom-in">
          <div class="project-details-3-img">
            <img :src="work[`gallery-${n}`]" alt="Project" />
          </div>
        </div>
      </div>

      <!-- Info with BG and FLOAT -->
      <div data-aos="zoom-in">
        <div class="project-about-2 d-flex shadow-box mb-24">
          <img :src="bg1Img" alt="BG" class="bg-img" />

          <div class="left-details">
            <img :src="floatIconImg" alt="Icon" />
            <ul>
              <li v-for="info in work.content" :key="info.title">
                <p>{{ info.title }}</p>
                <h4>{{ info.value }}</h4>
              </li>
            </ul>
          </div>

          <div class="right-details">
            <h3>Description</h3>
            <p>{{ work.timeline_description }}</p>
          </div>

        </div>
      </div>

    </div>

    <!-- Banner 3 -->
    <div class="project-details-img" data-aos="zoom-in">
      <img :src="work['banner-3']" alt="Project Details" />
    </div>

    <!-- Navigation -->
    <div
      class="container d-flex align-items-center justify-content-center gap-5"
      data-aos="zoom-in"
    >
      <router-link
        v-if="id > minId"
        :to="'/work/' + (id - 1)"
        class="small-btn shadow-box"
      >
        Previous Project
      </router-link>

      <router-link
        v-if="id < maxId"
        :to="'/work/' + (id + 1)"
        class="small-btn shadow-box"
      >
        Next Project
      </router-link>
    </div>

  </section>
</template>

<script setup>
import { useRoute } from "vue-router"
import { ref, watch } from "vue"
import { works } from "@/data/works.js"

// static images
import starImg from "@/assets/images/others/star.png"
import bg1Img from "@/assets/images/others/bg.png"
import floatIconImg from "@/assets/images/others/float-icon.png"

const route = useRoute()

const id = ref(Number(route.params.id))
const work = ref({})

// Load work by ID
const loadWork = () => {
  work.value = works.find(w => w.id === id.value)
}

loadWork()

// WATCH route id change
watch(
  () => route.params.id,
  newId => {
    id.value = Number(newId)
    loadWork()
    window.scrollTo({ top: 0, behavior: "smooth" })
  }
)

// Min/Max IDs
const minId = Math.min(...works.map(w => w.id))
const maxId = Math.max(...works.map(w => w.id))
</script>