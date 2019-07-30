<?php get_header(); ?>

<section class="main-content">
        <?php
        the_post();
        the_content();
        ?>
</section>

<?php get_footer(); ?>