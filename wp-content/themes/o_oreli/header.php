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
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'o_oreli' ); ?></a>

<section id="masthead" class="site-header" role="banner">
	<div class="ghost-wrap">
		<div class="site-header--logo ghost-wrap-content">
			<img class="starter starter--a" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/o_oreli/dist/img/logo-2.png" alt="" />
			<div class="site-header--logo--details">
	
				<div class="slogan">

			<h1 class="o_title spl--intro">Intégratrice Web</h1>	
<span class="starter">Je m'appelle Aurélie Aimard, je suis spécialisée dans la création de thème wordPress sur mesure.</span>
			</div>
			<span class="starter starter--b">
				<?php include ('template-parts/__rs.php') ?></span>
			</div>
		</div>
	</div>
</section><!-- #masthead -->

<div class="site-header--hamburger">
	<div class="o_nav-icon">
		<span></span>
		<span></span>
		<span></span>
	</div>					
</div>

<div class="site-header--menu-content">
	<div class="ghost-wrap">
		<div class="ghost-wrap-content">
			<div class="row middle">
				<?php wp_nav_menu( array( 'theme_location' => 'principal' ) ); ?>
			</div>
			<?php include ('template-parts/__rs.php') ?>
			<div class="rappel"><p class="rappel--logo"><a href="<?php echo site_url( '/', null ); ?>">aurélie a.</a></p>
				<p><strong>intégratrice web.</strong></p>
			</div>
				
		</div>
	</div>
</div>


<?php if ( is_front_page() || is_home() ) : ?>

<?php endif; ?>

	<div id="content" class="site-content">
