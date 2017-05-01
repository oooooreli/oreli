<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package o_oreli
 */

?>



<section class="section section--apropos">

<div class="container">
	

  <h2 class="o_title"><?php echo get_field('a_propos')->post_title; ?>
  </h2>
  <div class="container-small">
  	 <?php echo get_field('a_propos')->post_content; ?>
  </div>
 
</div>
</section>

<section class="section section--portfolio">
  <!-- <h2 class="container o_title">portfolio</h2> -->
  <?php include('__portfolio.php'); ?>
</section>

<section class="section section--cv">
  <h2 class="o_title">cv</h2>
</section>

<section class="section section--contact">
  <h2 class="o_title">contact</h2>
</section>
