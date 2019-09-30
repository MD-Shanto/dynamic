<?php

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';


function wpb_theme_setup(){

    add_theme_support('post-thumbnails');
    add_theme_support('post-formats',array(
         'aside', 'gallery',
    ));

    register_nav_menus(array(
        'primary' => __('Primary_Menu')
    ));

}

add_action('after_setup_theme','wpb_theme_setup');


function wpb_init_widget($id) {
    register_sidebar(array(
        'name'            => 'sidebar',
        'id'              => 'sidebar',
        'before_widget'   => '<div class="sidebar-widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h2>',
        'after_title'     => '</h2>',
    ));
}

add_action('widgets_init','wpb_init_widget');

function set_excerpt_length() {
    return 6;
}

add_filter('excerpt_length','set_excerpt_length');

require get_template_directory(). '/inc/wpb_customizer.php';