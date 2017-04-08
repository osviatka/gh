<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
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

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gh-exam' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- added cont ..... -->
		<div class="container">
			<div class="row">
				<div class="col-12 header-wrapper">
					<div class="heading">
						<h1 class="title">

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span class=""><?php echo get_theme_mod('header_title_edit_section'); ?></span> </a></h1>


					</div>



					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blogunder' ); ?></button>
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu'
						) ); ?>
					</nav><!-- #site-navigation -->


				</div>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<!-- added container with row..... -->
		<div class="container">
			<div class="row">
