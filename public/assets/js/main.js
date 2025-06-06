(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").addClass("shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });
})(jQuery);

//------------------------------------ Custom
const theme1 = {
  primary: "#953700",
  secondary: "#be5111",
  light: "#F6F7FC",
  dark: "#15233C",
  overlay_color: "rgba(175, 64, 0, 0.9)",
};

const theme2 = {
  primary: "#015FC9",
  secondary: "#0DD3F1",
  light: "#F6F7FC",
  dark: "#15233C",
  overlay_color: "rgba(1, 95, 201, 0.9)",
};

// Function to apply the theme
function applyTheme(theme) {
  const root = document.documentElement;
  root.style.setProperty("--primary", theme.primary);
  root.style.setProperty("--secondary", theme.secondary);
  root.style.setProperty("--light", theme.light);
  root.style.setProperty("--dark", theme.dark);
  root.style.setProperty("--overlay-color", theme.overlay_color);
}

// Get stored theme or default to theme1
let currentTheme = localStorage.getItem("theme") === "theme2" ? 2 : 1;
applyTheme(currentTheme === 1 ? theme1 : theme2);

// Toggle on button click
document.getElementById("themeToggleBtn").addEventListener("click", () => {
  currentTheme = currentTheme === 1 ? 2 : 1;
  const selectedTheme = currentTheme === 1 ? theme1 : theme2;

  applyTheme(selectedTheme);
  localStorage.setItem("theme", currentTheme === 1 ? "theme1" : "theme2");
});
