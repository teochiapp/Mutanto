//Get elements of the webpage
const hamburgerToggle = document.querySelector(".hamburger-toggle");
const backMenuButtn = document.querySelector(".offcanvas-nav__back-arrow-buttn");
const imageContainer = document.querySelector(".hamburger-menu");
const animation = document.querySelector(".animated-figure");

const languageSelectorBttns = document.querySelectorAll('.header__mutanto-language-capitals-letters');
const languageSelectorSetOfBttns = document.querySelectorAll(".header__mutanto-language span");

const mutantoLogoForDesktop = document.querySelector(".header__mutanto-logo-img-desktop");
const mutantoLogoForMobiles = document.querySelector(".header__mutanto-logo-img-mobil");

const mutantoLogoTxt = document.querySelector(".header__mutanto-logo-txt");
const mutantoLogoTxtDarkMode = document.querySelector(".header__mutanto-logo-txt-dark-mode");

const mutantoElementCardOne = document.querySelectorAll(".mutanto__elements-card-one");

//goto top button
const gotoTopButtn = document.querySelector("#gotoTop");
let pageScrollPercentage

//loader
const mutantoLoaderScreen = document.querySelector("#mutanto__loader");

const isOverflown = ({ clientHeight, scrollHeight }) => scrollHeight > clientHeight

//Load Page


document.addEventListener("DOMContentLoaded", function () {
    
    bigScreens();
    
    //document.querySelector("header").style.position = "relative";


    //SetUp owl-carousel ---- HOME 
    if (mutantoLogoTxt && mutantoLogoTxtDarkMode) {
        if (getWindowWidth() <= mobiles) {
            mutantoLogoTxt.style.display = "none";
            mutantoLogoTxtDarkMode.style.display = "none";
        }

        //Home 
        if (getWindowWidth() >= destktop) {
            mutantoLogoTxt.style.display = "block";
            mutantoLogoTxtDarkMode.style.display = "none";
        }

        if (getWindowWidth() <= tables && getWindowWidth() > mobiles) {
            mutantoLogoTxt.style.display = "block";
            mutantoLogoTxtDarkMode.style.display = "none";
        }
    }

    //Hidden GotoTopButtons
    if (gotoTopButtn) {
        gotoTopButtn.style.visibility = "hidden";
    }

    //Loading Screen
    if (mutantoLoaderScreen) {
        mutantoLoaderScreen.style.visibility = "hidden";
    }

    //Cookies 
    
    function getCookie(name) {
        const todasLasCookies = document.cookie;

        // Convertir el string en un array de pares clave-valor
        const cookiesArray = todasLasCookies.split(';');
      
        // Buscar la cookie con el nombre especificado
        let valorCookie = null;
        for (const cookie of cookiesArray) {
          const [nombre, valor] = cookie.split('=');
          if (nombre.trim() === name) {
            valorCookie = decodeURIComponent(valor);
            break;
          }
        }
        return valorCookie;
    }

    if(getCookie("mutanto") == "yes") {
        document.querySelector("#mutanto__cookies").style.display = "none";

    } else {
        document.querySelector("#mutanto__cookies").style.display = "block";
    
    }



    //Setup Table One
   /* let hiddeElementTabOne = document.querySelectorAll('.mutanto__elements-tabOne-content h5:nth-child(n+2)');
    hiddeElementTabOne.forEach(e => {
        e.classList.add("mutanto__elements-tabOne-content-displayHidden");
    });
    hiddeElementTabOne = document.querySelector('.mutanto__elements-tabOne-content h5:nth-child(1)');
    hiddeElementTabOne.classList.add("mutanto__elements-tabOne-content-displayBlock");
*/


});

//Resize Page
window.addEventListener("resize", function () {
    //Set Up for big screen menu
    bigScreens();

});




//Open canvas menu div, change menu and logo color and stop or play the Mutanto Ovnis animation. 
function activeMutantoMenu() {
    //document.querySelector("#header__mutanto-logo span").classList.toggle("header__mutanto-logo-black");
    document.querySelector("body").classList.toggle("has-offcanvas");
    //languageSelectorSetOfBttns.forEach(element => {
    //  element.classList.toggle("header__mutanto-logo-black");
    //})
    const running = animation.style.animationPlayState;
    animation.style.animationPlayState = running === 'running' ? 'paused' : 'running';
}

