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
</head>


<aside class="sidebar">
    <h2>Catagories</h2>
    <?php
    $args = array(
        'orderby' => 'slug',
        'parent' => 0
    );
    $categories = get_categories($args);
    foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '" rel="bookmark"> <i class="glyphicon glyphicon-asterisk"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
    }
    ?>
    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar') ?>
    <?php endif; ?>
</aside>

<h2>The Blog Posts</h2>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <?php get_template_part('content') ?>
    <?php endwhile; ?>
<?php else : ?>
    <h3>No posts Found</h3>

<?php endif; ?>




<?php get_footer(); ?>