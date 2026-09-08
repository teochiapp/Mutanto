<?php
$urlToHome = URL_SITE . "en/";
?>

<header class="marketing-header">
  <!-- logo  -->
  <div id="header__mutanto-logo" style="position: relative; left: 0; top: 0; transform: none; display: flex; align-items: center; margin: 0 !important; padding: 0 !important; height: auto;">
    <div class="marketing-header__logo-img">
      <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
        <img src="<?php echo (URL_SITE) ?>img/mutanto-logo.svg" title="Mutanto" alt="Muntanto Circle Logo">
      </a>
    </div>
    <?php
    if (!function_exists('setColorTextLogo')) {
        function setColorTextLogo($logoColorToShow)
        {
          switch ($logoColorToShow) {
            case "black":
              return ("img/muntanto-logo-dark-mode-text-uix-ux-web-desing.svg");
              break;
            case "withe":
              return ("img/muntanto-logo-text-uix-ux-web-desing.svg");
              break;
          }
        }
    }
    ?>
    <span class="marketing-header__logo-txt">
      <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
        <img src="<?php echo (URL_SITE . setColorTextLogo($logoColorToShow)) ?>" alt="Mutanto Logo UX UI WEB" title="Mutanto Logo UX UI WEB">
      </a>
    </span>
  </div>
  <!-- End Logo  -->

  <!-- Navigation -->
  <nav>
    <ul class="marketing-header__nav">
      <li><a href="#marketing-benefits">Benefits</a></li>
      <li><a href="#marketing-projects">Work</a></li>
      <li><a href="#marketing-services">Services</a></li>
      <li><a href="#marketing-testimonials">Testimonials</a></li>
      <li><a href="#marketing-contact">Contact</a></li>
    </ul>
  </nav>

  <div class="marketing-header__actions">
    <a href="https://calendly.com/holamutanto/30min?month=<?php echo date('Y-m'); ?>" target="_blank" class="cta-button cta-button--solid">
      Book a free 30-min call
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="7" y1="17" x2="17" y2="7"></line>
        <polyline points="7 7 17 7 17 17"></polyline>
      </svg>
    </a>
    <a href="https://wa.me/5493516362772" target="_blank" class="cta-button cta-button--outline">
      Contact Us
      <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.5487 4.24963C9.16775 4.24963 3.97475 9.25138 3.9725 15.3984C3.971 17.3641 4.505 19.2826 5.5175 20.9724L3.875 26.7496L10.0122 25.1994C11.7194 26.0924 13.6176 26.5582 15.5442 26.5569H15.5487C21.9297 26.5569 27.1227 21.5544 27.125 15.4074C27.1265 12.4299 25.9235 9.62713 23.7372 7.52038C21.5517 5.41288 18.6455 4.25038 15.5487 4.24963ZM15.5487 24.6736H15.545C13.8185 24.6736 12.125 24.2266 10.6475 23.3821L10.295 23.1811L6.6545 24.1006L7.6265 20.6806L7.39775 20.3304C6.43693 18.865 5.92545 17.1507 5.92625 15.3984C5.9285 10.2886 10.2455 6.13288 15.5525 6.13288C18.122 6.13363 20.5377 7.09888 22.355 8.85013C24.1722 10.6014 25.172 12.9301 25.1705 15.4066C25.1682 20.5164 20.852 24.6736 15.548 24.6736H15.5487ZM20.8265 17.7324C20.537 17.5936 19.115 16.9194 18.8495 16.8256C18.5847 16.7334 18.392 16.6854 18.1992 16.9644C18.0072 17.2434 17.4522 17.8711 17.2842 18.0564C17.1147 18.2424 16.946 18.2649 16.6565 18.1261C16.367 17.9866 15.4347 17.6926 14.3307 16.7431C13.4705 16.0051 12.89 15.0931 12.7212 14.8134C12.5525 14.5351 12.7032 14.3844 12.848 14.2456C12.9777 14.1219 13.1375 13.9209 13.2815 13.7581C13.4255 13.5954 13.4735 13.4791 13.571 13.2931C13.667 13.1079 13.619 12.9444 13.5462 12.8056C13.4735 12.6654 12.896 11.2944 12.6537 10.7371C12.4197 10.1941 12.1812 10.2669 12.0035 10.2579C11.8347 10.2504 11.6427 10.2481 11.4485 10.2481C11.2572 10.2481 10.943 10.3179 10.6775 10.5969C10.4127 10.8759 9.665 11.5494 9.665 12.9204C9.665 14.2921 10.7015 15.6166 10.8462 15.8026C10.991 15.9879 12.8862 18.8026 15.788 20.0101C16.478 20.2959 17.0165 20.4676 17.4372 20.5966C18.1302 20.8089 18.761 20.7781 19.259 20.7069C19.814 20.6266 20.9705 20.0334 21.2105 19.3831C21.452 18.7329 21.452 18.1749 21.38 18.0586C21.3095 17.9424 21.116 17.8726 20.8265 17.7324Z" fill="#84FF5F"/>
      </svg>
    </a>
  </div>

  <!-- Mobile Hamburger -->
  <button class="marketing-header__hamburger" id="marketingHamburger">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3 12H21M3 6H21M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>

  <!-- Mobile Menu Overlay -->
  <div class="marketing-mobile-menu" id="marketingMobileMenu">
    <div class="marketing-mobile-menu__glow"></div>
    <div class="marketing-mobile-menu__header">
      <div class="marketing-mobile-menu__logo">
        <div class="marketing-header__logo-img">
          <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
            <img src="<?php echo (URL_SITE) ?>img/mutanto-logo.svg" title="Mutanto" alt="Muntanto Circle Logo">
          </a>
        </div>
        <span class="marketing-header__logo-txt">
          <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
            <img src="<?php echo (URL_SITE . setColorTextLogo($logoColorToShow)) ?>" alt="Mutanto Logo UX UI WEB" title="Mutanto Logo UX UI WEB">
          </a>
        </span>
      </div>
      <button class="marketing-mobile-menu__close" id="marketingMobileMenuClose">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
    
    <nav class="marketing-mobile-menu__nav">
      <ul>
        <li><a href="#marketing-benefits">Benefits</a></li>
        <li><a href="#marketing-projects">Work</a></li>
        <li><a href="#marketing-services">Services</a></li>
        <li><a href="#marketing-testimonials">Testimonials</a></li>
        <li><a href="#marketing-contact">Contact</a></li>
      </ul>
    </nav>

    <div class="marketing-mobile-menu__actions">
      <a href="https://calendly.com/holamutanto/30min?month=<?php echo date('Y-m'); ?>" target="_blank" class="cta-button cta-button--solid" style="width: 100%;">
        Book a free 30-min call
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="7" y1="17" x2="17" y2="7"></line>
          <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
      </a>
      <a href="https://wa.me/5493516362772" target="_blank" class="cta-button cta-button--outline" style="width: 100%;">
        Contact us
        <svg width="24" height="24" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5487 4.24963C9.16775 4.24963 3.97475 9.25138 3.9725 15.3984C3.971 17.3641 4.505 19.2826 5.5175 20.9724L3.875 26.7496L10.0122 25.1994C11.7194 26.0924 13.6176 26.5582 15.5442 26.5569H15.5487C21.9297 26.5569 27.1227 21.5544 27.125 15.4074C27.1265 12.4299 25.9235 9.62713 23.7372 7.52038C21.5517 5.41288 18.6455 4.25038 15.5487 4.24963ZM15.5487 24.6736H15.545C13.8185 24.6736 12.125 24.2266 10.6475 23.3821L10.295 23.1811L6.6545 24.1006L7.6265 20.6806L7.39775 20.3304C6.43693 18.865 5.92545 17.1507 5.92625 15.3984C5.9285 10.2886 10.2455 6.13288 15.5525 6.13288C18.122 6.13363 20.5377 7.09888 22.355 8.85013C24.1722 10.6014 25.172 12.9301 25.1705 15.4066C25.1682 20.5164 20.852 24.6736 15.548 24.6736H15.5487ZM20.8265 17.7324C20.537 17.5936 19.115 16.9194 18.8495 16.8256C18.5847 16.7334 18.392 16.6854 18.1992 16.9644C18.0072 17.2434 17.4522 17.8711 17.2842 18.0564C17.1147 18.2424 16.946 18.2649 16.6565 18.1261C16.367 17.9866 15.4347 17.6926 14.3307 16.7431C13.4705 16.0051 12.89 15.0931 12.7212 14.8134C12.5525 14.5351 12.7032 14.3844 12.848 14.2456C12.9777 14.1219 13.1375 13.9209 13.2815 13.7581C13.4255 13.5954 13.4735 13.4791 13.571 13.2931C13.667 13.1079 13.619 12.9444 13.5462 12.8056C13.4735 12.6654 12.896 11.2944 12.6537 10.7371C12.4197 10.1941 12.1812 10.2669 12.0035 10.2579C11.8347 10.2504 11.6427 10.2481 11.4485 10.2481C11.2572 10.2481 10.943 10.3179 10.6775 10.5969C10.4127 10.8759 9.665 11.5494 9.665 12.9204C9.665 14.2921 10.7015 15.6166 10.8462 15.8026C10.991 15.9879 12.8862 18.8026 15.788 20.0101C16.478 20.2959 17.0165 20.4676 17.4372 20.5966C18.1302 20.8089 18.761 20.7781 19.259 20.7069C19.814 20.6266 20.9705 20.0334 21.2105 19.3831C21.452 18.7329 21.452 18.1749 21.38 18.0586C21.3095 17.9424 21.116 17.8726 20.8265 17.7324Z" fill="#84FF5F"/>
        </svg>
      </a>
    </div>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('marketingHamburger');
    const mobileMenu = document.getElementById('marketingMobileMenu');
    const closeBtn = document.getElementById('marketingMobileMenuClose');
    const navLinks = document.querySelectorAll('.marketing-header__nav a, .marketing-mobile-menu__nav a');

    const toggleMenu = () => {
      mobileMenu.classList.toggle('is-open');
      document.body.classList.toggle('no-scroll');
    };

    if(hamburger) hamburger.addEventListener('click', toggleMenu);
    if(closeBtn) closeBtn.addEventListener('click', toggleMenu);
    
    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        const href = link.getAttribute('href');
        if (href && href.startsWith('#')) {
          const targetEl = document.querySelector(href);
          if (targetEl) {
            e.preventDefault();
            
            // Close mobile menu if open
            if (mobileMenu && mobileMenu.classList.contains('is-open')) {
              mobileMenu.classList.remove('is-open');
              document.body.classList.remove('no-scroll');
            }

            // Calculate precise scroll target (Header height + 20px extra padding)
            const header = document.querySelector('.marketing-header');
            const headerHeight = header ? header.offsetHeight : 92;
            const extraMargin = 20; // 20px padding above section title
            const targetY = targetEl.getBoundingClientRect().top + window.pageYOffset - (headerHeight + extraMargin);

            window.scrollTo({
              top: Math.max(0, targetY),
              behavior: 'smooth'
            });

            // Update URL hash without instant jump
            if (history.pushState) {
              history.pushState(null, null, href);
            }
          }
        }
      });
    });
  });
</script>