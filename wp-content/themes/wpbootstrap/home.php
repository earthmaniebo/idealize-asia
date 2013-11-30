<?php get_header(); ?>
<div class="container">
<div class="row">
  <div class="col-md-8">
    <h1>News</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>