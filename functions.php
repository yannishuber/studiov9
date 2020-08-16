<?php

add_theme_support('post-thumbnails');

function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
          'sv9-menu' => __( 'sv9-menu' ),
          'sv9-menu-proj' => __( 'sv9-menu-proj'),
          'sv9-menu-mobile-proj' => __( 'sv9-menu-mobile-proj')
        )
      );
}
add_action('init', 'wpb_custom_new_menu');

wp_enqueue_script('script', get_template_directory_uri() . '/static/js/script.js');

function enqueue_front_page_scripts()
{
    if (is_front_page()) {
        wp_enqueue_script('homeimages', get_template_directory_uri() . '/static/js/index.js');
        wp_localize_script('homeimages', 'wpurl', array('ajaxurl' => admin_url('admin-ajax.php')));
    }else if(is_page('projets')){
        wp_enqueue_script('projectscript', get_template_directory_uri() . '/static/js/projects.js');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_front_page_scripts');



function ajax_images_handler()
{
    if (isset($_POST['device'])) {
        if ($_POST['device'] == 'mobile') {
            $desktop = array(
                'post_type' => 'attachment',
                'category_name' => 'accueil-mobile',

            );
            $attachments_desktop = get_posts($desktop);
            shuffle($attachments_desktop);
            echo json_encode(array_map(create_function('$o', 'return $o->guid;'), $attachments_desktop));
        } else if ($_POST['device'] == 'desktop') {
            $desktop = array(
                'post_type' => 'attachment',
                'category_name' => 'accueil',

            );
            $attachments_desktop = get_posts($desktop);
            shuffle($attachments_desktop);
            echo json_encode(array_map(create_function('$o', 'return $o->guid;'), $attachments_desktop));
        }
    }

    wp_die();
}
add_action('wp_ajax_nopriv_images', 'ajax_images_handler');
add_action('wp_ajax_images', 'ajax_images_handler');
