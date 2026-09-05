  <!------- Mutanto Element: Pre footer -->
  <style>
      .mutanto-element__animated-figure.prefooter {
        position: relative !important;
        left: 0px;
        top: 60px;
        animation: run linear 5s infinite !important;
        z-index: 0;
        margin-top: 0px !important;
      }

      @keyframes run {
        0% {
          left: -200px;
        }

        100% {
          left: calc(100% + 100px);
        }
      }
      .mutanto-element__pre-footer-ended  .mutanto__elements-button-with-bgLine {
        width: 100% !important;
        top: 30%;
        background: linear-gradient(270deg, rgba(0, 0, 0, 0.00) -0.53%, #000 48.82%, rgba(0, 0, 0, 0.00) 99.91%);
      }

      .mutanto-element__pre-footer-ended {
        display: flex;
        flex-flow: column nowrap;
        align-items: center;
        width: 100%;
        margin-bottom: 300px;
      }

      .mutanto-element__pre-footer-ended h2 {
        position: relative;
        top: 30%;
        text-align: center;
        margin-bottom: 63px;
      }
      
      .mutanto-element__pre-footer-ended .mutanto__elements-button{
        border: none;
      }
    </style>
    <div class="mutanto-element__animated-figure prefooter">
      <img src="<?php echo (URL_SITE) ?>img/mutanto-ovni-svg.svg">
    </div>
    <div class="mutanto-element__pre-footer-ended">
      <h2 style="font-weight: 600;line-height: 134.5%;"><?php echo($prefooterText)?></h2>
      <div class="mutanto__elements-button-with-bgLine">
       <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_charlemos.php")) ?>
      </div>
    </div>
    <!------- Mutanto Element: Pre footer -->