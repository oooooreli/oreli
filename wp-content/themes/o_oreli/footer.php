<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package o_oreli
 */
 global $check_logo;
 global $check_slogan;
 global $footer_slogan_bis;
 global $logo_couleur;
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php if($check_logo): ?>
				<img src="<?php if($logo_couleur) { echo $logo_couleur; }?>" alt="<?php echo get_bloginfo('name'); ?>">
			<?php endif; ?>
			<?php if($check_slogan): ?>
				<?php echo get_bloginfo('description'); ?>
			<?php endif; ?>
			<?php if($footer_slogan_bis) { echo $footer_slogan_bis; }?>
			<?php wp_nav_menu( array( 'theme_location' => 'menu_footer') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
