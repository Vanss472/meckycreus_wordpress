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
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php bloginfo( 'name' ); ?> | <?php bloginfo('description'); ?></title>
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
        <header class="nav border-shadow">
			<nav class="wrapper wrapper-rel">
				<div class="slice slice-auto equal-height">
					<div class="slice-item l-vertical-middle l-width-75">
        				<?php my_nav(); ?>
	        			<a href="#" class="mobile-nav l-right">
					      <span class="bar"></span>
					      <span class="bar"></span>
					      <span class="bar"></span>
					    </a>
					    <a href="#" class="mobile-nav-close l-right">
					      <span class="bar-close icon icon-27"></span>
					    </a>
	  				</div>
				</div>
				<div class="wrapper main-header-logo">
				    <a href="home" class="logo">
				      <i class="icon icon-logo"></i>
				    </a> 
				</div>
			</nav>
		</header>

		<!-- Main content -->
		<div id="content" class="content">
		    <!-- content -->
			<div class="wrapper clearfix">	

	