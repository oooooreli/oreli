<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package o_oreli
 */

?>






<section id="apropos" class="slide section section--apropos ghost-wrap">
  <div class="container-small ghost-wrap-content">
  <h2 class="o_title"><?php echo get_field('a_propos')->post_title; ?></h2>

<div>

<div class="section--apropos__col"> 
<div class="row top">
<div class="col col-50">
  <h5 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Mon parcours</h5>
<p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
  Actuellement en poste à l'agence de Lyon Y-Proximité (depuis 3 ans).et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.</p>

</div>
<div class="col col-50">
<h5 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Mes compétences techniques  </h5>
<div class="competences">
<div class="row top">
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>cms</h3><em>WordPress / prestashop</em>
  </div>
  <div class="col col-50" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>Javascript</h3><em>jQuery</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>css</h3><em>CSS3 avec SASS</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>image</h3><em>Photoshop, illustrator</em>
  </div>
  <div class="col col-50" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>moteur de template</h3><em>twig, smarty</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>framework</h3><em>Bootstrap, KNACSS</em>
  </div>
  <div class="col col-50" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h3>versionning</h3><em>Git (Github)</em>
  </div>
  <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3>workflow</h3><em>npm / Gulp</em>
  </div>
    <div class="col col-50" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
  <h3><i class="fa fa-file-pdf-o" aria-hidden="true"></i></h3><em>Télécharger mon cv au format pdf</em>
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

<section id="portfolio" class="slide section section--portfolio">
  <!-- <h2 class="container o_title">portfolio</h2> -->
  <?php include('__portfolio.php'); ?>

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

