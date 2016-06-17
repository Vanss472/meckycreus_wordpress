<?php
/**
 * The front page template for the site.
 *
 * “a static page” as set in the front page displays section of Settings → Reading.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package meckycreus
 */

get_header(); ?>

	<div class="slice hero">
	<div class="slice-row">

		<?php
		$fields = CFS()->get('heros');
		foreach ($fields as $field): ?>	 
		<div class="hero-container">
		<a href="#" class="hero-link video-trigger" data-rel="<?php echo $field['vimeo_id']; ?>">
			<div class="hero-image" style="background-image: url('<?php echo $field['hero_image']; ?>')">
				<div class="hero-txt">
					<span class="hero-type font-color-white t-font-jersey"><?php echo $field['category']; ?></span>
					
					<h1 class="hero-title t-site-font">
						<span class="hero-sub-title t-site-font"><?php echo $field['sub_title']; ?></span>
						<?php echo $field['hero_title']; ?>
					</h1>
					<i class="icon icon-48 icon-play l-centered"></i>
				</div>				
			</div>
		</a>
		</div>
		<?php endforeach; ?>
					
	</div>
	</div>

<?php get_footer(); ?>