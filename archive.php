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


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
   
        <div class="col-md-8 single-page mx-auto">
            <?php if (has_post_thumbnail()) : ?>
                <div class="single-image m-auto">
                    <?php the_post_thumbnail() ?>
                </div>
            <?php endif ?>

            <h1><?php the_title(); ?></h1>
            <h4><?php the_content(); ?></h4>

            <h5><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))  ?>">
                    <?php the_author(); ?>
                </a> on <?php the_date() ?></h5>
            </p>
            <!-- Comment Template  -->
            <?php comments_template(); ?>
        </div>

    <?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>