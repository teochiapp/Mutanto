//Load Services Page
document.addEventListener("DOMContentLoaded", function () {
    //Setup Table Two
    let hiddeElementTabTwo = document.querySelectorAll('.mutanto__elements-tabTwo-content-set:nth-child(n+2)');
    hiddeElementTabTwo.forEach(e => { 
        e.classList.add("mutanto__elements-tabTwo-content-set-displayHidden");
    });
    //Actios Table Two 
    tab2("#tab2_uiuxservices","SLIDER_ON");
    tab2("#tab2_digitalServices","SLIDER_OFF");
    
    generateTagsForTabOne(getWindowWidth());
    //Setup slider menu for mobiles.
    if ( getWindowWidth() <= mobiles) {
        $("#mutanto__elements-tabTwo-header-buttons_slider").owlCarousel({
            nav:false,
            loop:false,
            autoWidth:false,
            items:2,
            center: false,
        });
      }

});
//Generate Tags for Tab 1
function generateTagsForTabOne (size) {
    let tab01Desktop = [];
    let tab02Desktop = [];
    if (size >= destktop) {
        tab01Desktop = ["UX Research","UI Design","UX Research","UI Design"];
        tab02Desktop = ["UX Research","UI Design","UX Research","UI Design"];
    } else if (size >= mobiles && size <= tables) {
        tab01Desktop = ["Research","Wireframing","Product","Writting"];
        tab02Desktop = ["Visual Design","Prototyping","Web design","MVP Design" ];
    } else {
        tab01Desktop = ["Research","Wireframing","Product","Writting"];
        tab02Desktop = ["Visual Design","Prototyping","Web design","MVP Design" ];
    }
    
    splitTags (tab01Desktop,"tab1");
    splitTags (tab02Desktop,"tab2");
}
function splitTags (tags,tab) {
    let outputString = '';
    tags.forEach(tag => {
        outputString += "<span>"+tag+"</span>";
    });
    document.querySelector("#"+tab).innerHTML = outputString;
}
//Set Actions of Tab #2
function tab2 (tab,slider) {
    const tabs = document.querySelectorAll(tab+" .mutanto__elements-tabTwo-header-buttons span");
    tabs.forEach(element => {
        element.addEventListener("click", function () {
            let elementToHide = document.querySelectorAll(tab+" .mutanto__elements-tabTwo-content-set");
            elementToHide.forEach(e => {
                e.classList.remove("mutanto__elements-tabTwo-content-set-displayBlock");
                e.classList.add("mutanto__elements-tabTwo-content-set-displayHidden");
                buttonsAvailables = document.querySelectorAll(tab+" .mutanto__elements-tabTwo-header-buttons span");
                buttonsAvailables.forEach(e => {
                    e.classList.remove("selected");
                    e.classList.add("available");
                })
            })
            
            let elementToChangeColor;

            if (slider === "SLIDER_ON") {
                elementToChangeColor = document.querySelectorAll(tab+" #mutanto__elements-tabTwo-header-buttons_slider .owl-stage-outer .owl-stage .owl-item span");
            } else {
                elementToChangeColor = document.querySelectorAll(tab+" .mutanto__elements-tabTwo-header-buttons>span");
            }
            
            elementToChangeColor.forEach(e => {
              e.classList.remove("selected");
              e.classList.add("available");
            });

            this.classList.remove("available");
            this.classList.add("selected");
  

            const contetId = element.getAttribute("btnaction");
            let elementToShow = document.querySelector(tab+" #" + contetId);
            elementToShow.classList.remove("mutanto__elements-tabTwo-content-set-displayHidden");
            elementToShow.classList.add("mutanto__elements-tabTwo-content-set-displayBlock");
    
        })
    });
}

// Scale support 
if (scale == 1) {
    const divsForScaleSupportServices = ['.mutanto-services___startframe','.mutanto-services__uiux_two-tabs','.mutanto-services__servicios-uiux-tab2','.mutanto-services__servicios-digitales-uiux-tab2'];
    divsForScaleSupportServices.forEach((d) => {
        let div = null;  
            div = document.querySelector(d);
            div.classList.add(d.replace(".","").replace("#","")+"-scale-support");
        });
        
}