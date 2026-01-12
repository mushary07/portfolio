<template>
  <section class="credential-area">
    <div class="container">
      <div class="gx-row d-flex">
        <!-- SIDEBAR -->
        <div class="credential-sidebar-wrap" data-aos="zoom-in">
          <div class="credential-sidebar text-center">
            <div class="shadow-box">
              <img :src="bgImg" alt="BG" class="bg-img" />

              <div class="img-box">
                <img :src="mushary07" alt="About Me" />
              </div>

              <h2>Mushari H</h2>
              <p>@mushary07</p>

              <ul class="social-links d-flex justify-content-center">
                <li>
                  <a href="https://www.linkedin.com/in/mushary07" target="_blank">
                    <i class="iconoir-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/mushary07" target="_blank">
                    <i class="iconoir-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/mushary07" target="_blank">
                    <i class="iconoir-facebook"></i>
                  </a>
                </li>
              </ul>

              <RouterLink to="/contact" class="theme-btn">
                Contact Me
              </RouterLink>
            </div>
          </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="credential-content flex-1">

          <!-- ABOUT ME -->
          <div class="credential-about" data-aos="zoom-in">
            <h2>About Me</h2>
            <p>
              "Hi, I'm Mushari, and I have 4 years of experience in application development. I've worked on
              building web applications, developing APIs, and integrating front-end technologies like Vue.js.
              I'm skilled in database management, optimizing performance, and ensuring secure, efficient code.
              I'm passionate about learning and improving my skills to deliver quality work."
            </p>
          </div>

          <!-- EXPERIENCE -->
          <div class="credential-edc-exp credential-experience">
            <h2 data-aos="fade-up">Experience</h2>

            <!-- ITEM 1 -->
            <div class="credential-edc-exp-item" data-aos="zoom-in">
              <h4>2023 - Present</h4>
              <h3>Ahsan Solutions</h3>
              <h5>Systems Engineer</h5>
              <p>
                Leading engineering initiatives to design, develop, and optimize scalable web and mobile
                solutions, ensuring performance, security, and reliability across platforms.
              </p>
              <ul>
                <li>Architected high availability, scalable system infrastructures.</li>
                <li>Developed RESTful APIs in <strong>Laravel</strong> and integrated <strong>Vue.js</strong>.</li>
                <li>Implemented <strong>real-time features</strong> using Reverb & Firebase.</li>
                <li>Optimized deployments, database architecture, and caching.</li>
                <li>Delivered user-centric secure solutions with cross-functional teams.</li>
              </ul>
            </div>

            <!-- ITEM 2 -->
            <div class="credential-edc-exp-item" data-aos="zoom-in">
              <h4>2021 - 2023</h4>
              <h3>Ahsan Solutions</h3>
              <h5>Assistant Systems Engineer</h5>
              <p>
                Supported the development and deployment of enterprise-grade solutions with a focus
                on multi-tenant SaaS platforms and system integrations.
              </p>
              <ul>
                <li>Worked on multi-vendor project integrations and performance tuning.</li>
                <li>Implemented <strong>SaaS systems</strong> using Laravel Tenancy.</li>
                <li>Assisted in API + UI development ensuring quality delivery.</li>
                <li>Improved workflows through automation and reusable components.</li>
              </ul>
            </div>
          </div>

          <!-- EDUCATION -->
          <div class="credential-edc-exp credential-education">
            <h2 data-aos="fade-up">Education</h2>

            <div class="credential-edc-exp-item" data-aos="zoom-in">
              <h4>2017 - 2020</h4>
              <h3>Bachelor of Computer Application (BCA)</h3>
              <h5>E.G.S. Pillay Arts & Science College, Nagapattinam</h5>
              <p>
                Studied web development, databases, networking, and system analysis with hands-on academic
                project experience.
              </p>
            </div>

            <div class="credential-edc-exp-item" data-aos="zoom-in">
              <h4>2014 - 2016</h4>
              <h3>Higher Secondary School Certificate (HSC)</h3>
              <h5>St. Mary’s Higher Secondary School, Karaikal</h5>
              <p>
                Specialized in Computer Science & Mathematics, developing strong analytical skills.
              </p>
            </div>
          </div>

          <!-- SKILLS -->
          <div class="skills-wrap">
            <h2 data-aos="fade-up">Skills</h2>

            <div class="d-grid skill-items gap-24 flex-wrap">

              <div class="skill-item" v-for="skill in skills" :key="skill.name" data-aos="zoom-in">
                <span class="percent">{{ skill.percent }}%</span>
                <h3 class="name">{{ skill.name }}</h3>
                <p>{{ skill.desc }}</p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

import bgImg from "@/assets/images/others/bg.png"
import mushary07 from "@/assets/images/home/mushary07.png"

const skills = ref([
  { name: "Laravel", percent: 95, desc: "API & backend development" },
  { name: "Vue.js", percent: 90, desc: "SPA & frontend frameworks" },
  { name: "CodeIgniter", percent: 80, desc: "MVC web applications" },
  { name: "PHP", percent: 92, desc: "Web application logic" },
  { name: "MySQL", percent: 90, desc: "Database design & queries" },
  { name: "Livewire", percent: 85, desc: "Dynamic Laravel components" },
  { name: "TypeScript", percent: 80, desc: "Typed JavaScript" },
  { name: "JavaScript", percent: 88, desc: "Frontend interactivity" },
  { name: "AJAX", percent: 87, desc: "Async data handling" },
  { name: "jQuery", percent: 89, desc: "DOM & UI scripting" },
  { name: "TailwindCSS", percent: 91, desc: "Utility-first styling" },
  { name: "Bootstrap", percent: 88, desc: "Responsive layouts" },
  { name: "Vuetify", percent: 85, desc: "Material UI for Vue" }
]);
</script>
