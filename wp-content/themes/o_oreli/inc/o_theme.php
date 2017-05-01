<?php




/*  thumbnail
–––––––––––––––––––––––––––––––––––––––––––––––––– */
add_image_size( 'alaune', 1680, 408, array( 'center', 'center' ) ); // Hard crop left top
add_image_size( 'portfolio', 845, 490, array( 'center', 'center' ) ); // Hard crop left top





function bg_si_la_home() {
  if (is_page_template( 'tpl-home.php' )) {
    if ( has_post_thumbnail() ) {
      $home_avantages_bg = get_field('home-avantages-bg');
      echo 'style="background-image: url('.get_the_post_thumbnail_url().');"';
    }
  }
}








/*  APPELS CPT
–––––––––––––––––––––––––––––––––––––––––––––––––– */
function boucle_cpt_nosmenus($type, $howmuch, $category, $before="", $after="") {
  $i = 1;
  $loop = new WP_Query(
    array(
      'post_type' => $type
      ,'posts_per_page' => $howmuch
      ,'nos-menus' => $category
      ) );
//   $count = $loop->post_count;
// $count = count(get_posts());
// echo  $count;
  while ( $loop->have_posts() ) {
    $loop->the_post();
        $datavar = "cptui".$i++; //echo $i++; ?>
        <?php echo $before; ?>

<!-- Debut menu -->
<div class="menu-aclic <?php echo $datavar; ?>">
  <div class="menu-aclic-left">
    <h5 class="menu-aclic-title"><?php  the_title(); ?></h5>
    <div class="menu-aclic-text"><?php the_excerpt(); ?></div>
    <p class="btn action menu-aclic-link"><?php echo _e( 'Discover this formula', 'y_dds' );?></p>
  </div>
  <div class="menu-aclic-right menu-aclic-img" style="background-image:url('<?php the_post_thumbnail_url( 'large');?>')"></div>
</div>
<div class="menu-aclic-affiche"><?php the_content(); ?></div>
<!-- fin menu -->

        <?php echo $after; ?>
      <?php };
      wp_reset_postdata();
    }








function boucle_cpt($type, $howmuch, $before="", $after="") {
  $i = 1;
  $loop = new WP_Query( array( 'post_type' => $type, 'posts_per_page' => $howmuch ) );
  while ( $loop->have_posts() ) {
    $loop->the_post();
        $datavar = "cptui".$i++; //echo $i++;

        echo $before;
        echo "<div class=".$datavar.">";
        the_title();
        the_content();
        echo "</div>";
        echo $after;
      };
      wp_reset_postdata();
    }


function boucle_cpt_img($type, $howmuch, $classslidlider, $category, $before="", $after="") { ?>
  <?php
      $i = 1;
      $loop = new WP_Query( array(
        'post_type' => $type
        ,'posts_per_page' => $howmuch
        ,'nos-chambres' => $category
        ) );
      echo "<div  dir='rtl' class='sliderhotel ".$classslidlider."'>"; ?>

      <ul>
      <?php while ( $loop->have_posts() ) {
        $loop->the_post();
        $datavar = "cptui".$i++; //echo $i++;
        echo $before;
        echo '<li class='.$datavar.' style="background-image:url(\'';
        $url = get_the_post_thumbnail_url( null, "minislide" );
        if ( $url ) {
          echo esc_url( $url );
        }
        echo '\');">';
        echo the_title( '<h5 class="room-title">', '</h5>');
        echo'</li>';
        echo $after;
      }; ?>

    </ul>
    </div>
     <?php wp_reset_postdata();?>
   <?php }









    function one_cpt_by_slug($type, $slug, $before="", $after=""){
    /*  $queryvar = "query$i";
        $$queryvar
     */
        $loop = new WP_Query( array( 'post_type' => $type, 'pagename' => $slug ) );
        while ( $loop->have_posts() ) {
          $loop->the_post();
          echo $before;
          the_title();
          the_content();
          echo $after;
        };
        wp_reset_postdata();
      }


