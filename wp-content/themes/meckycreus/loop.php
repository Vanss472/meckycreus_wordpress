<?php
/**
 * The Loop.
 *
 * The Loop extracts the data for each post/page from the WordPress database and inserts 
 *	the appropriate information in place.
 *
 * @link https://developer.wordpress.org/themes/basics/the-loop/
 *
 * @package meckycreus
 */
 ?>

<!-- show content -->
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>