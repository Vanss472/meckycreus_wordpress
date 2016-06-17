<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #container div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meckycreus
 */

?>
			</div><!-- /.wrapper -->
		</div><!-- #content -->
	</div><!-- #container -->

	<div class="overlay">
        <div class="close icon icon-27"></div>
        <div class="overlay-content iframe"></div>
    </div>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>

    <?php wp_footer(); ?>
</body>
</html>