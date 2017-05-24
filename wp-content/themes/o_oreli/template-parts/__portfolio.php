<!-- <div class="container">
<h2 class="o_title">Portfolio</h2>
</div> -->
	<div  id="portfolio-full">


<!-- <div class="work--item">
        <a href="#" class="tilter tilter--1">
          <figure class="tilter__figure">
            <img class="tilter__image" src="http://127.0.0.1/oreli/wp-content/uploads/2017/05/psb-845x490.jpg" alt="img01" />
            <div class="tilter__deco tilter__deco--shine"><div></div></div>
            <figcaption class="tilter__caption">
              <h3 class="tilter__title">ggTanya Bondesta</h3>
              <p class="tilter__description">Toronto</p>
            </figcaption>

            </svg>
          </figure>
        </a>

        </div> -->

<!--

<figure class="projet effect-apollo">
            <img src="http://epicadesign.fr/demos/HoverEffectImg/img/18.jpg" alt="img18">
            <figcaption>
              <h2>Strong <span>Apollo</span></h2>
              <p>Apollo's last game of pool was so strange.</p>
              <a href="#">View more</a>
            </figcaption>     
          </figure>

-->

  
<?php 
$posts = get_field('home_list-projets');
if( $posts ): ?>
  <!--   <ul> -->
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>





<div class="projet __projet--waiting __smooth" >
<a href="#" class="tilter tilter--2">
  <figure class="tilter__figure" >
    <div class="tilter__deco tilter__deco--shine"><div></div></div>
    <img class="tilter__image" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('portfolio');}?>" alt="img03" />
    <div class="tilter__deco tilter__deco--overlay"></div>
    <figcaption class="tilter__caption">
     <?php the_title( '<h6 class="projet--infos-titre anime">', '</h6>', true ); ?>
       <!-- <h6 class="tilter__title projet--infos-titre anime">Helen Portland</h6> -->
        <span class="projet--infos-dom"><?php the_field('projet_dom'); ?></span>
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
    </figcaption>

  </figure>
</a>
</div>


    <?php endforeach; ?>
   <!--  </ul> -->
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>