// Show and hide  menu
if (hamburgerToggle) {
    hamburgerToggle.addEventListener("click", function (event) {
        activeMutantoMenu();
        if (pageScrollPercentage >= 2) {
            if (gotoTopButtn && gotoTopButtn.style.visibility == "visible") {
                gotoTopButtn.style.visibility = "hidden";
            } else if (gotoTopButtn) {
                setTimeout(function (){
                    gotoTopButtn.style.visibility = "visible";
                },300);
            }
        }

        //Only for mobiles and tables
        if (getWindowWidth() <= tables && getWindowWidth() > mobiles) {
            myToogleDisplay(mutantoLogoTxt, 'animationFadeIn');
            myToogleDisplay(mutantoLogoTxtDarkMode, '');
            setTimeout(function () {
                const el = document.querySelector(".header__mutanto-select-language");
                if (el) el.classList.toggle("header__mutanto-select-language-hidden");
            }, 100);
        }
        //Only mobiles
        if (getWindowWidth() <= mobiles) {
            myToogleDisplay(mutantoLogoForDesktop, 'animationFadeIn');
            myToogleDisplay(mutantoLogoForMobiles, 'animationFadeIn');
            myToogleDisplay(mutantoLogoTxtDarkMode, 'animationFadeIn');
            setTimeout(function () {
                const el = document.querySelector(".header__mutanto-select-language");
                if (el) el.classList.toggle("header__mutanto-select-language-hidden");
            }, 100);
        }
        // Only Desktop
        if (getWindowWidth() >= destktop) {
            setTimeout(function () {
                const el = document.querySelector(".header__mutanto-select-language");
                if (el) el.classList.toggle("header__mutanto-select-language-hidden");
                myToogleDisplay(mutantoLogoTxt, 'animationFadeIn');
                myToogleDisplay(mutantoLogoTxtDarkMode, '');
            }, 100);
        }
    });
}

// Hide menu and replace the menu imagen to first imgen
if (backMenuButtn) {
    backMenuButtn.addEventListener("click", function () {
        activeMutantoMenu();
        if (imageContainer) imageContainer.classList.toggle("clicked");

        const el = document.querySelector(".header__mutanto-select-language");
        if (el) el.classList.toggle("header__mutanto-select-language-hidden");
        myToogleDisplay(mutantoLogoTxt, 'animationFadeIn');
        myToogleDisplay(mutantoLogoTxtDarkMode, '');
    });
}

//Change the images of the menu replace the menu imagen to first imgen
if (imageContainer) {
    imageContainer.addEventListener("click", function () {
        this.classList.toggle("clicked");
    });
}

//Set antimations and behavior of Card One
mutantoElementCardOne.forEach(e => {
    if (getWindowWidth() >= mobiles) {
        let proyectName = e.querySelector(".mutanto__elements-card-one-proyectName");

        e.addEventListener("mouseover", function (e) {
            proyectName.style.opacity = 1;
            const hiddenElement = e.target.querySelectorAll(".hidden");
            hiddenElement.forEach(e => {
                e.classList.add("visible");
            });


        })
        e.addEventListener("mouseleave", function (e) {
            proyectName.style.opacity = 0.5;
            //proyectName.style.color = "#FFFFFF";
            const hiddenElement = e.target.querySelectorAll(".hidden");
            hiddenElement.forEach(e => {
                e.classList.remove("visible");
                e.classList.add("hidden");
            })
        })
    }
});

/*
//Set Actions of Tab #1
mutantoTabOneHeaderButtons.forEach(element => {
    element.addEventListener("click", function () {
        let elementToHide = document.querySelectorAll(".mutanto__elements-tabOne-content h5");
        elementToHide.forEach(e => {
            e.classList.remove("mutanto__elements-tabOne-content-displayBlock");
            e.classList.add("mutanto__elements-tabOne-content-displayHidden");
        })
        const contetId = element.getAttribute("btnaction");
        let elementToShow = document.querySelector("#" + contetId);
        elementToShow.classList.remove("mutanto__elements-tabOne-content-displayHidden");
        elementToShow.classList.add("mutanto__elements-tabOne-content-displayBlock");
    })
});



*/
languageSelectorSetOfBttns.forEach(managerLanguageSelector);
//Animation and behavior of the Language Selector menu
function managerLanguageSelector(element) {
    if (getWindowWidth() >= tables && element.classList.contains("active") != true) {
        element.addEventListener("mouseover", function () {
            if (element.textContent === "ESP") {
                //document.querySelector('.header__mutanto-select-language').children[2].style.position = "relative";
                //.children[2].style.left = "50px";
                document.querySelector('.header__mutanto-select-language').children[2].classList.add("header__mutanto-language-capitals-letters-ENG-moving-right");
            }

            if (this.nextElementSibling.classList.contains("header__mutanto-language-full-word-hide")) {
                this.nextElementSibling.classList.remove("header__mutanto-language-full-word-hide");
            }
            this.nextElementSibling.classList.add("header__mutanto-language-full-word-show");
            element.style.opacity = 1;
            element.nextElementSibling.style.opacity = 1;

        });

        element.addEventListener("mouseleave", function () {
            if (element.textContent === "ESP") {
                //document.querySelector('.header__mutanto-select-language').children[2].style.left = "0px";
                document.querySelector('.header__mutanto-select-language').children[2].classList.remove("header__mutanto-language-capitals-letters-ENG-moving-right");
            }

            this.nextElementSibling.classList.remove("header__mutanto-language-full-word-show");
            this.nextElementSibling.classList.add("header__mutanto-language-full-word-hide");
            element.style.opacity = 0.5;
            element.nextElementSibling.style.opacity = 0.5;
            if (element.classList.contains('active')) {
                element.style.opacity = 1;
            }

        });
    }
}


