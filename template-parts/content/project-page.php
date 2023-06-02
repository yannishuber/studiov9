<?php if (has_post_thumbnail($post->ID)) : ?>
    <?php
        $image_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail')[0];
        $image_srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); 
    ?>

    <a href="<?php echo the_permalink(); ?>">
        <div class="project-item">
            <img src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset ?>" width="(max-width: 800px) 95vw, (max-width: 1400px) 540px, 355px" class="project-item-image"  style="opacity: 1"/>
            <span class="project-item-title"><?php
                                                the_title();
                                                ?></span>
        </div>
    </a>
<?php endif; ?>