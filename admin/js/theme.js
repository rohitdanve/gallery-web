(function() {
  const themes = {
    LIGHT: "light-theme",
    DARK: "dark-theme",
    SEMI_DARK: "semi-dark"
  };

  const $html = $("html");
  const $icon = $(".mode-icon ion-icon");

  function applyTheme(theme) {
    $html.removeClass().addClass(theme); // safer: remove all classes first
    localStorage.setItem("selectedTheme", theme);

    // Change icon based on theme
    if (theme === themes.DARK) {
      $icon.attr("name", "sunny-outline");
    } else {
      $icon.attr("name", "moon-outline");
    }
  }

  function getSavedTheme() {
    const savedTheme = localStorage.getItem("selectedTheme");
    if (savedTheme && Object.values(themes).includes(savedTheme)) {
      return savedTheme;
    }
    return themes.LIGHT; // fallback default
  }

  $(document).ready(function() {
    // Apply saved theme on every page load
    applyTheme(getSavedTheme());

    // Toggle on icon click (light <-> dark only)
    $(".dark-mode-icon").on("click", function() {
      const currentTheme = getSavedTheme();
      if (currentTheme === themes.DARK) {
        applyTheme(themes.LIGHT);
      } else {
        applyTheme(themes.DARK);
      }
    });

    // Direct theme buttons
    $("#LightTheme").on("click", function() {
      applyTheme(themes.LIGHT);
    });
    $("#DarkTheme").on("click", function() {
      applyTheme(themes.DARK);
    });
    $("#SemiDark").on("click", function() {
      applyTheme(themes.SEMI_DARK);
    });
  });
}
)();






