🌐 Personal Portfolio — Vue 3 + Vite

A modern, fast, and fully responsive personal portfolio website built with Vue 3, Vite, and clean reusable components.
This portfolio showcases projects, experience, skills, and contact information with a smooth UI, dark/light theme toggle, and optimized performance.

🚀 Features
🎨 UI / UX

Responsive design (mobile, tablet, desktop)

Smooth animations using AOS

Dark/Light theme toggle

Central navigation with mobile menu drawer

Modern layout with reusable components

🧩 Frontend

Vue 3 (Composition API + <script setup>)

Vue Router

Vite for fast development & optimized build

Auto imports for assets from public directory

Project data stored cleanly in JS/JSON files

📂 Project Sections

Home — Hero section, intro, call-to-action

About — Bio, experience, skills

Works / Projects — All projects with details page

Contact — Contact form + social links

🛠️ Tech Stack
Technology	Purpose
Vue 3	Core frontend framework
Vite	Fast dev server & bundler
Vue Router	Page navigation
AOS	Scroll animations
SCSS / CSS	Styling
Public Assets	Images, icons, styles
📁 Project Structure
.
├── public/
│   └── assets/
│       ├── images/
│       └── css/
├── src/
│   ├── components/
│   ├── composables/
│   ├── data/
│   ├── pages/
│   ├── router/
│   ├── App.vue
│   └── main.js
└── vite.config.js

▶️ Getting Started
1️⃣ Clone the repository
git clone https://github.com/yourusername/your-portfolio.git
cd your-portfolio

2️⃣ Install dependencies
npm install

3️⃣ Start development server
npm run dev

4️⃣ Build for production
npm run build

5️⃣ Preview production build
npm run preview

🌙 Theme System

Theme is handled via a global composable:

Saves theme to localStorage

Updates <body> class

Automatically loads last used theme

Toggles between light and dark icons

This makes images accessible globally without imports.

📬 Contact

If you want to collaborate or hire me:

Email: mushari1999@gmail.com

LinkedIn: https://linkedin.com/mushary07

📄 License

MIT License — free to use and modify.