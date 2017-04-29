<?php

/*
/*
/*
/*
/*  LES GLOBALES
––––––––––––––––––––––––––––––––––––––––––––––––––
–––––––––––––––––––––––––––––––––––––––––––––––––– */



/*  SUCURITE
–––––––––––––––––––––––––––––––––––––––––––––––––– */
// add_action( 'wp_enqueue_scripts', 'y_dds_scripts_add' );
add_filter('login_errors',create_function('$a', "return null;"));



/*  BUUFER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
function app_output_buffer() {
  ob_start();
} // soi_output_buffer
add_action('init', 'app_output_buffer');

function app_destroy_person( $person_id ) {

    // Include the necessary library to delete a person
  include_once( 'wp-admin/includes/user.php' );
  wp_delete_user( $person_id );

    // Redirect back to the Person listing
  wp_redirect( app_get_permalink_by_slug( 'all', 'person' ) );
  exit;

} // end app_destroy_person



/*  PAGINATION
–––––––––––––––––––––––––––––––––––––––––––––––––– */
function kriesi_pagination($pages = '', $range = 2)
{
 $showitems = ($range * 2)+1;

 global $paged;
 if(empty($paged)) $paged = 1;

 if($pages == '')
 {
   global $wp_query;
   $pages = $wp_query->max_num_pages;
   if(!$pages)
   {
     $pages = 1;
   }
 }

 if(1 != $pages)
 {
   echo "<div class='pagination'>";
   if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
   if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

   for ($i=1; $i <= $pages; $i++)
   {
     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
     {
       echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
     }
   }

   if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
   if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
   echo "</div>\n";
 }
}






/*  Sticky Custom Post Types
–––––––––––––––––––––––––––––––––––––––––––––––––– */
add_action( 'admin_footer-post.php', 'gkp_add_sticky_post_support' );
add_action( 'admin_footer-post-new.php', 'gkp_add_sticky_post_support' );
function gkp_add_sticky_post_support()
{ global $post, $typenow; ?>

  <?php if ( $typenow == 'noschambres' && current_user_can( 'edit_others_posts' ) ) : ?>
  <script>
  jQuery(function($) {
    var sticky = "<br/><span id='sticky-span'><input id='sticky' name='sticky' type='checkbox' value='sticky' <?php checked( is_sticky( $post->ID ) ); ?> /> <label for='sticky' class='selectit'><?php _e( "Stick this post to the front page" ); ?></label><br /></span>";
    $('[for=visibility-radio-public]').append(sticky);
  });
  </script>
  <?php endif; ?>

<?php
}





/*  DESACTIVER TOUS LES COMMENTAIRES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
add_filter('comments_open', 'wpc_comments_closed', 10, 2);

function wpc_comments_closed( $open, $post_id ) {
  $post = get_post( $post_id );

  $open = false;
  return $open;
}


/*  supprimer le mot archive
–––––––––––––––––––––––––––––––––––––––––––––––––– */
add_filter( 'get_the_archive_title', function ( $title ) {
    // if( is_category() ) {
  $title = single_cat_title( '', false );
    // }
  return $title;
});



/*  Ajouter WysiWyg à la description de cat.
–––––––––––––––––––––––––––––––––––––––––––––––––– */
/*

    Copyright (C) Year  Author  Email

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// remove the html filtering
    remove_filter( 'pre_term_description', 'wp_filter_kses' );
    remove_filter( 'term_description', 'wp_kses_data' );

    /* ====  Add TinyMce Description Box */
    add_filter('edit_category_form_fields', 'cat_description');
    function cat_description($tag)
    {
      ?>
      <table class="form-table">
        <tr class="form-field">
          <th scope="row" valign="top"><label for="description"><?php _ex('Description', 'Taxonomy Description'); ?></label></th>
          <td>
            <?php
            $settings = array('wpautop' => true, 'media_buttons' => true, 'quicktags' => true, 'textarea_rows' => '15', 'textarea_name' => 'description' );
            wp_editor(wp_kses_post($tag->description , ENT_QUOTES, 'UTF-8'), 'cat_description', $settings);
            ?>
            <br />
            <span class="description"><?php _e('The description is not prominent by default; however, some themes may show it.'); ?></span>
          </td>
        </tr>
      </table>
      <?php
    }
    /* ==== Remove Default Description Box */
    add_action('admin_head', 'remove_default_category_description');
    function remove_default_category_description()
    {
      global $current_screen;
      if ( $current_screen->id == 'edit-category' )
      {
        ?>
        <script type="text/javascript">
          jQuery(function($) {
            $('textarea#description').closest('tr.form-field').remove();
          });
        </script>
        <?php
      }
    }



/*  Remove WordPress Admin Bar CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– */



function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );



/*  Ajouter extrait aux page
–––––––––––––––––––––––––––––––––––––––––––––––––– */
add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
