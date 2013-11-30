<?php get_header(); ?>

<div class="container">
	<?php echo "<h1>"; the_title(); echo "</h1>"; ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>