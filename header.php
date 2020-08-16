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
        <div id="home-images"></div>
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