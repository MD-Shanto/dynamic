<?php if (!is_single()) : ?>

  <div class="col-md-3 text-center">
    <a href="<?php the_permalink() ?>">
      <div class="card">
        <?php if (has_post_thumbnail()) : ?>
          <div class="card-img-top">
            <?php the_post_thumbnail() ?>
          </div>
        <?php else : ?>
          <div class="card-no-image">
            <img src="<?php bloginfo('template_url') ?> /img/no-photo.png" alt="">
          </div>
        <?php endif ?>

        <div class="card-body">
          <h5 class="card-title">
            <a href="<?php the_permalink() ?>">
              <?php the_title(); ?></a></h5>
          <div class="text-all"><?php the_excerpt() ?></div>
          <p class="card-text-two"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
              Written by <?php the_author(); ?> on <?php the_time(); ?>
            </a></p>
        </div>
      </div>
    </a>
  </div>

<?php else : ?>

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

<?php endif; ?>