<?php get_header(); ?>

<section class="main-content">
    <div id="about-text">
        <?php
        the_post();
        the_content();
        ?>
    </div>
</section>

<?php get_footer('home'); ?>