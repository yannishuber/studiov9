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

    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/studiov9.jpg" type="image/x-icon">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/studiov9.jpg" type="image/x-icon">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php if (is_home()) echo '<link href="' . get_bloginfo('template_directory') . '/stylewhite.css" rel="stylesheet">'; ?>
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body>


    <div class="mobile-nav-content" id="mobile-nav-content">
        <div class="bg">
            <span class="menu-icon" id="close">
                <ion-icon name="close"></ion-icon>
            </span>
            <?php
            wp_nav_menu(array(
                'menu' => 'sv9-menu',
                'container_class' => 'sv9-menu'
            ));
            ?></div>
    </div>

    <div class="title-bar">
        <a id="title" href="<?php echo get_bloginfo('wpurl'); ?>">STUDIO<b>V9</b></a>
        <nav role="navigation">
            <?php
            wp_nav_menu(array(
                'menu' => 'sv9-menu',
                'container_class' => 'sv9-menu'
            ));
            ?>
        </nav>
        <nav class="mobile-nav-btn" role="navigation">
            <span class="menu-icon" id="open">
                <ion-icon name="menu"></ion-icon>
            </span>
        </nav>

    </div>
    <div class="main-content">