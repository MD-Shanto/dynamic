<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post() ?>
<div class="col-md-8 single-page mx-auto">
    
<h1><?php the_title(); ?></h1>
    <h4><?php the_content(); ?></h4>
    </div>
<?php endwhile ?>
<?php endif ?>

