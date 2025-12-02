import { ref } from "vue";

export function useTheme() {
  const theme = ref(localStorage.getItem("theme") || "light");

  // SVG ICONS
  const sunIcon =
    '<path fill="currentColor" d="M12 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zM4.22 4.22a1 1 0 011.42 0L7.05 5.63a1 1 0 01-1.42 1.42L4.22 5.64a1 1 0 010-1.42zM2 12a1 1 0 011-1h1a1 1 0 110 2H3a1 1 0 01-1-1zm2.22 7.78a1 1 0 011.42-1.42L7.05 18.37a1 1 0 11-1.42 1.42l-1.41-1.41zM12 21a1 1 0 011-1h0a1 1 0 010 2h0a1 1 0 01-1-1zm7.78-2.22a1 1 0 00-1.42-1.42L16.95 18.37a1 1 0 101.42 1.42l1.41-1.41zM21 12a1 1 0 00-1-1h-1a1 1 0 000 2h1a1 1 0 001-1zm-2.22-7.78a1 1 0 00-1.42 1.42l1.41 1.41a1 1 0 001.42-1.42L18.78 4.22zM12 6a6 6 0 000 12 6 6 0 000-12z"/>';
  
  const moonIcon = `<path fill="currentColor" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>`;

  const currentIcon = ref("");

  const applyTheme = (t) => {
    const themeLink = document.getElementById("theme-style");

    themeLink.href =
      t === "dark"
        ? "/assets/css/style.css"
        : "/assets/css/style-light.css";

    currentIcon.value = t === "dark" ? sunIcon : moonIcon;

    localStorage.setItem("theme", t);
  };

  const toggleTheme = () => {
    theme.value = theme.value === "dark" ? "light" : "dark";
    applyTheme(theme.value);
  };

  // Initialize on page load
  applyTheme(theme.value);

  return { theme, currentIcon, toggleTheme };
}
