<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="keywords" content="Demo Keywords">
    <meta name="author" content="Demo Author Name">
    <meta http-equiv="refresh" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <!-- Website Fav Icon  -->
    <link rel="shortcut icon" href="">
    <!-- Style Sheets  -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?> /css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

    <title><?php bloginfo('name') ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title() ?>
    </title>
    <?php wp_head(); ?>
    <style>
        .showcase {
            width: 100%;
            max-width: 100%;
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/header-bg.jpg'); ?>);
            background-size: cover;
            margin-top: -13rem;
            height: 100vh;
            background-position: center;
        }

        @media (max-width: 991px) {
            .showcase {
                height: 150vh;
            }
        }
        @media (max-width: 767px) {
            .showcase {
                height: 150vh;
            }
        }
        @media (max-width: 507px) {
            .showcase {
                height: 160vh;
            }
        }
    </style>
</head>

<body>
    <!-- START HEADER SECTION  -->
    <header id="home">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="<?php echo get_theme_mod('brand_image', get_bloginfo('template_url') . '/img/site-logo.png'); ?>" alt="Site Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'navbar-nav text-dark',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>

                <div class="extra-list">
                    <div class="link-section">
                        <a class="nav-link" href="<?php echo get_theme_mod('extra_link_one_href', 'www.facebook.com'); ?>">
                            <?php echo get_theme_mod('extra_link_one', 'FAQ'); ?></a>
                        <a class="nav-link" href="<?php echo get_theme_mod('extra_link_two_href', 'www.youtube.com'); ?>">
                            <?php echo get_theme_mod('extra_link_two', 'GAMES'); ?></a>
                    </div>
                    <form action="<?php echo home_url('/')?>" method="get">
                  <input type="search" name="s" class="search-box">
                  <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </div>

             

            </div>
            </div>
        </nav>
        <div class="showcase">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-card">
                            <div class="title d-flex flex-row">
                                <h1>6.99%</h1>
                                <p>Lorem ipsum dolor<br> sit amet consectetur<br> adipisicing elit</p>
                            </div>
                            <div class="input-group input-one">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter a number or dollar">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="<?php bloginfo('template_url') ?>/img/dolar-sign.png" alt=""></span>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control input-two" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Choose a option">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="<?php bloginfo('template_url') ?>/img/down-sign.png" alt=""></span>
                                </div>
                            </div>
                            <div class="button-1 text-center">
                                <button class="btn btn-primary button-1" type="button"><?php echo get_theme_mod('buy_button_one', 'Freelancer Votre Project'); ?></button>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control input-two" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="0,00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="<?php bloginfo('template_url') ?>/img/dolar-sign.png" alt=""></span>
                                </div>
                            </div>
                            <p class="text-center">Santo Computer and games</p>
                            <div class="button-2 text-center">
                                <button class="btn btn-primary button-2" type="button"><?php echo get_theme_mod('buy_button_two', 'Pret a commencer ?'); ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 m-auto">
                        <div class="header-text">
                            <h1><?php echo get_theme_mod('name_text', 'Réalisez <br>vos rénovations <br>maintenant!'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- END HEADER SECTION  -->

    <body>