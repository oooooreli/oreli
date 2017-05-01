<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package o_oreli
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head();
global $logo_blanc;
global $logo_couleur;
?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'o_oreli' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="ghost-wrap">

		<div class="site-header--logo ghost-wrap-content">
				<h2 class="main_title">aurélie aimard</h2>
				<h1 class="o_title">intégratrice<br>web</h1>
				<i class="fa fa-pinterest" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-linkedin" aria-hidden="true"></i>
			</div>
			</div>

		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
				</div>
			</div>
			<!-- Related demos -->
		</div><!-- /container -->
			<div class="site-header--menu">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'o_oreli' ); ?><span></span><span></span><span></span></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'Principal' ) ); ?>
					</nav><!-- #site-navigation -->
			</div>
</header><!-- #masthead -->

<?php if ( is_front_page() || is_home() ) : ?>

<?php endif; ?>

	<div id="content" class="site-content">
