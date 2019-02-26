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
	<header class="blog-header py-3 mb-4" role="banner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><a class="blog-header-logo text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="h6 text-muted">Noticias de Chaco</h2>
				</div>
			</div>
		</div><!-- .container -->
	</header>

	<main role="main" class="container mb-5" role="main">
