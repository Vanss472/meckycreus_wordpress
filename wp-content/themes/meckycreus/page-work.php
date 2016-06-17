<?php
/**
 * Specific template for the Work page.
 *
 * Work page has a slug of ‘work’. This template is not available globally. 
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/#page-templates-purpose%c2%a0-user-control
 *
 * @package meckycreus
 */

get_header(); ?>

<div class="slice l-margin-top-50">
		<div class="slice-item l-vertical-top">
			<h1 class="l-header t-site-font l-margin-bottom-20 font-color-site">
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="slice-item l-right">
			<div class="select-button select">
				<select name="work" id="work" class="item-select" data-relationship="one"> 

				</select>
			</div>
		</div>
	</div>
	<section class="filter-container" data-relationship="one">
	<div class="slice slice-4col l-mediaquery l-margin-bottom-50">
		<?php
		$thumbnails = CFS()->get('portfolio');
		foreach ($thumbnails as $thumbnail): ?>
			<div class="slice-item"> 
			<div class="item-filter" data-type="<?php echo $thumbnail['category'] ?>"> 
			<section class="tile"> 
				<a href="#" class="tile-link video-trigger" data-rel="<?php echo $thumbnail['vimeo_id']; ?>">
					<div class="tile-image" style="background-image: url('<?php echo $thumbnail['image']; ?>')">
						<div class="tile-copy flex">
							<p class="paragraph paragraph-no-margin"><?php echo $thumbnail['title']; ?></p>
							<i class="icon icon-48 icon-play l-centered"></i>
						</div>
					</div>
				</a>
			</section>
			</div>
			</div>
		<?php endforeach; ?>
	</div>
	</section>

<?php get_footer(); ?>