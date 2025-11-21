(function () {
  const link = document.getElementById("theme-link");
  const toggle = document.getElementById("theme-toggle");
  const icon = document.getElementById("theme-icon");

  const darkHref = "css/style_nuit.css";
  const lightHref = "css/style.css";
  const sunIcon = "img/soleil.png";
  const moonIcon = "img/lune.png";

  function setTheme(theme){
    if(theme === "dark"){
      link.href = darkHref;
      icon.src = moonIcon;
      icon.alt = "Mode nuit";
    } else {
      link.href = lightHref;
      icon.src = sunIcon;
      icon.alt = "Mode clair";
    }
    localStorage.setItem("theme", theme);
  }

  const saved = localStorage.getItem("theme") || "light";
  setTheme(saved);

  toggle?.addEventListener("click", () => {
    const isDark = link.href.includes("style_nuit.css");
    setTheme(isDark ? "light" : "dark");
  });
})();
