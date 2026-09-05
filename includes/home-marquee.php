<div id="mutanto-algunos-clientes">
  <div class="mutanto-space___ home two"></div>
  <?php

  if ($language == 'es') {
    echo '<h4 class="blancoMuntanto textCenter mutanto__fix-5">Algunos <a href="#">Clientes</a> que<br> confiaron en este equipo</h4>';
  } else {
    echo '<h4 class="blancoMuntanto textCenter mutanto__fix-5">Some of the <a href="#">clients</a> who<br> trust our team</h4>';
  }

  ?>
  <div class="mutanto-space___ fixMobile2" style="height: 120px;"></div>
  <!-- Marquee -->
  <div class="slick marquee">
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Welly Go.png" title="Welly Go" alt="Welly Go"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/OttaaProject.png" title="OttaaProject" alt="OttaaProject"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Systel.png" title="Systel" alt="Systel"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Slapp.png" title="Slapp" alt="Slapp"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/HST Pathways.png" title="HTS Pathways" alt="HTL Pathways"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Heuristic World.png" title="Heuristic World" alt="Heuristic World"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Ramsys.png" title="Ramsys" alt="Ramsys"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Anamean Alshamsi.png" title="Dr. Aamean Alshamsi"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/cief.png" title="Cief" alt="Cief"></span>
    <span class="slick-slide"><img class="inner smallForPhone" src="<?php echo (URL_SITE) ?>img/clients/Bocho.png" title="Bocho" alt="Bocho"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Refine Labs.png" title="Refine Labs" alt="Refine Labs"></span>
    <span class="slick-slide"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Media Network.png" title="Media Network" alt="Media Network"></span>
    <span class="slick-slide -hiddenMobile"><img class="inner" src="<?php echo (URL_SITE) ?>img/clients/Ceduc UCN.png" title="Ceduc UCN" alt="Ceduc UCN"></span>
  </div>
  <style>
    .-gradient {
      background-image: url(/img/mutanto-home-degrade.webp);
      width: 100%;
      height: 114px;
      position: relative;
      bottom: 112px;
      display: none;
    }

    @media only screen and (max-width: 480px) {
      .-gradient {
        display: block;
        position: relative;
        margin-bottom: -60px;
      }

      .smallForPhone {
        scale: 0.88;
      }

      .-hiddenMobile {
        display: none !important;
      }
    }
  </style>
  <div class="-gradient"></div>
  <!-- End Marquee -->
  <div class="mutanto-space___ home three" style="height: 240px;"></div>
  <div class="mutanto__elements-bgLine contact"></div>
</div>