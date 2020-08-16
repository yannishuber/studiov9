<?php

/**
 * The template for displaying all projects
 */

get_header();
?>

<section id="project-container" class="main-content">
    <?php

    // retrieve all projects posts
    $args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'DSC', 'category' => get_queried_object()->term_id );
    $projects = get_posts( $args ); 


    foreach( $projects as $post ) {	
        setup_postdata($post); 
        get_template_part('template-parts/content/project', 'page');
    }


    ?>

</section>

<?php
get_footer('home');