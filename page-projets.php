<?php

/**
 * The template for displaying all projects
 */

get_header();
?>

<div id="project-container">
    <?php

    // retrieve all projects posts
    query_posts("cat=" . get_cat_ID('projets') . "&posts_per_page=100");


    if (have_posts()) {
        while (have_posts()) {

            the_post();
            get_template_part('template-parts/content/project', 'page');

            //echo '<a href="' . the_permalink() . '">' . the_title() . '</a>';
        }
    }
    ?>

</div><!-- #primary -->

<?php
get_footer();
