<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CableraOnline
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel='dns-prefetch' href='//use.fontawesome.com'>
	<link rel='dns-prefetch' href='//s.w.org'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>
	<header class="blog-header py-3 mb-5" role="banner">
		<div class="container">
			<div class="row flex-nowrap justify-content-between align-items-center">
					<div class="col-4 pt-1">
					</div>
					<div class="col-4 text-center">
							<a class="blog-header-logo text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> <sup class="text-primary"><?php cableraonline_get_subdomain(); ?></sup></a>
					</div>
					<div class="col-4 d-flex justify-content-end align-items-center">
					</div>
			</div>
		</div><!-- .container -->
	</header>

	<main role="main" class="container mb-5" role="main">
