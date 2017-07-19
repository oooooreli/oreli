<div class="container">
  <h2 class="o_title">portfolio</h2>
</div>
<div  id="portfolio-full" style="position:relative;">
  <!-- __projet--waiting __smooth -->
  <?php 
  $posts = get_field('home_list-projets');
  if( $posts ): ?>
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT)  ?>
          <?php setup_postdata($post); ?>
    <div class="projet card" >
      <span class="tilter tilter--2">
        <figure class="card__container card__container--closed tilter__figure" ><i class="card__btn-close fa fa-times"></i>
        <div class="tilter__deco tilter__deco--shine"><div></div></div>
        <svg class="card__image tilter__image " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
          <defs>
          <clipPath id="clipPath<?php  echo $post->ID;  ?>">
          <circle class="clip" cx="960" cy="250" r="992"></circle>
          </clipPath>
          </defs>
          <image clip-path="url(#clipPath<?php  echo $post->ID;  ?>)" width="1920" height="500" xlink:href="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('portfolio');}?>"></image>
        </svg>
        <div class="tilter__deco tilter__deco--overlay"></div>
        <figcaption class="card__content tilter__caption">
          <div class="bandeau">
          <?php the_title( '<h6 class="projet--infos-titre anime">', '</h6>', true ); ?>
            <ul class="projet--infos-techno">
            <?php $projet_types = get_field('projet_type');
            if( $projet_types ): ?>
            <?php foreach( $projet_types as $projet_type ): ?>
            <li><?php echo $projet_type; ?></li>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php $projet_cmss = get_field('projet_cms');
            if( $projet_cmss ): ?>
            <?php foreach( $projet_cmss as $projet_cms ): ?>
            <li><?php echo $projet_cms; ?></li>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php $projet_technos = get_field('projet_techno');
            if( $projet_technos ): ?>
            <?php foreach( $projet_technos as $projet_techno ): ?>
            <li><?php echo $projet_techno; ?></li>
            <?php endforeach; ?>
            <?php endif; ?>
            </ul>
          </div>
        </figcaption>
        </figure>
      </span>
    <div class="projet__complete">  
      <img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('portfolio');}?>">
      <i class="closet card__btn-close fa fa-times"></i>
      <div class="projet--infos-complete">
        <div  style="background-color: #e5e5e5;">
          <div class="titre container ib ib-1 ib-ph-40">
            <div>Site réalisé avec l'agence y-proximité pour :
              <?php the_title( '<h6 class="projet--infos-titre anime">', '</h6>', true ); ?>
              <span class="projet--infos-dom"><?php the_field('projet_dom'); ?></span>
            </div>
          </div>
          <div class="text container ib ib-2 ib-ph-40 ib-middle">
            <div>
            <h5>Objectif</h5>
            <?php the_field('projet_objectif'); ?>
            <div class="highlight">
            <h5>Résultat</h5>
            <?php the_field('projet_resultat'); ?>
            </div>
              <?php //the_content(); ?>
              <p><a class="btn" target="_blank" href="http://<?php the_field('projet_url')?>">voir le site</a></p>
            </div>
            <div class="m-t-30"><img class="projet--infos-complete__mockup" src="<?php echo get_field('projet_mockup')['url']; ?>" />
            </div>
          </div>
        </div>
        <div class="screen container-most"><img class="projet--infos-complete__screen" src="<?php echo get_field('projet_screenshot')['url']; ?>" /></div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
</div>