 <!-- Div 4.1 : User comments  -->
 <style>
      .mutanto__elements-userReviwe {
        height: 374px;
        width: fit-content;
        max-width: 743px;
        padding: 24px;
        border-radius: 16px;
        background-color: var(--blancomutanto);
      }

      p {
        margin: 0px 0px 32px 0px;
        color: var(--negromutanto);
        font: 400 15.9px / 150% Poppins, sans-serif;
        letter-spacing: -0.176px;
        padding: 0px;
      }

      .mutanto__elements-userReviwe p strong {
        background-color: rgba(92, 55, 255, 0.2);
        padding: 1px 4px;
        border-radius: 3px;
      }

      .mutanto__elements-userReviwe .-organization .-logo img {
        border-radius: 50px;
      }

      .mutanto__elements-userReviwe .-organization {
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        gap: 16px;
      }

      .mutanto__elements-userReviwe .-organization .-position {
        display: flex;
        flex-flow: column nowrap;
      }

      .mutanto__elements-userReviwe .-organization .-position .-fullName {
        color: var(--negromutanto);
        font: 600 15.6px / 150% Poppins, sans-serif;
        letter-spacing: -0.176px;
      }

      .mutanto__elements-userReviwe .-organization .-position .-pos {
        color: var(--negromutanto);
        font: 400 14px / 150% Poppins, sans-serif;
        letter-spacing: -0.176px;
        color: #878787;
      }

      .mutanto-lo-que-se-dice {
        margin: 253px auto 133px auto;
        position: relative;
      }

      .mutanto-lo-que-se-dice .-header {
        width: 1200px;
        height: 75px;
        margin: auto;
        align-items: center;
        margin-bottom: 80px;
      }

      .mutanto-lo-que-se-dice .-header h2 {
        color: var(--blancomutanto);
      }

      .mutanto-lo-que-se-dice .-header h2 strong {
        font-weight: 600;
      }

      .mutanto-lo-que-se-dice .-header .-arrow {
          background-color: var(--blancomutanto);
          width: 58px;
          height: 42px;
          border-radius: 28px;
          display: flex;
          flex-flow: column nowrap;
          justify-content: center;
          align-items: center;
      }

      .mutanto-lo-que-se-dice .-header .-arrow:hover {
        background-color: var(--verdemutanto);
        color: var(--blancomutanto);
        cursor: pointer;
      }

      .mutanto-lo-que-se-dice .-header .-navegate {
        display: flex;
        flex-flow: row nowrap;
        width: fit-content;
        height: fit-content;
        gap: 32px;
      }

      .mutanto-lo-que-se-dice .-header {
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-between;
      }

      .-shadow {
        width: 100vw;
        height: 375px;
        position: absolute;
        display: flex;
        justify-content: space-between;
        top: 155px;
        left: -1px;
        z-index: 10;
        pointer-events: none;
      }

      .-shadow .-right img{
        height: 375px;
        right: 0px;
      }

      .-shadow .-left {
        left: 0px;
      }

      .-shadow .-left img{
        height: 375px;
        transform: scaleX(-1);
        left: 0px;
      }

      .reviweSet {
        overflow: hidden;
      }

      .-mobile-off {
        display: none;
      }

      @media (max-width: 487px) {

            p {
              font-size: 14px;
            }

            .mutanto-lo-que-se-dice .-header {
              width: 100% !important;
              justify-content: center;
              height: 30px;
              margin: auto;
              align-items: center;
              margin-bottom: 32px;
            }

            .ccc {  
              display: flex;
              flex-flow: column nowrap;
              align-items: center;
              gap: 32px;
              overflow: hidden;
            }

          .mutanto-lo-que-se-dice .-header .-navegate {
              display: none;
          }

          .mutanto__elements-userReviwe {
            height: auto !important;
            width: fit-content !important;
            max-width: 90% !important;
            
          }

          #muntanto_reviweSet {
            transition: height 0.5s ease; /* Smooth animation */
          }


          .mutanto-lo-que-se-dice {
              margin: 42px auto 133px auto;
          }

          .mutanto-lo-que-se-dice  .-shadow {
            display: none;
          }

          .-mobile-off {
            display: flex;
          }

          .-buttnWithe > .mutanto__elements-button {
            border: 1px solid white;
            margin: auto;
          }

          .-buttnWithe  {
            background: rgb(255,255,255);
            background: -moz-radial-gradient(circle, rgba(255,255,255,1) 34%, rgba(255,255,255,0) 94%);
            background: -webkit-radial-gradient(circle, rgba(255,255,255,1) 34%, rgba(255,255,255,0) 94%);
            background: radial-gradient(circle, rgba(255,255,255,1) 34%, rgba(255,255,255,0) 94%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#ffffff",GradientType=1);
            transform: translate(-50%, -50%);
          }

      }

    </style>
    <?php
    function userReviwe($text, $img, $imgx2, $title, $name, $position, $width)
    {
      $reviwel = '
                          <div class="mutanto__elements-userReviwe" style="width:' . $width . 'px">
                              <p>' . $text . '</p>
                              <div class="-organization">
                                  <div class="-logo">
                                      <img
                                          src="' . URL_SITE . $img . '"
                                          srcset="' . URL_SITE . $img . ' 1x, ' . URL_SITE . $imgx2 . ' 2x"
                                          width="54"
                                          height="54"
                                          title="' . $title . '"
                                          alt="' . $title . '">
                                  </div>
                                  <div class="-position">
                                      <span class="-fullName">' . $name . '</span>
                                      <span class="-pos">' . $position . '</span>
                                  </div>
                              </div>
                          </div>
                          ' . "\n";
      echo $reviwel;
    }
    ?>
    <!-- Reviwe  -->
    <div class="mutanto-lo-que-se-dice">
      <div class="-shadow">
          <div class="-left"><img src="../img/shodow-home-reviwe.webp" alt="grandiet"></div>
          <div class="-right"><img src="../img/shodow-home-reviwe.webp" alt="grandiet"></div>
      </div>
      <div class="-header">
        <?php 
          if ($language == "es") {
            echo '<h2>Lo que se dice de <strong>Mutanto</strong></h2>';
          } else {
            echo '<h2><strong>People are saying</strong></h2>';
          }

        ?>

        <div class="-navegate">
          <div class="-arrow -left"><i class="fa-solid fa-arrow-left"></i></div>
          <div class="-arrow -right"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
      </div>
      <div id="muntanto_reviweSet" class="reviweSet ccc owl-carousel owl-theme">
        <?php
        $userReviwes = [
          "en" => [
            [
              "text" => "We have had the privilege of working with Mutanto for more than two years on Systel's ambitious digital transformation project.
                                          We chose Mutanto because of their client-centric approach and their consolidated track record in the market, especially in projects covering such fundamental aspects as Branding, UX and UI. In addition to its ability to adapt to the work team.
                                          <strong>Every result delivered by Mutanto has exceeded our expectations</strong>, generating a significant impact on our objectives.
                                          <strong>What stands out the most about Mutanto's team is their flexibility, adaptability and the speed with which they approach each project. Their commitment to each client</strong>.",
              "img" => "en/projects/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon.png",
              "imgx2" => "en/projects/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon@2x.png",
              "title" => "Systel",
              "name" => "Soledad Mansilla",
              "position" => "Marketing leader, Systel Argentina",
              "width" => "707"
            ],
            [
              "text" => "My experience with Mutanto was wonderful, the team has innovative ideas, and they are super efficient.<strong>They were in charge of Welly Go, and     they  always understood our needs perfectly</strong>. Grateful for the professional and human quality of this team!",
              "img" => "en/projects/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon.png",
              "imgx2" => "en/projects/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon@2x.png",
              "title" => "Welly Go",
              "name" => "Nahir Caro Lemble",
              "position" => "Founder, Welly Go",
              "width" => "321"
            ],
            [
              "text" => "I have had the pleasure of working with Mutanto for over a year now, and I can't recommend them enough. Our company previously had a full-time, in-house designer, and in the beginning, I was nervous about outsourcing to an agency.<strong>However, Mutanto has been a dream partner. They are quick and responsive and create beautiful designs</strong>. I am always impressed with how they can adhere to our brand guidelines, yet nothing feels redundant or predictable. They never say no to whatever projects we ask of them, and are equally as invested in the results as we are. <strong>I am very grateful for their partnership!</strong>",
              "img" => "en/projects/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon.png",
              "imgx2" => "en/projects/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon@2x.png",
              "title" => "HTS",
              "name" => "Erica Palmer",
              "position" => "SR. Content Marketing  Manager, HST Pathways",
              "width" => "609"
            ],
            [
              "text" => "I rebuilt my brand with Mutanto , they were amazing and professional.The team was very friendly and patient with me as I was keep asking for more changes 😅 <strong>When they made the designs they exceeded my expectations</strong>. I even recommended them to my friends. <strong>I honestly surprised of their intelligence and creativity!</strong>",
              "img" => "en/projects/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon.png",
              "imgx2" => "en/projects/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon@2x.png",
              "title" => "Cref",
              "name" => "Sara Alswailem",
              "position" => "Co-Fundadora de Cref",
              "width" => "370"
            ],
            [
              "text" => "I have worked with the team on the design of my website. <strong>They have operated with a high level of professionalism and are always available for questions and changes </strong>. Coming from a negative experience, I have found an effective solution with them.",
              "img" => "en/projects/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon.png",
              "imgx2" => "en/projects/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon@2x.png",
              "title" => "Grupo Herrero",
              "name" => "Federico Herrero",
              "position" => "Socio Gerente, Grupo Herrero",
              "width" => "309"
            ],
            [
              "text" => "I've been personally working with Mutanto for a couple of years now and I can't stress enough how much I like working with them.<strong>Very detail-oriented, great listeners to our \"constant\" feedback, and out-of-the-box thinkers</strong>. In my company, <strong>it's now a verb \"to Mutantificate something\", when you want to make it cooler, well-designed, and up-to-date</strong>.It's been a pleasure, and definitely many more things to do together.",
              "img" => "en/projects/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon.png",
              "imgx2" => "en/projects/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon@2x.png",
              "title" => "Bocho",
              "name" => "Héctor Costa",
              "position" => "Co-Fundador, Bocho",
              "width" => "448"
            ],
            [
              "text" => "Working with Mutanto is always an excellent experience. Initially, I met the team while looking for UX/UI specialists to collaborate on projects with my clients. In 2022 they came on board to lead the design of my project \"Modo Avión\", a virtual escape game created in Unity. <strong>What I value most about Mutanto is their ability to listen and understand my goals and specific needs for each project, their creativity, commitment and dedication.</strong>",
              "img" => "en/projects/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon.png",
              "imgx2" => "en/projects/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon@2x.png",
              "title" => "Modo Avión",
              "name" => "Paula Pazos",
              "position" => "Cantante",
              "width" => "448"
            ]
          ],
          "es" => [
            [
              "text" => "Hemos tenido el privilegio de trabajar con Mutanto durante más de dos años en el ambicioso proyecto de transformación digital de Systel.
                        Elegimos a Mutanto por su enfoque centrado en el cliente y su trayectoria consolidada en el mercado, especialmente en proyectos que abarcan aspectos tan fundamentales como Branding, UX y UI. Ademas de su capacidad de adaptabilidad al equipo de trabajo. <strong>Cada resultado entregado por Mutanto ha superado nuestras expectativas, generando un impacto significativo en nuestros objetivos.</strong><strong>Lo que más destaca del equipo de Mutanto es su  flexibilidad, capacidad de adaptación y la rapidez con la que abordan cada proyecto</strong>. Su compromiso con cada cliente. ",
                        "img" => "en/projects/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon.png",
                        "imgx2" => "en/projects/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon@2x.png",
                        "title" => "Systel",
                        "name" => "Soledad Mansilla",
                        "position" => "Marketing leader, Systel Argentina",
                        "width" => "707"
            ],
            [
              "text" => "Mi experiencia con Mutanto fue maravillosa, el equipo tiene ideas innovadoras, son súper eficientes, <strong>ellos fueron los encargados de Welly Go, y siempre entendieron a la perfección nuestras necesidades</strong>. Agradecida por la calidad profesional y humana de este equipo!",
              "img" => "en/projects/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon.png",
              "imgx2" => "en/projects/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon@2x.png",
              "title" => "Welly Go",
              "name" => "Nahir Caro Lemble",
              "position" => "Founder, Welly Go",
              "width" => "321"
            ],
            [
              "text" => "He tenido el placer de trabajar con Mutanto durante más de un año y no puedo recomendarlos lo suficiente. Anteriormente, nuestra empresa tenía un diseñador interno a tiempo completo y, al principio, estaba nervioso por la posibilidad de subcontratar a una agencia. Sin embargo, <strong>Mutanto ha sido un socio de ensueño. Son rápidos y receptivos y crean hermosos diseños</strong>. Siempre me impresiona cómo pueden cumplir con nuestras pautas de marca, pero nada parece redundante o predecible. Nunca dicen que no a cualquier proyecto que les pedimos y están tan interesados ​​en los resultados como nosotros. <strong>¡Estoy muy agradecido por su asociación!</strong>",
              "img" => "en/projects/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon.png",
              "imgx2" => "en/projects/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon@2x.png",
              "title" => "HTS",
              "name" => "Erica Palmer",
              "position" => "SR. Content Marketing  Manager, HST Pathways",
              "width" => "609"
            ],
            [
              "text" => "Reconstruí mi marca con Mutanto, fueron increíbles y profesionales. El equipo fue muy amable y paciente conmigo ya que seguía pidiendo más cambios.😅 <strong>Cuando hicieron los diseños superaron mis expectativas</strong>. Incluso se los recomendé a mis amigos. <strong>¡Honestamente me sorprendió su inteligencia y creatividad!</strong>",
              "img" => "en/projects/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon.png",
              "imgx2" => "en/projects/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon@2x.png",
              "title" => "Cref",
              "name" => "Sara Alswailem",
              "position" => "Co-Fundadora de Cref",
              "width" => "370"
            ],
            [
              "text" => "He trabajado con el equipo en el diseño de mi pagina web. <strong>Han trabajado con mucho profesionalismo y siempre están disponibles para dudas y cambios </strong>. Venia de una mala experiencia y con ellos he encontrado una solución eficaz.",
              "img" => "en/projects/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon.png",
              "imgx2" => "en/projects/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon@2x.png",
              "title" => "Grupo Herrero",
              "name" => "Federico Herrero",
              "position" => "Socio Gerente, Grupo Herrero",
              "width" => "309"
            ],
            [
              "text" => "He estado trabajando personalmente con Mutanto desde hace un par de años y no puedo dejar de destacar lo mucho que me gusta trabajar con ellos. </strong>Son muy detallistas, escuchan muy bien nuestros \"constantes\" comentarios y tienen una mentalidad innovadora</strong>. En mi empresa, <strong>ya es un verbo \"Mutantificar algo\", cuando quieres hacerlo más cool </strong>, bien diseñado y actualizado.Ha sido un placer, y sin duda muchas más cosas que hacer juntos.",
              "img" => "en/projects/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon.png",
              "imgx2" => "en/projects/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon@2x.png",
              "title" => "Bocho",
              "name" => "Héctor Costa",
              "position" => "Co-Fundador, Bocho",
              "width" => "448"
            ],
            [
              "text" => "Trabajar con Mutanto siempre es una experiencia excelente. Inicialmente, conocí al equipo mientras buscaba especialistas en UX/UI para colaborar en proyectos con mis clientes. En 2022 se sumaron para liderar el diseño de mi proyecto \"Modo Avión\", un juego de escape virtual creado en Unity. <strong>Lo que más valoro de Mutanto es su capacidad para escuchar y comprender mis objetivos y necesidades específicas para cada proyecto, su creatividad, compromiso y dedicación</strong>.",
              "img" => "en/projects/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon.png",
              "imgx2" => "en/projects/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon@2x.png",
              "title" => "Modo Avión",
              "name" => "Paula Pazos",
              "position" => "Cantante",
              "width" => "448"
            ]
          ],
        ];
        foreach ($userReviwes[$language] as $review) {
          userReviwe($review["text"], $review["img"], $review["imgx2"], $review["title"], $review["name"], $review["position"], $review["width"]);
        }
        ?>
      </div>
    </div>
    <!-- Button & Line -->
    <div class="mutanto__elements-button-with-bgLine -mobile-off -buttnWithe" style="width: 100%;position: relative;top: -100px;left: 50%;">
          <?php 
            if ($language == "es") {
              echo '<button id="reviweButtn" alt="Ver más" class="mutanto__elements-button">Ver más</button>';
            } else {
              echo '<button id="reviweButtn" alt="View More" class="mutanto__elements-button">View More</button>';
            }
          ?>
      </div>

    <!-- End Reviwe  -->