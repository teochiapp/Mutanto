<section id="marketing-projects" class="marketing-projects">
    <div class="marketing-projects-header">
        <h4 class="marketing-projects-eyebrow"><?php echo $marketingData['projects']['eyebrow']; ?></h4>
        <h2 class="marketing-projects-title"><?php echo $marketingData['projects']['title']; ?></h2>
        <div class="marketing-projects-separator"></div>
    </div>
    
    <div class="marketing-projects-list">
        <?php foreach ($marketingData['projects']['items'] as $project): ?>
            <div class="marketing-project-item">
                <div class="marketing-project-info">
                    <div class="marketing-project-info-top">
                        <span class="marketing-project-category"><?php echo $project['category']; ?></span>
                        <h3 class="marketing-project-name"><?php echo $project['name']; ?></h3>
                        <p class="marketing-project-description"><?php echo $project['description']; ?></p>
                    </div>
                    
                    <div class="marketing-project-tags">
                        <?php if (isset($project['tags']) && is_array($project['tags'])): ?>
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="marketing-project-tag"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="marketing-project-gallery">
                    <?php if (isset($project['images'][0])): 
                        $mobile_img_path = isset($project['mobile_images'][0]) ? $project['mobile_images'][0] : $project['images'][0];
                        $mobile_img_local = str_replace(URL_SITE, $_SERVER['DOCUMENT_ROOT'] . '/', urldecode($mobile_img_path));
                        $mobile_aspect_ratio = '16/9';
                        if (file_exists($mobile_img_local)) {
                            $size = @getimagesize($mobile_img_local);
                            if ($size) {
                                $mobile_aspect_ratio = $size[0] . ' / ' . $size[1];
                            }
                        }
                    ?>
                        <div class="marketing-project-image image-1" style="
                            --bg-desktop: url('<?php echo str_replace(' ', '%20', $project['images'][0]); ?>');
                            --bg-mobile: url('<?php echo str_replace(' ', '%20', $mobile_img_path); ?>');
                            --aspect-ratio-mobile: <?php echo $mobile_aspect_ratio; ?>;
                        "></div>
                    <?php endif; ?>
                    <?php if (isset($project['images'][1])): ?>
                        <div class="marketing-project-image image-2" style="
                            --bg-desktop: url('<?php echo str_replace(' ', '%20', $project['images'][1]); ?>');
                            --bg-mobile: url('<?php echo str_replace(' ', '%20', isset($project['mobile_images'][1]) ? $project['mobile_images'][1] : $project['images'][1]); ?>');
                        "></div>
                    <?php endif; ?>
                    <?php if (isset($project['images'][2])): ?>
                        <div class="marketing-project-image image-3" style="
                            --bg-desktop: url('<?php echo str_replace(' ', '%20', $project['images'][2]); ?>');
                            --bg-mobile: url('<?php echo str_replace(' ', '%20', isset($project['mobile_images'][2]) ? $project['mobile_images'][2] : $project['images'][2]); ?>');
                        "></div>
                    <?php endif; ?>
                    <?php if (isset($project['images'][3])): ?>
                        <div class="marketing-project-image image-4" style="
                            --bg-desktop: url('<?php echo str_replace(' ', '%20', $project['images'][3]); ?>');
                            --bg-mobile: url('<?php echo str_replace(' ', '%20', isset($project['mobile_images'][3]) ? $project['mobile_images'][3] : $project['images'][3]); ?>');
                        "></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
