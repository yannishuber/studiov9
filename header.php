<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?php echo get_bloginfo('name'); ?></title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <script>
        $(() => {

            $('img').removeAttr('title');

            $(".menu-icon").on("click", () => {
                $(".mobile-nav-content").toggleClass("show");
                // $(".title-bar").addClass("blur");
                // $(".main-content").addClass("blur");
                // $("footer").addClass("blur");

            });

            // $(".mobile-nav-content").on("click", () => {
            //     console.log($(event.target));
            //     if (!$(event.target).is('.bg *')) {
            //         // $(".title-bar").removeClass("blur");
            //         // $(".main-content").removeClass("blur");
            //         // $("footer").removeClass("blur");
            //         $(".mobile-nav-content").removeClass("show");
            //     }



            // });
        });
    </script>
    <?php wp_head(); ?>
</head>

<body>


    <div class="mobile-nav-content">
        <div class="bg">
            <span class="menu-icon" id="close"><ion-icon name="close"></ion-icon></span>
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
            <span class="menu-icon">
                <ion-icon name="menu"></ion-icon>
            </span>
        </nav>

    </div>
    <div class="main-content">