const hamburgerToggle = document.querySelector(".hamburger-toggle"),
    backMenuButtn = document.querySelector(".offcanvas-nav__back-arrow-buttn"),
    imageContainer = document.querySelector(".hamburger-menu"),
    animation = document.querySelector(".animated-figure"),
    languageSelectorBttns = document.querySelectorAll(".header__mutanto-language-capitals-letters"),
    languageSelectorSetOfBttns = document.querySelectorAll(".header__mutanto-language span"),
    mutantoLogoForDesktop = document.querySelector(".header__mutanto-logo-img-desktop"),
    mutantoLogoForMobiles = document.querySelector(".header__mutanto-logo-img-mobil"),
    mutantoLogoTxt = document.querySelector(".header__mutanto-logo-txt"),
    mutantoLogoTxtDarkMode = document.querySelector(".header__mutanto-logo-txt-dark-mode"),
    mutantoElementCardOne = document.querySelectorAll(".mutanto__elements-card-one"),
    gotoTopButtn = document.querySelector("#gotoTop");
let pageScrollPercentage;
const mutantoLoaderScreen = document.querySelector("#mutanto__loader"),
    isOverflown = ({
        clientHeight: e,
        scrollHeight: t
    }) => t > e;

function activeMutantoMenu() {
    document.querySelector("body").classList.toggle("has-offcanvas");
    const e = animation.style.animationPlayState;
    animation.style.animationPlayState = "running" === e ? "paused" : "running"
}

function managerLanguageSelector(e) {
    getWindowWidth() >= tables && 1 != e.classList.contains("active") && (e.addEventListener("mouseover", (function () {
        "ESP" === e.textContent && document.querySelector(".header__mutanto-select-language").children[2].classList.add("header__mutanto-language-capitals-letters-ENG-moving-right"), this.nextElementSibling.classList.contains("header__mutanto-language-full-word-hide") && this.nextElementSibling.classList.remove("header__mutanto-language-full-word-hide"), this.nextElementSibling.classList.add("header__mutanto-language-full-word-show"), e.style.opacity = 1, e.nextElementSibling.style.opacity = 1
    })), e.addEventListener("mouseleave", (function () {
        "ESP" === e.textContent && document.querySelector(".header__mutanto-select-language").children[2].classList.remove("header__mutanto-language-capitals-letters-ENG-moving-right"), this.nextElementSibling.classList.remove("header__mutanto-language-full-word-show"), this.nextElementSibling.classList.add("header__mutanto-language-full-word-hide"), e.style.opacity = .5, e.nextElementSibling.style.opacity = .5, e.classList.contains("active") && (e.style.opacity = 1)
    })))
}

function bigScreens() {
    let e = getWindowWidth();
    getWindowWidth() >= 2500 ? (e = parseInt(e / 1e3), document.querySelector(".toggle-circle .row").style.transform = "scale(" + Math.ceil(e) + ")") : document.querySelector(".toggle-circle .row").style.transform = "scale(1)"
}

function disableScroll() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop, scrollLeft = window.pageXOffset || document.documentElement.scrollLeft, window.onscroll = function () {
        window.scrollTo(scrollLeft, scrollTop)
    }
}

function enableScroll() {
    window.onscroll = function () { }
}

