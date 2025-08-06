

(function () {
  // Constants
  const THEMES = {
    LIGHT: "light-theme",
    DARK: "dark-theme",
    SEMI_DARK: "semi-dark",
  };

  const savedTheme = localStorage.getItem("selectedTheme");
  const initialTheme = Object.values(THEMES).includes(savedTheme)
    ? savedTheme
    : THEMES.LIGHT;

  // Apply theme immediately to avoid FOUC
  document.documentElement.className = initialTheme;
})();