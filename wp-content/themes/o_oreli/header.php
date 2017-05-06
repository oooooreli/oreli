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
				<div class="site-header--logo--details">
				<h1 class="o_title">intégratrice<span>web.</span></h1>
				<?php include ('template-parts/__rs.php') ?>
				</div>
			</div>
			</div>

</header><!-- #masthead -->



			<div class="site-header--menu">
				<div class="menu">
						<span></span>
						<span></span>
						<span></span>
				</div>					
			</div>
			<div class="site-header--menu-main">
			<div class="ghost-wrap">

		<div class="ghost-wrap-content">
					<div class="row">
						<div class="col col-50"><?php include ('template-parts/__rs.php') ?></div>
						<div class="col col-50"><?php wp_nav_menu( array( 'theme_location' => 'principal' ) ); ?></div>
					</div>
				</div></div>
			</div>


<?php if ( is_front_page() || is_home() ) : ?>

<?php endif; ?>

	<div id="content" class="site-content">
