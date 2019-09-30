<?php

function wpb_customize_register($wp_customize)
{

    $wp_customize->add_section('showcase', array(
        'title'         => __('Showcase Section'),
        'description'   => sprintf(__('This is the showcase section')),
        'priority'      => 130,
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default'       => get_bloginfo('template_directory') . '/img/header-bg.jpg',
        'type'          => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label'  => 'Showcase Image',
        'section'  => 'showcase',
        'control'  => 'showcase_image',
        'priority'  => 1,
    )));

    $wp_customize->add_setting('brand_image', array(
        'default'  => get_bloginfo('template_directory') . '/img/site-logo.png',
        'type'  => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_image', array(
        'label' => 'Brand Image',
        'section' => 'showcase',
        'control' => 'brand_image',
        'priority' => 2
    )));

    $wp_customize->add_setting('extra_link_one', array(
        'default' => _x('FAQ', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('extra_link_one', array(
        'label'  => __('Extra Link One', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 3,
    ));

    $wp_customize->add_setting('extra_link_two', array(
        'default' => _x('GAMES', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('extra_link_two', array(
        'label'  => __('Extra Link Two', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 4,
    ));

    $wp_customize->add_setting('extra_link_one_href', array(
        'default' => _x('www.facebook.com', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('extra_link_one_href', array(
        'label'  => __('Extra Link One Href', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 5,
    ));

    $wp_customize->add_setting('extra_link_two_href', array(
        'default' => _x('www.youtube.com', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('extra_link__two_href', array(
        'label'  => __('Extra Link Two Href', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 6,
    ));

    $wp_customize->add_setting('freelancer_btn_text', array(
        'default' => _x('Freelancer Votre Project', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('freelancer_btn_text', array(
        'label'  => __('Freelancer Button Text', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 7,
    ));

    $wp_customize->add_setting('buy_button_one', array(
        'default' => _x('Freelancer Votre Project', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('buy_button_one', array(
        'label'  => __('Buy Button One', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 7,
    ));

    $wp_customize->add_setting('buy_button_two', array(
        'default' => _x('Pret a commencer ?', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('buy_button_two', array(
        'label'  => __('Buy Button Two', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 8,
    ));

    $wp_customize->add_setting('name_text', array(
        'default' => _x('Réalisez <br>vos rénovations <br>maintenant!', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('name_text', array(
        'label'  => __('Header Text', 'renofinance'),
        'section'  => 'showcase',
        'priority'  => 9,
    ));

    // Unique Section Customizer 

    $wp_customize->add_section('unique', array(
        'title' => __('Unique Section'),
        'description' => sprintf(__('This is the unique section')),
        'priority' => 130,
    ));

    $wp_customize->add_setting('unique_title', array(
        'default' => _x('Ce qui nous rend unique!', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('unique_title', array(
        'label'  => __('Title', 'renofinance'),
        'section'  => 'unique',
        'priority'  => 1
    ));

    $wp_customize->add_setting('unique_paragraph', array(
        'default' => _x('Nous sommes conscients que la demande de financement pour votre rénovation n’est
        pas la partie la plus excitante de votre projet.', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('unique_paragraph', array(
        'label'  => __('Description', 'renofinance'),
        'section'  => 'unique',
        'priority'  => 2,
    ));

    $wp_customize->add_setting('widget_image', array(
        'default'       => get_bloginfo('template_directory') . '/img/header-bg.jpg',
        'type'          => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'widget_image', array(
        'label'  => 'Widget Image',
        'section'  => 'unique',
        'control'  => 'widget_image',
        'priority'  => 3,
    )));

    // Experience Section Customizer 

    $wp_customize->add_section('experience', array(
        'title' => __('Experience Section'),
        'description' => sprintf(__('This is the experience section')),
        'priority' => 140,
    ));

    $wp_customize->add_setting('experience_title', array(
        'default' => _x('Ce qui nous rend unique!', 'renofinance'),
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control('experience_title', array(
        'label'  => __('Title', 'renofinance'),
        'section'  => 'experience',
        'priority'  => 1,
    ));
}

add_action('customize_register', 'wpb_customize_register');

