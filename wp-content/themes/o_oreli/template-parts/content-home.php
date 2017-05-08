<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package o_oreli
 */

?>



<section id="apropos" class="section section--apropos">

<div class="container">
	

  <h2 class="o_title"><?php echo get_field('a_propos')->post_title; ?>
  </h2>
  <div class="container-small">
  	 <?php echo get_field('a_propos')->post_content; ?>
  </div>
 
</div>
</section>

<section id="portfolio" class="section section--portfolio">
  <!-- <h2 class="container o_title">portfolio</h2> -->
  <?php include('__portfolio.php'); ?>
</section>

<section id="cv" class="section section--cv">
  <h2 class="o_title">cv</h2>
</section>

<section id="contact" class="section section--contact">
<div class="container">
  <h2 class="o_title">contact</h2>
  <p>
  	<?php echo do_shortcode( '[formidable id=3]' );
  	?>
  </p>
  </div>
</section>
