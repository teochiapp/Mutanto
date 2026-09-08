<section id="marketing-contact" class="marketing-contact">

  <!-- Insignia giratoria (gira sobre su propio eje hacia la derecha) -->
  <div class="marketing-contact__badge" aria-hidden="true">
    <img class="marketing-contact__badge-img" src="<?php echo (URL_SITE) ?>img/marketing/contact/contact-badge.svg" alt="" role="presentation">
  </div>

  <div class="marketing-contact__content reveal-on-scroll">
    <h2 class="marketing-contact__title"><?php echo $marketingData['contact']['title']; ?></h2>

    <div class="marketing-contact__bottom">
      <p class="marketing-contact__description"><?php echo $marketingData['contact']['description']; ?></p>

      <div class="marketing-contact__actions">
        <a href="<?php echo $marketingData['contact']['cta_primary']['url']; ?>" target="_blank" rel="noopener" class="cta-button cta-button--solid">
          <?php echo $marketingData['contact']['cta_primary']['text']; ?>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="7" y1="17" x2="17" y2="7"></line>
            <polyline points="7 7 17 7 17 17"></polyline>
          </svg>
        </a>

        <a href="<?php echo $marketingData['contact']['cta_secondary']['url']; ?>" target="_blank" rel="noopener" class="cta-button cta-button--outline">
          <?php echo $marketingData['contact']['cta_secondary']['text']; ?>
          <svg width="22" height="22" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.5487 4.24963C9.16775 4.24963 3.97475 9.25138 3.9725 15.3984C3.971 17.3641 4.505 19.2826 5.5175 20.9724L3.875 26.7496L10.0122 25.1994C11.7194 26.0924 13.6176 26.5582 15.5442 26.5569H15.5487C21.9297 26.5569 27.1227 21.5544 27.125 15.4074C27.1265 12.4299 25.9235 9.62713 23.7372 7.52038C21.5517 5.41288 18.6455 4.25038 15.5487 4.24963ZM15.5487 24.6736H15.545C13.8185 24.6736 12.125 24.2266 10.6475 23.3821L10.295 23.1811L6.6545 24.1006L7.6265 20.6806L7.39775 20.3304C6.43693 18.865 5.92545 17.1507 5.92625 15.3984C5.9285 10.2886 10.2455 6.13288 15.5525 6.13288C18.122 6.13363 20.5377 7.09888 22.355 8.85013C24.1722 10.6014 25.172 12.9301 25.1705 15.4066C25.1682 20.5164 20.852 24.6736 15.548 24.6736H15.5487ZM20.8265 17.7324C20.537 17.5936 19.115 16.9194 18.8495 16.8256C18.5847 16.7334 18.392 16.6854 18.1992 16.9644C18.0072 17.2434 17.4522 17.8711 17.2842 18.0564C17.1147 18.2424 16.946 18.2649 16.6565 18.1261C16.367 17.9866 15.4347 17.6926 14.3307 16.7431C13.4705 16.0051 12.89 15.0931 12.7212 14.8134C12.5525 14.5351 12.7032 14.3844 12.848 14.2456C12.9777 14.1219 13.1375 13.9209 13.2815 13.7581C13.4255 13.5954 13.4735 13.4791 13.571 13.2931C13.667 13.1079 13.619 12.9444 13.5462 12.8056C13.4735 12.6654 12.896 11.2944 12.6537 10.7371C12.4197 10.1941 12.1812 10.2669 12.0035 10.2579C11.8347 10.2504 11.6427 10.2481 11.4485 10.2481C11.2572 10.2481 10.943 10.3179 10.6775 10.5969C10.4127 10.8759 9.665 11.5494 9.665 12.9204C9.665 14.2921 10.7015 15.6166 10.8462 15.8026C10.991 15.9879 12.8862 18.8026 15.788 20.0101C16.478 20.2959 17.0165 20.4676 17.4372 20.5966C18.1302 20.8089 18.761 20.7781 19.259 20.7069C19.814 20.6266 20.9705 20.0334 21.2105 19.3831C21.452 18.7329 21.452 18.1749 21.38 18.0586C21.3095 17.9424 21.116 17.8726 20.8265 17.7324Z" fill="currentColor"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
