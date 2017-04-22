<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Northridge_Review
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'northridge-review' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="top-nav">
			<?wp_nav_menu( array( 'theme_location' => 'top-menu', 'container-class' => 'top-menu-class' ) ); ?>
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
