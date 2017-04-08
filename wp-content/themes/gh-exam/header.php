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
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="header-wrapper">
						<div class="header-branding">
							<h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span class="header-under">y</span></a></h1>
						</div>
						<div class="header-nav">
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gh-exam' ); ?></button>
								<?php wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
									'menu_class' => 'header-navigation') );
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div><!-- .header-box -->

				</div>
			</div>
		</div><!-- container -->
	</header><!-- #masthead -->



	<div id="content" class="site-content">
		<div class="container">
			<div class="row">