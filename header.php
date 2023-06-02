<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/static/studiov9.jpg" type="image/x-icon">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/static/studiov9.jpg" type="image/x-icon">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php if (is_front_page()) echo 'class="homepage"'; ?>>


    <div class="mobile-nav-content" id="mobile-nav-content">
        <div class="bg">
            <span class="menu-icon" id="close">
                <ion-icon name="close"></ion-icon>
            </span>
            <?php
            
            if (is_page('projets') || is_category()) {
                wp_nav_menu(array(
                    'theme_location' => 'sv9-menu-mobile-proj',
                    'container_class' => 'sv9-menu-mobile-proj'
                ));
            } else {
                wp_nav_menu(array(
                    'theme_location' => 'sv9-menu',
                    'container_class' => 'sv9-menu'
                ));
    
            }
            ?>
        </div>
    </div>

    <?php if (is_front_page()) : ?>
        <div id="home-text">
            <span id="home-title"><span id="home-title-studio">STUDIO</span><span id="home-title-v9">V9</span> <span id="home-title-archi">ARCHITECTES</span></span>
            <img id="arrow-down" onclick="scrollDown()" src="<?php echo get_bloginfo('template_directory'); ?>/static/arrow-down.png" />
        </div>
        <div id="overlay"></div>
        <div id="home-images">
            <?php
                $mobile = array(
                    'post_type' => 'attachment',
                    'category_name' => 'accueil-mobile',
    
                );

                $desktop = array(
                    'post_type' => 'attachment',
                    'category_name' => 'accueil',
    
                );


                $attachments_desktop = get_posts($desktop);
                $attachments_mobile = get_posts($mobile);

                // get length of shortest array
                $length = min(count($attachments_desktop), count($attachments_mobile));

                // shuffle both arrays
                shuffle($attachments_desktop);
                shuffle($attachments_mobile);

                // for each element pair of the shortest array
                for($i = 0; $i < $length; $i++){
                    echo "<picture class=\"slider-item\">";
                    echo "<source media='(max-width: 800px)' srcset='" . wp_get_attachment_image_src($attachments_mobile[$i]->ID, 'full')[0] . "' alt='" . get_post_meta( $attachments_mobile[$i]->ID, '_wp_attachment_image_alt', true) . "'>";
                    echo "<img src='" . wp_get_attachment_image_src($attachments_desktop[$i]->ID, 'full')[0] . "' alt='" . get_post_meta( $attachments_desktop[$i]->ID, '_wp_attachment_image_alt', true) . "' />";
                    echo "</picture>";
                }


            ?>
        </div>
    <?php endif; ?>

    <div id="content-area">
        <div id="title-bar">
            <a id="title" href="<?php echo get_bloginfo('wpurl'); ?>#studiov9">STUDIO<b>V9</b></a>
            <nav role="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'sv9-menu',
                    'container_class' => 'sv9-menu'
                ));
                ?>
            </nav>

            <?php if (is_page('projets') || is_category()) { ?>
            <nav class="nav-projets" role="navigation">
                <?php 
                wp_nav_menu(array(
                        'theme_location' => 'sv9-menu-proj',
                        'container_class' => 'sv9-menu-proj'
                    ));
                    ?>
            </nav>
            <?php } ?>
            <nav class="mobile-nav-btn" role="navigation">
                <span class="menu-icon" id="open">
                    <ion-icon name="menu"></ion-icon>
                </span>
            </nav>
        </div>