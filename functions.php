<?php
/*Registrera menyer*/

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-nav' => __('Huvudmeny')
    ));

    register_nav_menus(array(
        'footer-om' => __('Footer-om-oss')
    ));

    register_nav_menus(array(
        'footer-kontakt' => __('Footer-kontakt')
    ));
}

// Aktivera utvald bil
add_theme_support('post-thumbnails');
//custom-storlekar
add_image_size('post-img-medium', 500, 500);
add_image_size('post-img-large', 900, 600);
add_image_size('post-img-small', 400, 400);

// Gör header image utbytbar
$args = array(
'width' => 1600,
'height' => 500,
'uploads' => true,
);
add_theme_support('custom-header', $args);

//widget
/*aktiverar widget area*/
add_action('widgets_init', 'dreamlodge_widget_init');

function dreamlodge_widget_init() {
    register_sidebar(array(
        'name' => 'puff-section på startsida',
        'id' => 'start-puff-section',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        'before_widget' => '<div class="col-12-xs col-12-md col-12-lg">',
        'after_widget' => '</div>'
       
    ));
}


//Plocka bort comments från wp-admin
add_action('admin_menu', 'remove_menus');
function remove_menus() {
    remove_menu_page('edit_comments.php');
}
