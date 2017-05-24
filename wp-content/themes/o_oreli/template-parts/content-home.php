<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package o_oreli
 */

?>





<section id="apropos" class="section section--apropos ghost-wrap">
  <div class="container-small ghost-wrap-content">
  <h2 class="o_title"><?php echo get_field('a_propos')->post_title; ?></h2>

<div>
<p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
  Actuellement en poste à l'agence de Lyon Y-Proximité (depuis 3 ans), je vous présente mon activité récente d'intégratrice web.</p>

  <h5 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Mes compétences techniques  </h5>


<div class="competences">
<div class="row top">
  <div class="col col-25" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>cms</h3><em>WordPress / prestashop</em>
  </div>
  <div class="col col-25" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>html</h3><em>twig, smarty</em>
  </div>
  <div class="col col-25" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>préprocesseurs</h3><em>Sass</em>
  </div>
  <div class="col col-25" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>Javascript</h3><em>jQuery</em>
  </div>
<!--   <div class="col col-25" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>CSS</h3><em>Bootstrap, KNACSS</em>
  </div> -->
  <div class="col col-25" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>image</h3><em>Photoshop, illustrator</em>
  </div>
  <div class="col col-25" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>versionning</h3><em>Git (Github)</em>
  </div>
  <div class="col col-25" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>workflow</h3><em>npm / Gulp</em>
  </div>  
</div>
</div>

 <h5 class="next" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
Voir mon portfolio <br> <i class="fa fa-angle-double-down" aria-hidden="true"></i></h5>

</div>
 
  	 <?php // echo get_field('a_propos')->post_content; ?>
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
