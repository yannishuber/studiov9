<?php
get_header();
?>

<section id="page-main">
    <?php

    while (have_posts()) :
        the_post();

        the_content();

    endwhile; // End of the loop.
    ?>

</section>
<?php
get_footer();
