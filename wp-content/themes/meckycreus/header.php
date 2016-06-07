<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meckycreus
 */

?><!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="<?php bloginfo('description'); ?>" />
	    <meta name="keywords" content="director, mecky, creus, meckycreus, Director of Photography, DP, DoP, Cinematography, Cinematographer, mecky creus, Director of Photography San Francisco, Director of Photography California" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- user scripts / style -->
    	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
    	<!-- select style hack -->
    	<link href="<?php echo get_template_directory_uri(); ?>/no-min.css" rel="stylesheet" />
    	<?php wp_head(); ?>
	</head>
	<body>
		<div id="container" class="landing" > 

        <!-- header -->
        <?php get_navigation(); ?>


        <!-- content -->
        <div id="content" class="content">
            <!-- content -->
			<div class="wrapper clearfix">	
				<?php get_homepage(); ?>
			</div>
        </div> 
	