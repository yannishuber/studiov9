<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <link href="//fonts.googleapis.com/css?family=Droid+Sans:regular,700&amp;subset=latin" rel="stylesheet" type="text/css">

    <title><?php echo get_bloginfo('name'); ?></title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <?php wp_head(); ?>
</head>

<body>



    <div class="main-content">
        <div class="title-bar">
            <a id="title" href="<?php echo get_bloginfo('wpurl'); ?>">STUDIO<b>V9</b></a>
            <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                <?php
                wp_nav_menu(array(
                    'menu' => 'sv9-menu',
                    'container_class' => 'sv9-menu'
                ));
                ?>
            </nav>

        </div>