<template>
  <section class="about-area">
    <div class="container">
      <div class="row">

        <!-- LEFT SIDE -->
        <div class="col-md-6" data-aos="zoom-in">
          <div class="about-me-box shadow-box">
            <RouterLink class="overlay-link" to="/about"></RouterLink>

            <img :src="bgImg" alt="BG" class="bg-img" />

            <div class="img-box">
              <img :src="musharyImg" alt="About Me" />
            </div>

            <div class="infos">
              <h4>FULL-STACK DEVELOPER</h4>
              <h1>MUSHARI</h1>
              <p>
                I’m a Laravel and Vue.js developer passionate about crafting scalable and responsive web
                solutions.
              </p>

              <a href="#" class="about-btn">
                <img :src="iconSvg" alt="Button" />
              </a>
            </div>
          </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-6">
          <div class="about-credentials-wrap">

            <!-- MARQUEE -->
            <div data-aos="zoom-in">
              <div class="banner shadow-box">
                <div class="marquee">
                  <div>
                    <span>
                      Vue.js + Ionic PWA for <b>order tracking</b>
                      <img :src="dotSvg" alt="dot" />

                      Real-time updates, notifications & responsive design
                      <img :src="dotSvg" alt="dot" />
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!-- CREDENTIAL + PROJECT BOXES -->
            <div class="gx-row d-flex gap-24">

              <!-- Credentials -->
              <div data-aos="zoom-in">
                <div class="about-crenditials-box info-box shadow-box h-full">
                  <RouterLink class="overlay-link" to="/credential"></RouterLink>

                  <img :src="bgImg" alt="BG" class="bg-img" />
                  <img :src="projectsImg" alt="Sign" />

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="infos">
                      <h4>more about me</h4>
                      <h1>Credentials</h1>
                    </div>

                    <RouterLink to="/credential" class="about-btn">
                      <img :src="iconSvg" alt="Button" />
                    </RouterLink>
                  </div>
                </div>
              </div>

              <!-- Projects -->
              <div data-aos="zoom-in">
                <div class="about-project-box info-box shadow-box h-full">
                  <RouterLink class="overlay-link" to="/works"></RouterLink>

                  <img :src="bgImg" alt="BG" class="bg-img" />
                  <img :src="projectsImg" alt="My Works" />

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="infos">
                      <h4>SHOWCASE</h4>
                      <h1>Projects</h1>
                    </div>

                    <a href="#" class="about-btn">
                      <img :src="iconSvg" alt="Button" />
                    </a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>

      <!-- SECOND ROW -->
      <div class="row mt-24">

        <!-- Experience -->
        <div class="col-md-6" data-aos="zoom-in">
          <div class="about-client-box info-box shadow-box">
            <img :src="bgImg" alt="BG" class="bg-img" />

            <div class="clients d-flex align-items-start gap-24 justify-content-center">

              <div class="client-item">
                <h1>04</h1>
                <p>Years <br />Experience</p>
              </div>

              <div class="client-item">
                <h1>+12</h1>
                <p>CLIENTS <br />WORLDWIDE</p>
              </div>

              <div class="client-item">
                <h1>+12</h1>
                <p>Total <br />Projects</p>
              </div>

            </div>
          </div>
        </div>

        <!-- Contact -->
        <div class="col-md-6" data-aos="zoom-in">
          <div class="about-contact-box info-box shadow-box">
            <RouterLink class="overlay-link" to="/contact"></RouterLink>

            <img :src="bgImg" alt="BG" class="bg-img" />
            <img :src="floatIcon" alt="Icon" class="star-icon" />

            <h1>
              Let's <br />work <span>together.</span>
            </h1>

            <a href="#" class="about-btn">
              <img :src="iconSvg" alt="Button" />
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
import { RouterLink } from "vue-router"

/* Import images from /src/assets */
import bgImg from "@/assets/images/others/bg.png"
import musharyImg from "@/assets/images/home/mushary07.png"
import iconSvg from "@/assets/images/others/icon.svg"
import dotSvg from "@/assets/images/home/dot.svg"
import projectsImg from "@/assets/images/home/projects.png"
import floatIcon from "@/assets/images/others/float-icon.png"
</script>
