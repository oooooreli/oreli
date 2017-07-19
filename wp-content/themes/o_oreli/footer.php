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
				<p><img src="<?php if($logo_couleur) { echo $logo_couleur; }?>" alt="<?php echo get_bloginfo('name'); ?>"></p>
			<?php endif; ?>
			<?php if($check_slogan): ?>
				<?php echo get_bloginfo('description'); ?>
			<?php endif; ?>
			<?php if($footer_slogan_bis) { echo "<p>".$footer_slogan_bis."</p>"; }?>
			<?php wp_nav_menu( array( 'theme_location' => 'menu_footer') ); ?>
			Orèli - © <?php echo date("Y"); ?>
	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	jQuery(document).ready(function() {
/* scroll to */
		jQuery('.menu-item a').on('click', function() { // Au clic sur un élément
			var page = jQuery(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			jQuery(".site-header--menu-main").toggleClass('active');
			jQuery('.o_nav-icon').toggleClass('open');
			jQuery('html, body').delay( 400 ).animate( { scrollTop: jQuery(page).offset().top }, speed ); // Go
			return false;
		});

	});
</script>

<!-- <script src="js/main.js"></script> -->
		<script>
		(function() {
			var tiltSettings = [
			{},
			];
			function init() {
				var idx = 0;
				[].slice.call(document.querySelectorAll('span.tilter')).forEach(function(el, pos) { 
					idx = pos%2 === 0 ? idx+1 : idx;
					new TiltFx(el, tiltSettings[idx-1]);
				});
			}
			// Preload all images.
			imagesLoaded(document.querySelector('main'), function() {
				document.body.classList.remove('loading');
				init();
			});
		})();
		</script>

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>
</body>
</html>
