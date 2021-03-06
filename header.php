<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="home-head-block col-sm-6">
					<h1 class="site-title border"><?php $key="masthead-header"; echo get_post_meta($post->ID, $key, true); ?></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>

				<div id="navbar" class="navbar">
					<div class="container">
						<div class="row">
							<a class="home-link col-md-3 col-sm-2" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php echo get_bloginfo('template_directory');?>/images/opengov_logo@2x.png" width="215" alt="OpenGov Foundation Logo" class="opengov_logo">
							</a>
							<nav id="site-navigation" class="navigation main-navigation col-md-9 col-sm-10" role="navigation">
								<button class="menu-toggle"><?php _e( 'Menu', 'opengovfoundation' ); ?></button>
								<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'opengovfoundation' ); ?>"><?php _e( 'Skip to content', 'opengovfoundation' ); ?></a>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
							   <? // php get_search_form(); ?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div><!-- #navbar -->
			</div><!- .container -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
