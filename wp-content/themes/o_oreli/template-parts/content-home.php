<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package o_oreli
 */

?>






<section id="apropos" class="slide section section--apropos ghost-wrap" data-section-name="apropos">
  <div class="container-small ghost-wrap-content">
  <h2 class="o_title"><?php echo get_field('a_propos')->post_title; ?></h2>

<div>

<div class="section--apropos__col"> 
<div class="row top">
<div class="col col-50">
  <h5 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Mon parcours</h5>
<p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
  Actuellement en poste<br>à l'agence web de Lyon "Y-Proximité" depuis 3 ans,<br>j'ai une expérience d'intégratrice web de 5 ans<br>dont 2 ans en autoentreprenariat.<br>Issue d'une formation technique et artistique<br>j'ai toujours accordé autant d'importance à l'image qu'à la tecnologie.<br>Mon métier me permet d'allier les deux. </p>

</div>
<div class="col col-50">
<h5 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Mes compétences techniques  </h5>
<div class="competences">
<div class="row top">
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>cms</h3><em>WordPress / prestashop</em>
  </div>
  <div class="col col-50" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>javascript</h3><em>jQuery</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>css</h3><em>CSS3 avec SASS</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>images</h3><em>Photoshop, illustrator</em>
  </div>
  <div class="col col-50" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>moteur de template</h3><em>twig, smarty</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>framework</h3><em>Bootstrap</em>
  </div>
  <div class="col col-50" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>versionning</h3><em>Git (Github)</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>workflow</h3><em>npm / Gulp</em>
  </div>
    <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3><i class="fa fa-file-pdf-o" aria-hidden="true"></i></h3><em><a target="_blank" href="<?php echo get_home_url(); ?>/wp-content/uploads/2017/07/CV2017.pdf">Télécharger mon cv au format pdf</a></em>
  </div>
</div>
</div></div>
</div>
</div>




 <h5 class="next" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
Voir mon portfolio <br> <i class="fa fa-angle-double-down" aria-hidden="true"></i></h5>

</div>
 
  	 <?php // echo get_field('a_propos')->post_content; ?>
  </div>
</section>

<section id="portfolio" class="slide section section--portfolio" data-section-name="portfolio">
  <!-- <h2 class="container o_title">portfolio</h2> -->
  <?php include('__portfolio.php'); ?>

</section>


<section id="contact" class="section section--contact" data-section-name="contact">
<div class="container">
  <h2 class="o_title">contact</h2>
  <p>
  	<?php echo do_shortcode( '[formidable id=3]' );
  	?>
  </p>
  </div>
</section>

