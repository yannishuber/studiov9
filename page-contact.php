<?php
get_header();
?>

<section id="contact" class="content">
    <?php if (has_post_thumbnail($post->ID)) : ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
        <div id="contact-image-container"><img id="contact-image" src="<?php echo $image[0]; ?>" /></div>

    <?php endif; ?>
    <div id="contact-content">
        <?php
        the_post();
        the_content();
        ?>
    </div>
</section>

<?php
get_footer('nocontact');
