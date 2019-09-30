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


function widgets_sidebar(){
    register_sidebar( array(
    'name'          => esc_html__( 'Home Page Sidebar Top', 'renofinance' ),
    'description'   => esc_html__( 'This is sidebar one description......', 'renofinance' ),
    'id'            => 'widget-home-one',
    'before_widget' => ' <div class="widget-one">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2> ',
) );

    register_sidebar( array(
    'name'          => esc_html__( 'Footer sidebar', 'renofinance' ),
    'description'   => esc_html__( 'This is sidebar two description......', 'renofinance' ),
    'id'            => 'widget-home-two',
    'before_widget' => '<div class="col-md-4 footer-section">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-white">',
    'after_title'   => '</h2> ',
) );

    register_sidebar( array(
    'name'          => esc_html__( 'Title-sidebar', 'renofinance' ),
    'description'   => esc_html__( 'This is Title-sidebar description......', 'renofinance' ),
    'id'            => 'title-one',
    'before_widget' => '<article class="project-articles">',
    'after_widget'  => '</article>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2> ',
) );

}
add_action( 'widgets_init', 'widgets_sidebar' );

function set_excerpt_length() {
    return 6;
}

add_filter('excerpt_length','set_excerpt_length');

require get_template_directory(). '/inc/wpb_customizer.php';