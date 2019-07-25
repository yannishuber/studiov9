<?php if (has_post_thumbnail($post->ID)) : ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <a href="<?php echo the_permalink(); ?>">
        <div class="project-item">
            <img src="<?php echo $image[0]; ?>" class="project-item-image" />
            <span class="project-item-title"><?php
                                                the_title();
                                                ?></span>
        </div>
    </a>
<?php endif; ?>