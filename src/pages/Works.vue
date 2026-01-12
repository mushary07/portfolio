<template>
    <section class="projects-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-heading" data-aos="fade-up">
                        <img :src="starImg" alt="Star" />
                        All Projects
                        <img :src="starImg" alt="Star" />
                    </h1>
                </div>

                <div class="col-md-4" v-for="item in works" :key="item.id">
                    <div data-aos="zoom-in">
                        <div class="project-item shadow-box">
                            <router-link class="overlay-link" :to="'/work/' + item.id"></router-link>

                            <img :src="bgImg" alt="BG" class="bg-img" />

                            <div class="project-img">
                                <img :src="item.thumbnail" alt="Project" />
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="project-info">
                                    <p>{{ item.caption }}</p>
                                    <h1>{{ item.name }}</h1>
                                </div>

                                <router-link :to="'/work/' + item.id" class="project-btn">
                                    <img :src="iconImg" alt="Button" />
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { works } from "@/data/works.js"

// Import static images
import starImg from "/assets/images/others/star.png"
import bgImg from "/assets/images/others/bg.png"
import iconImg from "/assets/images/others/icon.svg"
</script>
