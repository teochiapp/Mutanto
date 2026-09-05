//SetUp only for home
document.addEventListener("DOMContentLoaded", function () {
    const div_mutantoAnimationIntro = document.getElementById("mutanto-animation-intro");
    const mutantoAlgunosClientes = document.getElementById("mutanto-algunos-clientes");
    const mutantoIdeas = document.getElementById("mutanto-trae-tus-ideas");
    setUpDivAsFullScreen(div_mutantoAnimationIntro);
  
  });
  
  
  let mutanto__title_01 = document.getElementById("mutanto__title_01");
  let mutanto__title_02 = document.getElementById("mutanto__title_02");
  let mutanto_reviwe_state = "close";
  
  document.addEventListener("DOMContentLoaded", function () {
    //SetUp owl-carousel ---- HOME 
    if (getWindowWidth() <= mobiles) {
      document.querySelector(".mutnto__element_cardOne-Structure").classList.add("owl-carousel");
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
    
    if (getWindowWidth() <= mobiles) {
      const numberOfElementsToShow = 3;
      let extraspace = numberOfElementsToShow * 30
      $("#muntanto_reviweSet").css("height", setHeightReviwe (3) + extraspace + "px");
      
    }
  
    //Loading Screen
    mutantoLoaderScreen.style.visibility = "hidden";
    //Cookies
    function getCookie(name) {
      const cookieName = name + "=";
      const cookieArray = document.cookie.split(";");
  
      for (let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i];
        while (cookie.charAt(0) === " ") {
          cookie = cookie.substring(1);
        }
        if (cookie.indexOf(cookieName) === 0) {
          return cookie.substring(cookieName.length, cookie.length);
        }
      }
      return null; // Return null if the cookie is not found.
    }
    if (getCookie("mutanto") == "yes") {
      document.querySelector("#mutanto__cookies").style.visibility = "hidden";
      
    } else {
      document.querySelector("#mutanto__cookies").style.visibility = "visible";
     
    }
  });
  

  //Ony for Mobile Reviwe 

  function setHeightReviwe (elements) {
    const individualReviwe = document.querySelectorAll("#muntanto_reviweSet > .mutanto__elements-userReviwe");
    let reviweThreeCommmentsHeight = 0;
    for (let i = 0; i < elements; i++) {
        reviweThreeCommmentsHeight += individualReviwe[i].getBoundingClientRect().height;
    }

      return reviweThreeCommmentsHeight;
    }
  
  if (getWindowWidth() >= destktop) {
    //code only for desktop
  
  } else if (getWindowWidth() > mobiles && getWindowWidth() < destktop) {
    setProgressAndParallexAnimation(mutanto__title_01, '-.1');
    setProgressAndParallexAnimation(mutanto__title_02, '-.1');
  
  } else if (getWindowWidth() <= mobiles) {
    //code only for mobiles
    setProgressAndParallexAnimation(mutanto__title_01, '-.05');
    setProgressAndParallexAnimation(mutanto__title_02, '-.05');
  }
  
  
  
  //Set the Progres and paralex animation
  function setProgressAndParallexAnimation(div, value) {
    const animationProgressAttribute3 = "data-scroll-speed";
    div.setAttribute(animationProgressAttribute3, value);
  
  }
  
  
  
  //GoTo Locomotion
  
  function fistPage(locomotiveScroll) {
    const fistPage = document.getElementById('fistPage');
    scrollTo({
      target: fistPage,
      options: {
        offset: -200
      },
      locomotiveScroll
    });
  }


  
  //Jquery
  $(document).ready(function () {
  
    const next = "<div class=\"mutanto__elements-arrow-rigth \"><i class=\"fa-solid fa-arrow-right-long\" alt=\"Next/Siguiente\"></i></div>";
    const prev = "<div class=\"mutanto__elements-arrow-rigth\"><i class=\"fa-solid fa-arrow-left-long\" alt=\Back/Anterior\"></i></div>";
    var windowWidth = $(window).width();
  
    if (windowWidth >= 577) {
      $('.slick.marquee').slick({
        speed: 8000,
        autoplay: true,
        autoplaySpeed: 0,
        centerMode: false,
        cssEase: 'linear',
        slidesToShow: 1,
        draggable: false,
        focusOnSelect: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        slidesToScroll: 1,
        variableWidth: true,
        infinite: true,
        initialSlide: 1,
        arrows: false,
        buttons: false
      });
    }
  
    
  
  
    if (windowWidth <= 577) {

      $(".mutnto__element_cardOne-Structure").owlCarousel({
        items: 2,
        margin: 10,
        nav: true,
        navText: [prev, next],
        autoWidth: true,
        loop: true,
        autoplay: true,
  
      });
    }
  
    if (windowWidth >= 577) {
      var cardReviwe =  $(".reviweSet") ;
      cardReviwe.owlCarousel({
        loop:true,
        margin:32,
        nav:true,
        autoWidth:true,
        center:true,
        dots:false,
      });

      $('.-arrow.-left').click(function() {
        cardReviwe.trigger('prev.owl.carousel');
      })

      $('.-arrow.-right').click(function() {
        cardReviwe.trigger('next.owl.carousel');
      })
    } else {
     
      $("#muntanto_reviweSet").removeClass("owl-carousel owl-theme");

    }


/*
    if (scale==1) {
      
  
      $(".mutanto__elements-card-two-Structure").addClass('mutanto__elements-card-two-Structure-suppurt-scale');
      $(".mutnto__element_cardOne-Structure").owlCarousel({
        items: 2,
        margin: 10,
        nav: false,
        autoWidth: true,
        loop: false,
        autoplay: true,
  
      });
    }
  
    if (scale == 1) {
      document.querySelector(".mutnto__element_cardOne-Structure").classList.add("owl-carousel");
  
    }
  
    */
    var cardTow = $(".mutanto__elements-card-two-Structure");
    var IndexOfTheSelectedCard = 0;
    cardTow.owlCarousel({
      center: true,
      items: 1,
      nav: true,
      navText: [prev, next],
      loop: false,
      dots: false,
      margin: 10,
      responsive: {
        0: {
          items: 1,
          margin: 10,
          loop: true,
          center: true,
          autoWidth: true,
        },
        580: {
          items: 2,
          margin: 400,
          navText: [prev, next],
        },
        960: {
          items: 2,
          margin: 200,
          navText: [prev, next],
        },
        1200: {
          items: 3,
          margin: 200,
        }
      }
    });
  
    playAndStopCardTwoAnimation();
  
  
    cardTow.on('click', '.owl-item', function () {
      var indexOfCards = $(this).index();
      switch (IndexOfTheSelectedCard) {
        case 0:
          cardTow.trigger('next.owl.carousel');
          break;
        case 1:
          if (indexOfCards == 0) {
            cardTow.trigger('prev.owl.carousel');
  
          }
          if (indexOfCards == 2) {
            cardTow.trigger('next.owl.carousel');
          }
          break;
        case 2:
          if (indexOfCards == 1) {
            cardTow.trigger('prev.owl.carousel');
          }
          break;
  
      }
      IndexOfTheSelectedCard = indexOfCards;
      playAndStopCardTwoAnimation();
    });
  
  
    cardTow.on("changed.owl.carousel", function (event) {
      IndexOfTheSelectedCard = event.item.index;
    });
  
  
    $(".mutanto__elements-card-two-Structure").on('dragged.owl.carousel', function (event) {
      playAndStopCardTwoAnimation();
    });
  
    $(".mutanto__elements-card-two-Structure > .owl-nav > .owl-prev ").click(function () {
      playAndStopCardTwoAnimation();
    })
  
    $(".mutanto__elements-card-two-Structure > .owl-nav > .owl-next ").click(function () {
      playAndStopCardTwoAnimation();
    })
  
    $("#reviweButtn").click(function () {
      const isClosed = mutanto_reviwe_state === "close";
      const numberOfElementsToShow = isClosed ? 7 : 3;
      const extraspace = numberOfElementsToShow * 30;
  
      $("#muntanto_reviweSet").css("height", setHeightReviwe(numberOfElementsToShow) + extraspace + "px");
      
      if (language == "es") {
        $("#reviweButtn").text(isClosed ? "Ver menos" : "Ver más");
      } else {
        $("#reviweButtn").text(isClosed ? "View less" : "View More");
      }

      mutanto_reviwe_state = isClosed ? "open" : "close";
  });

  
    function playAndStopCardTwoAnimation() {
      var notHighlightElements = $('.mutanto__elements-card-two-Structure .owl-item:not(.center)');
      notHighlightElements.each(function () {
        $(this).find('.mutanto__elements-card-two-Structure').css("z-index", "-2");
        $(this).find('.mutamovimiento').css('animation', 'none');
      });
  
  
      //var HighlightElements = $('.mutanto__elements-card-two-Structure .owl-item ~ .center');
      var HighlightElements = $('.owl-stage-outer > .owl-stage > .owl-item.active.center');
  
  
      HighlightElements.each(function () {
        $(this).find('.mutamovimiento').css('animation', 'bounce-2 5s ease-in-out infinite');
      });
    }
    // previus and next - August 2024 Update
    $('.btnNext').click(function() {
        cardTow.trigger('next.owl.carousel');
    });
    $('.btnBack').click(function() {
        cardTow.trigger('prev.owl.carousel');
    })
  });