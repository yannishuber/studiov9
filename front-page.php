<?php get_header(); ?>


<div id="home-sv9">
    <span id="home-title">STUDIO<b>V9</b> <span style="opacity: .6">ARCHITECTURE</span></span>
    <img id="arrow-down" onclick="scrollDown()" src="<?php echo get_bloginfo('template_directory'); ?>/static/arrow-down.png" />
</div>
<div id="overlay"></div>
<div id="home-images"></div>
<div class="main-content">
    <div id="about-text">
        <?php
        the_post();
        the_content();
        ?>
    </div>

    <?php get_footer('nocontact'); ?>