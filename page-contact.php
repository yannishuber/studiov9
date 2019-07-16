<?php
get_header();
?>

<section id="contact">
    <?php if (has_post_thumbnail($post->ID)) : ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
        <div id="contact-image-container"><img id="contact-image" src="<?php echo $image[0]; ?>"/></div>

    <?php endif; ?>
    <div id="contact-content">
        <?php

        while (have_posts()) :
            the_post();

            the_content();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }

        endwhile; // End of the loop.
        ?>
    </div>
    </section>

<?php
get_footer('nocontact');
