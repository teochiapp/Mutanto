    <!-- Paginator -->

    <style>
      .mutanto__elements-paginator-structure {
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        justify-content: center;
      }
    </style>
    <div class="mutanto__elements-paginator-structure">
      <?php
      if ($isMobile) {
        $alt = "Anterior ";
        if ($language == "en") {
          $alt = "Back ";
        }

        if ($page != 1) {
          echo (' <div class="mutanto__elements-paginator-arrow"><a href="index.php?page=' . ($page - 1) . '" alt="' . $alt . '" title="' . $alt . '"><i class="fa-solid fa-arrow-left-long"></i></a></div>' . "\n");
        } else {
          echo (' <div class="mutanto__elements-paginator-arrow "><i class="fa-solid fa-arrow-left-long disible"></i></div>' . "\n");
        }

        $alt = "Pagina ";
        if ($language == "en") {
          $alt = "Page ";
        }

        for ($page = 1; $page <= $numberOfPage; $page++) {
          if ($page == $nextPage) {
            echo ('<h5 class="mutanto__elements-paginator-numbers selected" alt="' . $alt . $page . '" title="' . $alt . $page . '">' . $page . '</h5>' . "\n");
          } else {
            echo ('<a href="index.php?page=' . $page . '"  alt="' . $alt . $page . '" title="' . $alt . $page . '"><h5 class="mutanto__elements-paginator-numbers">' . $page . '</h5></a>' . "\n");
          }
        }

        $alt = "Siguiente ";
        if ($language == "en") {
          $alt = "Next ";
        }
        
        if (($nextPage) == $numberOfPage) {
          echo ('<div class="mutanto__elements-paginator-arrow "><i class="fa-solid fa-arrow-right-long disible"></i></div>' . "\n");
        } else {
          echo (' <div class="mutanto__elements-paginator-arrow"><a href="index.php?page=' . ($nextPage + 1) . '" alt="' . $alt . '" title="' . $alt . '"><i class="fa-solid fa-arrow-right-long"></i></a></div>' . "\n");
        }
      }
      ?>
    </div>