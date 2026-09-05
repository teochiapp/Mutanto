       <?php
        $URL_CONTACTO = "/contacto/";
        if ($language == "en") {
            $URL_CONTACTO = "/contact-us/";
        }
        ?>
       <!-- End of the proyects -->
       <!-- Div : Proyect Chat with us -->
       <style>
           .mutanto__pryectos-chat {
               height: 100%;
               display: flex;
               flex-flow: column nowrap;
               gap: 10px;
           }

           .mutanto__pryectos-chat h2 {
               color: var(--blancomutanto);
               text-align: center;
               font-weight: 600;
               line-height: 134.5%;
               /* 75.32px */
           }
           
           .mutanto__elements-post-structure {
               width: 100%;
           }

            .mutanto__elements-post {
                margin-top: 0px !important;
                width: 446px;
           }

           .mutanto__elements-post .mutanto__elements-post-textContainer h5 {
                margin: 0px;
                padding: 0px;
                width: 446px;
                padding-right: 45px;
                
            }

           .mutanto__elements-post .mutanto__elements-post-img {
               width: 446px;
           }

           .mutanto__pryectos-recomended {
               color: var(--blancomutanto);
               font-weight: 700;
               letter-spacing: -0.352px;
               height: 100%;
               margin-top: 10vh;
               margin-bottom: 0vh;
           }

           @media (min-width: 1200px) {
            /*Desktop*/
                .mutanto__elements-post-structure { 
                    margin-bottom: 0px !important;
                }
                
                .mutanto__pryectos-recomended h3 {
                    font-family: 'Poppins';
                    font-weight: 700;
                    font-size: 32px;
                    line-height: 72px;
                }

                .mutanto__pryectos-chat {
                    margin-top: 240px !important;
                    margin-bottom: 300px !important;
                }

            }

           @media (max-width : 1199px) and (min-width: 577px) {

               /* Tablet */
               .mutanto__pryectos-recomended {
                   width: 98%;
               }

               .mutanto__pryectos-recomended h3 {
                    margin-left: 30px;
               }
               

               .mutanto__elements-post-structure {
                   flex-wrap: wrap;
               }

               .mutanto__elements-post {
                width: 350px !important;
               }

               .mutanto__elements-post .mutanto__elements-post-textContainer h5 {
                    width: 350px !important;
               }

               .mutanto__elements-post-structure  {
                    margin-top: 41px;
                }
                
           }

           @media (max-width : 576px) {

               /* Mobile */
               .mutanto__elements-post {
                   width: 300px !important;
                   height: fit-content;
                   gap: 0px;

               }

               .m.mutanto__pryectos-recomended h3 {
                   width: 98%;
                   font-size: 16px;
                   padding-left: 2%;
               }

               .owl-stage-outer {
                   width: 100vw;
               }

               .mutanto__elements-post .mutanto__elements-post-textContainer h5 {
                    margin: 0px;
                    padding: 0px;
                    width: auto;
                    height: auto;
                    margin-bottom: 25px !important;

                }

                .mutanto__elements-post .mutanto__elements-post-textContainer h4 {
                    margin: 0px;
                    padding: 0px;
                    margin-top: 10px;
                }

                .mutanto__pryectos-chat{
                    
                    margin-top: 120px;
                    margin-bottom: 120px;

                }
                .mutanto__elements-post-structure  {
                    margin-top: 30px;
                }
                .owl-carousel .owl-stage-outer {
                    height: fit-content !important;
                }

                .mutanto__pryectos-recomended h3{
                    font-weight: 500px !important;
                }
           }
       </style>
       <div class="mutanto__pryectos-chat">
           <h2><?php echo ($titleH2) ?></h2>
           <div class="mutanto__elements-button-with-bgLine proyects">
               <button tabindex="0" alt="<?php echo ($buttonText) ?>" tabindex="0" class="mutanto__elements-button" onclick="window.location.href='<?php echo (URL_SITE) . $language . $URL_CONTACTO ?>'"><?php echo ($buttonText) ?></button>
           </div>
       </div>
       <!-- End Div : Proyect Chat with us-->
 
       <?php if (!isset($seguirChumeando)) { ?>
       <div class="mutanto__pryectos-recomended" style="margin-top: 0px !important;">
           <?php
                    $textTitle = "Para seguir chusmeando";
                    if ($language == "en") {
                        $textTitle = "Tell me more";
                    }
           ?>
            <h3><?php echo( $textTitle)?></h3>
           <!-- Post -->
           <div class="mutanto__elements-post-structure">
               <?php
                require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect-relation-tags.php"));
                $proyectURLFolder = "proyectos";
                if($language == 'en') {
                    $proyectURLFolder = "projects";
                }
                require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/dbconextion.php"));
                $query = "SELECT DISTINCT (proyect_tags.proyects_id), proyects.name, proyects.title_" . $language . ", proyects.description_" . $language . ", proyects.dir FROM proyect_tags, proyects, tags WHERE (proyect_tags.proyects_id = proyects.id ) AND (proyect_tags.tags_id = tags.id)  AND tags_id IN(".$proyectsTagsRelation.") AND proyects.dir != \"".$matches[1]."\"  ORDER BY RAND() LIMIT 3";
                $stmt = $pdo->query($query);
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $post_URL = URL_SITE . $language . "/". $proyectURLFolder ."/" . $row['dir'];
                ?>
                   <div class="mutanto__elements-post" style="margin-top: 120px;">
                       <a href="<?php echo ($post_URL) ?>" alt="<?php echo ($post_URL) ?>" title="<?php echo ($post_URL) ?>">
                           <picture>
                               <source srcset="<?php echo ($post_URL) ?>/previwe.png 1x, <?php echo ($post_URL) ?>/previwe@2x.png 2x">
                               <img src="<?php echo ($post_URL) ?>/previwe.png" alt="<?php echo ($row["name"]) ?>" title="<?php echo ($row["name"]) ?>">
                           </picture>
                       </a>
                       <div class="mutanto__elements-post-textContainer">
                           <h4 class="mutanto__elements-post-title verdeMutanto"><?php echo ($row["name"]) ?></h4>
                           <h5 class="mutanto__elements-post-title-description blancoMuntanto"><?php echo ($row['description_'.$language]) ?></h5>
                       </div>
                   </div>
               <?php } ?>
           </div>
           <!-- End Post -->
       </div>
       <!-- End Proyect: Proyects recomended -->
       <?php } ?>
       <script>
           if (getWindowWidth() <= mobiles ) {
              document.querySelector(".mutanto__elements-post-structure").classList.add("owl-carousel");
           }
       </script>