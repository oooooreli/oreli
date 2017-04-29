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
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Roboto:300,400,700" rel="stylesheet">

<?php wp_head();
global $logo_blanc;
global $logo_couleur;
?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'o_oreli' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="site-header--logo">
				<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home"><img src="<?php if($logo_blanc) { echo $logo_blanc; }?>" height="" width="" alt="Logo o_oreli "/></a>
			</div>
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
