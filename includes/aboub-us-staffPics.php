<style>
        .mutanto__elements-staffPic-start {
          position: absolute;
          pointer-events: none;
          z-index: 2;
        }

        .topStartClass {
          transform: rotate(-10deg);
          scale: 1.01;
        }

        .bottomStartClass-cinco-seis {
          transform: rotate(0deg) !important;
          scale: 1.01;
        }
      </style>

      <?php
      $baseImageUrl = URL_SITE . "img/staff_version_2/";
      $staffCounter = 0;
      $mutantoStaff = array(
        [
          "name" => "Josefina Colombero",
          "position" => "Founder - Team Leader",
          "tags" => ["Industrial Designer", "UX Research", "Project Manager"],
          "imgBN" => array(
            "1x" =>  $baseImageUrl . "Josefina-Colombero.webp",
            "2x" => $baseImageUrl . "Josefina-Colombero@2x.webp",
          ),
          "imgColor" => array(
            "1x" =>  $baseImageUrl . "Josefina-Colombero-color.webp",
            "2x" => $baseImageUrl . "Josefina-Colombero-color@2x.webp",
          ),
          "class" => "uno",
          "classForStart" => "topStartClass",
        ],
        [
          "name" => "Giuli Rébori",
          "position" => "Founder - Concept Designer",
          "tags" => ["Industrial Designer", "UI Designer", "Graphic Designer"],
          "imgBN" => array(
            "1x" =>  $baseImageUrl . "Giuli-Rebori.webp",
            "2x" => $baseImageUrl . "Giuli-Rebori@2x.webp",
          ),
          "imgColor" => array(
            "1x" =>  $baseImageUrl . "Giuli-Rebori-color.webp",
            "2x" => $baseImageUrl . "Giuli-Rebori-color@2x.webp",
          ),
          "class" => "dos",
          "classForStart" => "topStartClass",
        ],
        [
          "name" => "Emmanuel B. Mercado",
          "position" => "Founder -  UI / UX Director",
          "tags" => ["Industrial Designer", "UX Strategic", "Visual Designer"],
          "imgBN" => array(
            "1x" =>  $baseImageUrl . "Emmanuel-B-Mercado.webp",
            "2x" => $baseImageUrl . "Emmanuel-B-Mercado@2x.webp",
          ),
          "imgColor" => array(
            "1x" =>  $baseImageUrl . "Emmanuel-B-Mercado-color.webp",
            "2x" => $baseImageUrl . "Emmanuel-B-Mercado-color@2x.webp",
          ),
          "class" => "tres",
          "classForStart" => "topStartClass",
        ],
        [
          "name" => "Catalina Bustos",
          "position" => "Graphic designer",
          "tags" => ["Social Media Designer", "Branding", "Visual Designer"],
          "imgBN" => array(
            "1x" =>  $baseImageUrl . "Catalina-Bustos.webp",
            "2x" => $baseImageUrl . "Catalina-Bustos@2x.webp",
          ),
          "imgColor" => array(
            "1x" =>  $baseImageUrl . "Catalina-Bustos-color.webp",
            "2x" => $baseImageUrl . "Catalina-Bustos-color@2x.webp",
          ),
          "class" => "cuatro",
          "classForStart" => "topStartClass",
        ],
        [
          "name" => "Lucia Zanotti",
          "position" => "UI Designer",
          "tags" => ["Graphic Designer", "UI Motion", "Visual Designer"],
          "imgBN" => array(
            "1x" =>  $baseImageUrl . "Lucia-Zanotti.webp",
            "2x" => $baseImageUrl . "Lucia-Zanotti@2x.webp",
          ),
          "imgColor" => array(
            "1x" =>  $baseImageUrl . "Lucia-Zanotti-color.webp",
            "2x" => $baseImageUrl . "Lucia-Zanotti-color@2x.webp",
          ),
          "class" => "cinco",
          "classForStart" => "bottomStartClass-cinco-seis",
        ],
        [
          "name" => "Eliana Bresso",
          "position" => "UI Designer",
          "tags" => ["Visual designer", "Prototyper", "Figma Systems Architect"],
          "imgBN" => array(
            "1x" =>  $baseImageUrl . "Eliana-Bresso.webp",
            "2x" => $baseImageUrl . "Eliana-Bresso@2x.webp",
          ),
          "imgColor" => array(
            "1x" =>  $baseImageUrl . "Eliana-Bresso-color.webp",
            "2x" => $baseImageUrl . "Eliana-Bresso-color@2x.webp",
          ),
          "class" => "seis",
          "classForStart" => "bottomStartClass-cinco-seis",
        ]
      );

      ?>


      <div class="mutanto-services__staffPics">
        <?php
        foreach ($mutantoStaff as $staff) {
        ?>
          <!-- Isolated Staff Pics <?php echo ($staffCounter) ?> -->
          <div class="mutanto__elements-staffPic <?php echo ($staff["class"]) ?>">
            <div class="mutanto__elements-staffPic-images">
              <img
                src="<?php echo ($baseImageUrl) ?>start.webp"
                srcset="<?php echo ($baseImageUrl) ?>start@2x.webp 2x"
                class="mutanto__elements-staffPic-start <?php echo ($staff["classForStart"]) ?>">

              <img
                src="<?php echo ($staff["imgBN"]["1x"]) ?>"
                srcset="<?php echo ($staff["imgBN"]["1x"]) ?> 2x"
                class="mutanto__elements-staffPic-images-1"
                alt="<?php echo ($staff["name"]) ?>"
                title="<?php echo ($staff["name"]) ?>">

              <img
                src="<?php echo ($staff["imgColor"]["1x"]) ?>"
                srcset="<?php echo ($staff["imgColor"]["1x"]) ?> 2x"
                class="mutanto__elements-staffPic-images-2"
                alt="<?php echo ($staff["name"]) ?>"
                title="<?php echo ($staff["name"]) ?>">
            </div>
            <div class="mutanto__elements-staffPic-images-background">
              <div class="mutanto__elements-staffPic-name"><?php echo ($staff["name"]) ?></div>
              <div class="mutanto__elements-staffPic-position"><?php echo ($staff["position"]) ?></div>
              <div class="mutanto__elements-staffPic-tags">
                <?php
                foreach ($staff["tags"] as $tag) {
                ?>
                  <span><?php echo ($tag) ?></span>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
          <!-- End Isolated Staff Pics <?php echo ($staffCounter) ?> -->
        <?php
          $staffCounter++;
        }
        ?>
      </div>