//Circle support for 4 and 8k
function bigScreens() {
    let windowWhidth = getWindowWidth();
    if (getWindowWidth() >= 2500) {
        windowWhidth = parseInt(windowWhidth / 1000);
        document.querySelector(".toggle-circle .row").style.transform = "scale(" + Math.ceil(windowWhidth) + ")";
    } else {
        document.querySelector(".toggle-circle .row").style.transform = "scale(1)";
    }
}


//Loader 
document.addEventListener("onreadystatechange", function () {
    
    if (document.readyState !== "complete") {
        
        //mutantoLoaderScreen.style.visibility = "hidden";

    } else {
        
        //mutantoLoaderScreen.style.visibility = "visible";
    }
})


function disableScroll() {

    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,


        window.onscroll = function () {
            window.scrollTo(scrollLeft, scrollTop);
        };
}

function enableScroll() {
    window.onscroll = function () { };
}


function myToogleDisplay(element, className) {
    const elementStyle = window.getComputedStyle(element).getPropertyValue("display");
    if (className != '') {
        element.classList.add(className);
    }
    if (elementStyle == "none") {
        element.style.display = "inline";
    } else {
        element.style.display = "none";
    }
}




const resizeText = ({ element, parent }) => {
    let i = 12 // let's start with 12px
    let overflow = false
    const maxSize = 20 // very huge text size

    while (!overflow && i < maxSize) {
        element.style.fontSize = `${i}px`
        overflow = isOverflown(parent)
        if (!overflow) i++
    }

    // revert to last state where no overflow happened:
    element.style.fontSize = `${i - 1}px`
}


locomotiveScroll = (function () {
    if (typeof LocomotiveScroll === 'undefined') {
        return null;
    }
    const locomotiveScroll = new LocomotiveScroll({
        lenisOptions: {
            wrapper: window,
            content: document.documentElement,
            lerp: 0.1,
            duration: 1,
            orientation: "vertical",
            gestureOrientation: "vertical",
            smoothWheel: true,
            smoothTouch: false,
            wheelMultiplier: 1,
            touchMultiplier: 2,
            normalizeWheel: true
        }
    })
    return locomotiveScroll
})()

function scrollTo(params) {
    const {
        target,
        options,
        locomotiveScroll
    } = params;
    locomotiveScroll.scrollTo(target, options);
}



window.addEventListener('hiddenLanguajeSelector', (e) => {
    const {
        target,
        way,
        from
    } = e.detail;
    if (way == "enter") {
        document.querySelectorAll(".header__mutanto-language").forEach(element => {
            element.style.visibility = "visible";
        });
    } else {
        document.querySelectorAll(".header__mutanto-language").forEach(element => {
            element.style.transition = "none";
            element.style.visibility = "hidden";
        });
    }
});

window.addEventListener("scrollEventElements", (e) => {
    const {
        target,
        way,
        from
    } = e.detail;
    if (way == "enter") {
        setTimeout(() => {
            target.classList.add("animationForElements");
        }, 500);
    }
});

window.addEventListener("gotoTop", (e) => {
    const { progress } = e.detail;
    let intProgress = parseInt(progress*10);
    let gotoTopButtnState = gotoTopButtn.style.visibility; 
    pageScrollPercentage = intProgress;
    if (intProgress >= 2 && animation.style.animationPlayState != 'running') {
        gotoTopButtn.style.visibility = "visible";
    } else if (intProgress <= 1) {
        gotoTopButtn.style.visibility = "hidden";
    }
    // add data-scroll data-scroll-event-progress="gotoTop" 
});

/*
window.addEventListener("headerExpan", (e) => {
    const { target, progress } = e.detail;
    if (progress >= 0.01) {
        document.querySelector("header").classList.remove("expandMenu_start");
        document.querySelector("header").classList.add("expandMenu_expand");
    } else {
        document.querySelector("header").classList.remove("expandMenu_expand");
        document.querySelector("header").classList.add("expandMenu_start");

    }
});*/