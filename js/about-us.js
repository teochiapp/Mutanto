const mutantoStaffPics1 = document.querySelectorAll(
    ".mutanto__elements-staffPic-images .mutanto__elements-staffPic-images-1"
  ),
  mutantoStaffPics2 = document.querySelectorAll(
    ".mutanto__elements-staffPic-images .mutanto__elements-staffPic-images-2"
  ),
  mutantoStaffPicsBackground = document.querySelectorAll(
    ".mutanto__elements-staffPic-images-background"
  ),
  mutantoStaffPic = document.querySelectorAll(".mutanto__elements-staffPic");

document.addEventListener("DOMContentLoaded", function () {
  // Añadir clases iniciales
  mutantoStaffPics2.forEach((e) => {
    e.classList.add("mutanto__elements-staffPic-images-back");
  });

  mutantoStaffPicsBackground.forEach((e) => {
    e.classList.add("mutanto__elements-staffPic-images-background-hidden");
  });

  if (getWindowWidth() >= destktop) {
    // Evento mouseenter
    mutantoStaffPic.forEach((e) => {
      e.querySelector(".mutanto__elements-staffPic-images").addEventListener(
        "mouseenter",
        function () {
          e.style.zIndex = "2";

          const t = e.querySelector(".mutanto__elements-staffPic-images-1");
          const s = e.querySelector(".mutanto__elements-staffPic-images-2");
          t.classList.add("mutanto__elements-staffPic-hidden");
          s.classList.remove("mutanto__elements-staffPic-visible");
          s.classList.remove("mutanto__elements-staffPic-images-back");
          s.classList.add("mutanto__elements-staffPic-visible");

          const a = e.querySelector(
            ".mutanto__elements-staffPic-images-background"
          );
          a.classList.remove("mutanto__elements-staffPic-images-background-hidden");
          a.classList.add("mutanto__elements-staffPic-images-background-visible");
        }
      );
    });

    // Evento mouseleave
    mutantoStaffPic.forEach((e) => {
      e.querySelector(".mutanto__elements-staffPic-images").addEventListener(
        "mouseleave",
        function () {
          e.style.zIndex = "0";

          const t = e.querySelector(".mutanto__elements-staffPic-images-1");
          const s = e.querySelector(".mutanto__elements-staffPic-images-2");
          t.classList.remove("mutanto__elements-staffPic-hidden");
          s.classList.remove("mutanto__elements-staffPic-visible");
          s.classList.add("mutanto__elements-staffPic-images-back");

          const a = e.querySelector(
            ".mutanto__elements-staffPic-images-background"
          );
          a.classList.remove("mutanto__elements-staffPic-images-background-visible");
          a.classList.add("mutanto__elements-staffPic-images-background-hidden");
          
        }
      );
    });
  }

  // Configuración para dispositivos móviles
  if (getWindowWidth() >= mobiles && getWindowWidth() <= tables) {
    mutantoStaffPic.forEach((e) => {
      const t = e.querySelector(".mutanto__elements-staffPic-images");
      t.addEventListener("click", function () {
        const s = e.querySelector(".mutanto__elements-staffPic-images-background");

        if (
          !s.classList.contains("mutanto__elements-staffPic-images-background-visible")
        ) {
          e.style.zIndex = "2";
          s.classList.remove("mutanto__elements-staffPic-images-background-hidden");
          s.classList.add("mutanto__elements-staffPic-images-background-visible");
          t.querySelector(".mutanto__elements-staffPic-images-2").classList.remove(
            "mutanto-services___hide"
          );
          t.querySelector(".mutanto__elements-staffPic-images-2").classList.add(
            "mutanto__elements-staffPic-images-back"
          );
        } else {
          e.style.zIndex = "1";
          s.classList.remove("mutanto__elements-staffPic-images-background-visible");
          s.classList.add("mutanto__elements-staffPic-images-background-hidden");
          t.querySelector(".mutanto__elements-staffPic-images-2").classList.remove(
            "mutanto__elements-staffPic-images-back"
          );
          t.querySelector(".mutanto__elements-staffPic-images-2").classList.add(
            "mutanto-services___hide"
          );
        }
      });
    });

    // Evento mouseleave para móviles
    mutantoStaffPic.forEach((e) => {
      e.querySelector(".mutanto__elements-staffPic-images").addEventListener(
        "mouseleave",
        function () {
          e.style.zIndex = "1";

          const t = e.querySelector(".mutanto__elements-staffPic-images-background");
          t.classList.remove("mutanto__elements-staffPic-images-background-visible");
          t.classList.add("mutanto__elements-staffPic-images-background-hidden");
        }
      );
    });
  }

  // Configuración para dispositivos muy pequeños
  if (getWindowWidth() <= mobiles) {
    mutantoStaffPic.forEach((e) => {
      const t = e.querySelector(".mutanto__elements-staffPic-images-background");
      t.classList.remove("mutanto__elements-staffPic-images-background-hidden");
      t.classList.add("mutanto__elements-staffPic-images-background-visible");
    });
  }
});