function test($id) { ?>



<?php }



/*  Ajouter WysiWyg une description de TAXO
–––––––––––––––––––––––––––––––––––––––––––––––––– */

add_action("nos-chambres_edit_form_fields", 'add_form_fields_example', 10, 2);

function add_form_fields_example($term, $taxonomy){
  ?>
  <tr valign="top">
    <th scope="row">Description</th>
    <td>
      <?php wp_editor(html_entity_decode($term->description), 'description', array('media_buttons' => false)); ?>
      <script>
        jQuery(window).ready(function(){
          jQuery('label[for=description]').parent().parent().remove();
        });
      </script>
    </td>
  </tr>
  <?php
}

/* AFFICHAGE */

/* Display sid  */
function display_sid_interne() {
  echo "<div class='sid'>";

  get_sidebar();
  echo"</div>";
}




/*  Ajouter colonne miniature
–––––––––––––––––––––––––––––––––––––––––––––––––– */
// Création des colonnnes personnalisées
function wpc_colonne($columns) {
 return array_merge( $columns,
 array('thumb' => __('Miniature')) );
}
add_filter('manage_posts_columns' , 'wpc_colonne');

// Affichage des données

add_action('manage_notre_agence_posts_custom_column', 'data_colonne');
add_action('manage_posts_custom_column', 'data_colonne');
function data_colonne($name) {
 global $post;
 switch ($name) {
case 'thumb':
 if(has_post_thumbnail($post->ID))
 {
 ?>
 <a href="<?php the_permalink(); ?>" target="_blank">
 <?php the_post_thumbnail(array(70,70));?>
 </a>
 <?php
 }
 else
 {
 _e('No Thumbnail','o_oreli');
 }
 break;
 }
 }


/*  Store locator
–––––––––––––––––––––––––––––––––––––––––––––––––– */
add_filter( 'wpsl_info_window_template', 'custom_info_window_template' );
function custom_info_window_template() {

    $info_window_template = '<div data-store-id="<%= id %>" class="wpsl-info-window">' . "\r\n";
    $info_window_template .= "\t\t" . '<p>' . "\r\n";
    $info_window_template .= "\t\t\t" .  wpsl_store_header_template() . "\r\n";

    $info_window_template .= "\t\t" . '</p>' . "\r\n";
    $info_window_template .= "\t" . '</div>' . "\r\n";
    return $info_window_template;
}
/*
 *
 */
add_filter( 'wpsl_store_header_template', 'custom_store_header_template' );
function custom_store_header_template() {
$urlcurrent=site_url();
$urlderecup = '<%= url.substr(1) %>';
  if (isset($_GET['p3id']) || isset($_GET['p3hash']) || isset($_GET['email']) & isset($_GET['installateurName']))
  {
  $urlcurrentComplete = $urlcurrent.'/?p3id='.$_GET['p3id'].'&p3hash='.$_GET['p3hash'].'&email='.$_GET['email'];
  $prefixe = '&';
  }
  elseif (!isset($_GET['p3id']) || !isset($_GET['p3hash']) || !isset($_GET['email']) & isset($_GET['installateurName']))
  {
  $urlcurrentComplete = $urlcurrent;
  $prefixe = '?';
  }
  else
  {
  $urlcurrentComplete = $urlcurrent;
  $prefixe = '?';
  }
      $header_template = '<% if ( wpslSettings.storeUrl == 1 && url ) { %>' . "\r\n";
      $header_template .= '<h3 class="storetitre"><a href="';
      $header_template .= $urlcurrentComplete.''.$prefixe.''.$urlderecup;
      $header_template .= '"><%= store %></a></h3>' . "\r\n";
      $header_template .= '<% } else { %>' . "\r\n";
      $header_template .= '<h3><%= store %></h3>' . "\r\n";
      $header_template .= '<% } %>';
      return $header_template;
  }
