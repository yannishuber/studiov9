<?php

add_theme_support( 'post-thumbnails' ); 


function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'sv9-menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


