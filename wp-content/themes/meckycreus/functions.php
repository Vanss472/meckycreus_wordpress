<?php
/**
 * meckycreus functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package meckycreus
 */

//set the maximum content width
if ( ! isset( $content_width ) )
    $content_width = 1080; /* pixels */

if( ! function_exists('meckycreus_setup') ):
	function meckycreus_setup() {
		// navigation
		function my_nav() {
			wp_nav_menu(
			array(
				'theme_location'  => 'header-menu', 
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu', 
				'items_wrap'      => '<ul class="list l-mediaquery list-inline l-right desktop-nav">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
				)
			);
		}

		function register_my_menu(){
		    register_nav_menus(array( // Using array to specify more menus if needed
		        'header-menu' => __('Header Menu', 'meckycreus') // Main Navigation
		    ));
		}

		// Remove the <div> surrounding the dynamic navigation to cleanup markup
		function my_wp_nav_menu_args($args = '') {
		    $args['container'] = false;
		    return $args;
		}

		//add class on menu li
		function add_classes_on_li($classes) {
		  $classes[] = 'list-item';
		  return $classes;
		}

		//add class on menu a tag
		function add_linkclass($linkclass) {
			return preg_replace('/<a /', '<a class="links"', $linkclass);
		}

		//add class on p tag inside the content
		function add_ptagclass($ptagclass) {
			return preg_replace('/<p([^>]+)?>/', '<p class="paragraph">', $ptagclass);
		}

		//svg
		function cc_mime_types($mimes) {
		  $mimes['svg'] = 'image/svg+xml';
		  return $mimes;
		}
	}
endif;

//Add Actions
add_action( 'after_setup_theme', 'meckycreus_setup' );
add_action('init', 'register_my_menu'); // Add HTML5 Blank Menu

//Add Filters
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation 
add_filter('nav_menu_css_class', '__return_false', 100, 1); //remove li wp classes from menu
add_filter('nav_menu_item_id', '__return_false', 100, 1); //remove id wp classes from menu
add_filter('page_css_class', '__return_false', 100, 1); // Remove Navigation <li> Page ID's
add_filter('nav_menu_css_class', 'add_classes_on_li', 100, 1); //add custom li class on menu
add_filter('wp_nav_menu','add_linkclass'); //add link class to menu
add_filter('the_content','add_ptagclass'); //add paragraph class to p tag inside the content
add_filter('upload_mimes', 'cc_mime_types'); //Allow SVG through WordPress Media Uploader

?>