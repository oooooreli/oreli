<div class="container">
<h2 class="o_title">Portfolio</h2>
</div>
	
<?php 
$posts = get_field('home_list-projets');
if( $posts ): ?>
  <!--   <ul> -->
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <div class="projet">
        	<div class="alaune" style="background-image:url('<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('portfolio');}?>')"></div>
        </div>
    <?php endforeach; ?>
   <!--  </ul> -->
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
