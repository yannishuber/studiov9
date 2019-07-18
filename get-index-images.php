<?php

if (isset($_POST['device'])) {
    if($_POST['device'] == 'mobile') {
        $desktop = array(
            'post_type' => 'attachment',
            'category_name' => 'accueil-mobile',
    
            );
            $attachments_desktop = get_posts($desktop);
            shuffle($attachments_desktop);
            json_encode(array_map(create_function('$o', 'return $o->id;'), $attachments_desktop));

    } else if ($_POST['device'] == 'desktop') {
        $desktop = array(
        'post_type' => 'attachment',
        'category_name' => 'accueil',

        );
        $attachments_desktop = get_posts($desktop);
        shuffle($attachments_desktop);
        json_encode(array_map(create_function('$o', 'return $o->id;'), $attachments_desktop));
    }
}
?>