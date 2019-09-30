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