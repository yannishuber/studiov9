<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php if (has_post_thumbnail($post->ID)) : ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <a href="<?php echo the_permalink();?>">
    <div class="project-item">
    <div class="project-item-image" style="background-image: url('<?php echo $image[0]; ?>')">
        
    </div>
    <span class="project-item-title"><?php
                                            the_title();
                                            ?></span>
    </div>
    </a>
<?php endif; ?>