window.addEventListener("progressEvent", (e) => {
  const { target: t, way: s, from: a } = e.detail;
  "enter" == s
      ? (document.querySelector("main").classList.remove("whiteTransition"),
        document.querySelector(".header").classList.remove("whiteTransition"),
        document.querySelector("main").classList.add("blackTransition"),
        document.querySelector(".header").classList.add("blackTransition"),
        getWindowWidth() >= destktop ? (document.querySelector(".header").style.height = "149px") : getWindowWidth() <= mobiles && (document.querySelector(".header").style.height = "90px"),
        (document.querySelector(".header").style.zIndex = "2"),
        (document.querySelector(".header__mutanto-logo-txt img").src = "/img/muntanto-logo-text-uix-ux-web-desing.svg"),
        (document.querySelector(".header__mutanto-logo-txt-dark-mode").style.display = "none"),
        (document.querySelector(".mutanto-element__animated-figure.prefooter").style.filter = "invert(92%) sepia(0%) saturate(7486%) hue-rotate(78deg) brightness(112%) contrast(100%)"))
      : "leave" == s &&
        (document.querySelector("main").classList.remove("blackTransition"),
        document.querySelector(".header").classList.remove("blackTransition"),
        document.querySelector("main").classList.add("whiteTransition"),
        document.querySelector(".header").classList.add("whiteTransition"),
        getWindowWidth() >= destktop ? (document.querySelector(".header").style.height = "149px") : getWindowWidth() <= mobiles && (document.querySelector(".header").style.height = "80px"),
        (document.querySelector(".header__mutanto-logo-txt-dark-mode").style.display = "none"),
        (document.querySelector(".header__mutanto-logo-txt img").src = "/img/muntanto-logo-dark-mode-text-uix-ux-web-desing.svg"),
        (document.querySelector(".mutanto-element__animated-figure.prefooter").style.filter = "invert(0%) sepia(0%) saturate(7475%) hue-rotate(168deg) brightness(104%) contrast(106%)"),
        setTimeout(function () {
            document.querySelector("main").classList.remove("blackTransition"),
                document.querySelector(".header").classList.remove("blackTransition"),
                document.querySelector("main").classList.remove("whiteTransition"),
                document.querySelector(".header").classList.remove("whiteTransition");
        }, 800));
}),


// Otros eventos y configuraciones...

$(document).ready(function () {
  const e =
    '<div class="mutanto__elements-arrow-rigth "><i class="fa-solid fa-arrow-right-long"></i></div>';
  const t =
    '<div class="mutanto__elements-arrow-rigth"><i class="fa-solid fa-arrow-left-long"></i></div>';
  const s = $(".mutanto-services__staffPics");

  if ($(window).width() <= mobiles) {
    s.addClass("owl-carousel");
    s.owlCarousel({
      items: 1.1,
      margin: 0,
      loop: true,
      nav: true,
      navText: [t, e],
      autoplay: true,
      center: true,
      dots: false,
      responsiveClass: true,
      responsive: {
        300: { items: 1, center: true, margin: 0, nav: true, navText: [t, e] },
        380: { items: 1.5, center: true, margin: 66, nav: true, navText: [t, e] },
        500: { items: 1.5, center: true, margin: 66, nav: true, navText: [t, e] },
      },
    });
  }
});

// Escalado
if (scale == 1) {
  const divsForScaleSupportServices = [".mutanto-services___aboutAs"];
  divsForScaleSupportServices.forEach((d) => {
    const div = document.querySelector(d);
    div.classList.add(d.replace(".", "").replace("#", "") + "-scale-support");
  });
  document.querySelector(".header").classList.add("blackTransition-scale-support");
}
