<?php
/**
 * Specific template for the About page.
 *
 * About page has a slug of ‘about’. This template is not available globally. 
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/#page-templates-purpose%c2%a0-user-control
 *
 * @package meckycreus
 */

get_header(); ?>

<div class="slice l-mediaquery twocol">
	<div class="slice-item l-width-75 l-padded-right-50 l-vertical-top">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="l-header t-site-font l-margin-bottom-20 font-color-site">
			<?php the_title(); ?>
		</h1>

		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="slice-item">
		<div class="twocol-bordered">
			<div class="l-margin-bottom-20 l-profilepic">
				<img src="<?php echo CFS()->get( 'image' ); ?>" class="l-img" /> 
			</div>

			<h1 class="l-header-sm t-site-font l-margin-bottom-20 font-color-site">
				Contact
			</h1>
			<p class="paragraph paragraph-no-margin">
				Cell: 415.310.1379
			</p>
			
			<p class="paragraph paragraph-no-margin">
				Email: <a href="mailto:meckycreus@gmail.com" class="links">meckycreus@gmail.com</a>
			</p>
			 
		</div>
	</div>
</div> 

<?php get_footer(); ?>