function myToogleDisplay(e, t) {
    const o = window.getComputedStyle(e).getPropertyValue("display");
    "" != t && e.classList.add(t), e.style.display = "none" == o ? "inline" : "none"
}
document.addEventListener("DOMContentLoaded", (function () {
    bigScreens(), getWindowWidth() <= mobiles && (mutantoLogoTxt.style.display = "none", mutantoLogoTxtDarkMode.style.display = "none"), document.querySelector("#mutanto__cookies_blur").style.height = document.body.offsetHeight + "px", getWindowWidth() >= destktop && (mutantoLogoTxt.style.display = "block", mutantoLogoTxtDarkMode.style.display = "none"), getWindowWidth() <= tables && getWindowWidth() > mobiles && (mutantoLogoTxt.style.display = "block", mutantoLogoTxtDarkMode.style.display = "none"), gotoTopButtn.style.visibility = "hidden", mutantoLoaderScreen.style.visibility = "hidden", "yes" == function (e) {
        const t = document.cookie.split(";");
        let o = null;
        for (const n of t) {
            const [t, a] = n.split("=");
            if (t.trim() === e) {
                o = decodeURIComponent(a);
                break
            }
        }
        return o
    }("mutanto") ? (document.querySelector("#mutanto__cookies").style.display = "none", document.querySelector("#mutanto__cookies_blur").style.display = "none") : (document.querySelector("#mutanto__cookies").style.display = "block", document.querySelector("#mutanto__cookies_blur").style.display = "block")
})), window.addEventListener("resize", (function () {
    bigScreens()
})), hamburgerToggle.addEventListener("click", (function (e) {
    activeMutantoMenu(), pageScrollPercentage >= 2 && ("visible" == gotoTopButtn.style.visibility ? gotoTopButtn.style.visibility = "hidden" : setTimeout((function () {
        gotoTopButtn.style.visibility = "visible"
    }), 300)), getWindowWidth() <= tables && getWindowWidth() > mobiles && (myToogleDisplay(mutantoLogoTxt, "animationFadeIn"), myToogleDisplay(mutantoLogoTxtDarkMode, ""), setTimeout((function () {
        document.querySelector(".header__mutanto-select-language").classList.toggle("header__mutanto-select-language-hidden")
    }), 100)), getWindowWidth() <= mobiles && (myToogleDisplay(mutantoLogoForDesktop, "animationFadeIn"), myToogleDisplay(mutantoLogoForMobiles, "animationFadeIn"), myToogleDisplay(mutantoLogoTxtDarkMode, "animationFadeIn"), setTimeout((function () {
        document.querySelector(".header__mutanto-select-language").classList.toggle("header__mutanto-select-language-hidden")
    }), 100)), getWindowWidth() >= destktop && setTimeout((function () {
        document.querySelector(".header__mutanto-select-language").classList.toggle("header__mutanto-select-language-hidden"), myToogleDisplay(mutantoLogoTxt, "animationFadeIn"), myToogleDisplay(mutantoLogoTxtDarkMode, "")
    }), 100)
})), backMenuButtn.addEventListener("click", (function () {
    activeMutantoMenu(), imageContainer.classList.toggle("clicked"), document.querySelector(".header__mutanto-select-language").classList.toggle("header__mutanto-select-language-hidden"), myToogleDisplay(mutantoLogoTxt, "animationFadeIn"), myToogleDisplay(mutantoLogoTxtDarkMode, "")
})), imageContainer.addEventListener("click", (function () {
    this.classList.toggle("clicked")
})), mutantoElementCardOne.forEach((e => {
    if (getWindowWidth() >= mobiles) {
        let t = e.querySelector(".mutanto__elements-card-one-proyectName");
        e.addEventListener("mouseover", (function (e) {
            t.style.opacity = 1;
            e.target.querySelectorAll(".hidden").forEach((e => {
                e.classList.add("visible")
            }))
        })), e.addEventListener("mouseleave", (function (e) {
            t.style.opacity = .5;
            e.target.querySelectorAll(".hidden").forEach((e => {
                e.classList.remove("visible"), e.classList.add("hidden")
            }))
        }))
    }
})), languageSelectorSetOfBttns.forEach(managerLanguageSelector), document.addEventListener("onreadystatechange", (function () {
    document.readyState, console.log("hola")
}));
const resizeText = ({
    element: e,
    parent: t
}) => {
    let o = 12,
        n = !1;
    for (; !n && o < 20;) e.style.fontSize = `${o}px`, n = isOverflown(t), n || o++;
    e.style.fontSize = o - 1 + "px"
};

function scrollTo(e) {
    const {
        target: t,
        options: o,
        locomotiveScroll: n
    } = e;
    n.scrollTo(t, o)
}
locomotiveScroll = new LocomotiveScroll({
    lenisOptions: {
        wrapper: window,
        content: document.documentElement,
        lerp: .1,
        duration: 1,
        orientation: "vertical",
        gestureOrientation: "vertical",
        smoothWheel: !0,
        smoothTouch: !1,
        wheelMultiplier: 1,
        touchMultiplier: 2,
        normalizeWheel: !0
    }
}), window.addEventListener("hiddenLanguajeSelector", (e => {
    const {
        target: t,
        way: o,
        from: n
    } = e.detail;
    "enter" == o ? document.querySelectorAll(".header__mutanto-language").forEach((e => {
        e.style.visibility = "visible"
    })) : document.querySelectorAll(".header__mutanto-language").forEach((e => {
        e.style.transition = "none", e.style.visibility = "hidden"
    }))
})), window.addEventListener("scrollEventElements", (e => {
    const {
        target: t,
        way: o,
        from: n
    } = e.detail;
    "enter" == o && setTimeout((() => {
        t.classList.add("animationForElements")
    }), 500)
})), window.addEventListener("gotoTop", (e => {
    const {
        progress: t
    } = e.detail;
    let o = parseInt(10 * t);
    gotoTopButtn.style.visibility;
    pageScrollPercentage = o, o >= 2 && "running" != animation.style.animationPlayState ? gotoTopButtn.style.visibility = "visible" : o <= 1 && (gotoTopButtn.style.visibility = "hidden")
}));