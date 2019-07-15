<?php

/**
 * The template for displaying all projects
 */

get_header();
?>

<section id="project-container">
    <?php

    // retrieve all projects posts
    query_posts("cat=" . get_cat_ID('projets') . "&posts_per_page=100&order=ASC");


    if (have_posts()) {
        while (have_posts()) {

            the_post();
            get_template_part('template-parts/content/project', 'page');
        }
    }
    ?>

</section><!-- #primary -->

<?php
get_footer('nocontact');
