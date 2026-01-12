<template>
    <section class="contact-area">
        <div class="container">
            <div class="gx-row d-flex justify-content-between gap-24">

                <!-- LEFT CONTACT INFO -->
                <div class="contact-infos">
                    <h3 data-aos="fade-up">Contact Info</h3>

                    <ul class="contact-details">
                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="iconoir-mail"></i>
                            </div>
                            <div class="right">
                                <span>Mail Us</span>
                                <h4>mushari1999@gmail.com</h4>
                            </div>
                        </li>

                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="iconoir-phone"></i>
                            </div>
                            <div class="right">
                                <span>Contact Us</span>
                                <h4>+91 989-417-5023</h4>
                            </div>
                        </li>

                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="iconoir-map"></i>
                            </div>
                            <div class="right">
                                <span>Location</span>
                                <h4>
                                    67 Paris Nagar, Vayalkarai Street, <br />
                                    Karaikal
                                </h4>
                            </div>
                        </li>
                    </ul>

                    <h3 data-aos="fade-up">Social Info</h3>
                    <ul class="social-links d-flex align-center" data-aos="zoom-in">
                        <li>
                            <a class="shadow-box" href="https://www.linkedin.com/in/mushary07" target="_blank"
                                rel="noopener">
                                <i class="iconoir-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a class="shadow-box" href="https://www.instagram.com/mushary07" target="_blank"
                                rel="noopener">
                                <i class="iconoir-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="shadow-box" href="https://www.facebook.com/mushary07" target="_blank"
                                rel="noopener">
                                <i class="iconoir-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- CONTACT FORM -->
                <div data-aos="zoom-in" class="contact-form">
                    <div class="shadow-box">

                        <img :src="bgImg" alt="BG" class="bg-img" />
                        <img :src="floatIcon" alt="" />

                        <h1>Let’s work <span>together.</span></h1>

                        <!-- SUCCESS MESSAGE -->
                        <div v-if="success" class="alert alert-success alert-dismissible fade show">
                            {{ success }}
                            <button class="btn-close" @click="success = null"></button>
                        </div>

                        <!-- ERRORS -->
                        <div v-if="errors.length" class="alert alert-danger alert-dismissible fade show">
                            <ul class="mb-0">
                                <li v-for="(err, i) in errors" :key="i">{{ err }}</li>
                            </ul>
                            <button class="btn-close" @click="errors = []"></button>
                        </div>

                        <form @submit.prevent="submitForm">
                            <div class="input-group">
                                <input v-model="form.name" type="text" placeholder="Name *" required />
                            </div>

                            <div class="input-group">
                                <input v-model="form.email" type="email" placeholder="Email *" required />
                            </div>

                            <div class="input-group">
                                <input v-model="form.subject" type="text" placeholder="Your Subject *" required />
                            </div>

                            <div class="input-group">
                                <textarea v-model="form.message" placeholder="Your Message *" required></textarea>
                            </div>

                            <div class="input-group">
                                <button class="theme-btn submit-btn" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from "vue"

import bgImg from "@/assets/images/others/bg.png"
import floatIcon from "@/assets/images/contact/float-icon.png"

const form = ref({
    name: "",
    email: "",
    subject: "",
    message: "",
})

const success = ref(null)
const errors = ref([])

const submitForm = async () => {
    errors.value = []
    success.value = null

    try {
        const response = await fetch("https://your-backend.com/api/contact", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(form.value),
        })

        const data = await response.json()

        if (!response.ok) {
            errors.value = Object.values(data.errors || { error: data.message })
            return
        }

        success.value = "Message sent successfully!"
        form.value = { name: "", email: "", subject: "", message: "" }
    } catch (error) {
        errors.value = ["Something went wrong, try again."]
    }
}
</script>
