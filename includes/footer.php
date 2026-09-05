<!-- Footer -->
  <footer>
    <div id="mutanto_footer">
      <div class="mutanto_footer___structure">
        <div class="mutanto_footer___top left">
          <img src="<?php echo(URL_SITE) ?>img/mutanto-footer-img.svg" alt="Mutanto Logo" title="Mutanto">
        </div>
        <div class="mutanto_footer___top right">
          <div>
            <?php 
                $text = "EXPLORA LA REVOLUCIÓN DEL DISEÑO MUTANTO";
                if ($language == "en") {
                  $text = "EXPLORE THE MUTANTO DESIGN REVOLUTION";
                }
            ?>
            <h3 class="blancoMuntanto"><strong><?php echo($text)?></strong></h3>
          </div>
          <div class="mutanto_Footer___menu-links">
            <ul>
              <li><a href="<?php echo(URL_SITE.$language."/".$menuPageToGo[$language][1])?>" alt="<?php echo strtoupper($menuOptions[$language][1]) ?>" title="<?php echo strtoupper($menuOptions[$language][1]) ?>"><?php echo strtoupper($menuOptions[$language][1]) ?></a></li>
              <li><a href="<?php echo(URL_SITE.$language."/".$menuPageToGo[$language][2])?>" alt="<?php echo strtoupper($menuOptions[$language][2]) ?>" title="<?php echo strtoupper($menuOptions[$language][2]) ?>"><?php echo strtoupper($menuOptions[$language][2]) ?></a></li>
              <li><a href="<?php echo(URL_SITE.$language."/".$menuPageToGo[$language][3])?>" alt="<?php echo strtoupper($menuOptions[$language][3]) ?>" title="<?php echo strtoupper($menuOptions[$language][3]) ?>"><?php echo strtoupper($menuOptions[$language][3]) ?></a></li>
              <li><a href="<?php echo(URL_SITE.$language."/".$menuPageToGo[$language][4])?>" alt="<?php echo strtoupper($menuOptions[$language][4]) ?>" title="<?php echo strtoupper($menuOptions[$language][4]) ?>"><?php echo strtoupper($menuOptions[$language][4]) ?></a></li>
            </ul>
          </div>
        </div>
        <div class="mutanto_footer___bottom left">
          <img src="<?php echo(URL_SITE) ?>img/muntanto-logo-text-uix-ux-web-desing.png" alt="Mutanto logo" title="Mutanto">
        </div>
        <div class="mutanto_footer___bottom right">
          <div class="mutanto_Footer___SocialLink">
            <div class="mutanto_Footer___SocialLink-divider">
              <div class="mutanto_Footer___SocialLink-line"></div>
              <div><img src="<?php echo(URL_SITE) ?>/img/green-start.png" alt="Decoration Start"></div>
            </div>
            <style>
                        .mutanto_Footer___SocialLink-iconos span {
                            display:  none;
                        }
                    </style>
            <div class="mutanto_Footer___SocialLink-iconos">
              <div>
                <?php include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/contact-icons.php")); ?>
              </div>
              <?php 
                //Actualizacion Enero 2025
                $derechos = $language == "es" ? "Mutanto ® 2023-2026. Todos los derechos reservados"  : " Mutanto ™ 2023-2026. All rights reserved.";
              ?>
              <div class="mutanto_Footer___SocialLink-iconos-rigths"><?php echo($derechos)?></div>
              <div class="mutanto_Footer___SocialLink-logo">
                <img src="<?php echo(URL_SITE) ?>img/muntanto-logo-text-uix-ux-web-desing.png">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background Text -->
      <div id="mutanteala">MUTANTEALA</div>
    </div>
  </footer>
  <!-- End Footer -->