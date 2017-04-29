<?php

/*  Personalisation BO
––––––––––––––––––––––––––––––––––––––––––––––––––
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/*
 * Déclaration de variable
 */

// rs
  $facebook = get_theme_mod( 'facebook' );
  $pinterest = get_theme_mod( 'pinterest' );
  $instagram = get_theme_mod( 'instagram' );
  $linkedin = get_theme_mod( 'linkedin' );
  $viadeo = get_theme_mod( 'viadeo' );
  $googleplus = get_theme_mod( 'google-plus' );
  $twitter = get_theme_mod( 'twitter' );
  $tripadvisor = get_theme_mod( 'tripadvisor' );
  $youtube = get_theme_mod( 'youtube' );
// identité du site
  $logo_blanc = get_theme_mod( 'logo_blanc' );
  $logo_couleur = get_theme_mod( 'logo_couleur' );
// pied de page
  $check_logo = get_theme_mod( 'check_logo' );
  $check_slogan = get_theme_mod( 'check_slogan' );
  $footer_slogan_bis = get_theme_mod( 'footer_slogan_bis' );
// menus
  /* empty */
// widgets
  /* empty */
// css add
  /* empty */





/*
 * Sections
 */

function y_ceren_customize_register_add( $wp_customize ) {

//****** sections desactivées ******//
  $wp_customize->remove_section( 'colors' );
  $wp_customize->remove_section( 'static_front_page' );
  $wp_customize->remove_section( 'background_image' );
  $wp_customize->remove_section( 'header_image' );
  $wp_customize->remove_section( 'themes' );

//****** sections initiales ******//
  $wp_customize->add_setting( 'logo_blanc' , array( 'default' & '' ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_blanc', array(
                 'label'      => __( 'Logo BLANC', 'o_oreli' ),
                 'section'    => 'title_tagline',
                 'settings'   => 'logo_blanc',
                 'context'    => 'your_setting_context'
             )
         )
     );
     $wp_customize->add_setting( 'logo_couleur' , array( 'default' & '' ));
     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_couleur', array(
                    'label'      => __( 'Logo couleur', 'o_oreli' ),
                    'section'    => 'title_tagline',
                    'settings'   => 'logo_couleur',
                    'context'    => 'your_setting_context'
                )
            )
        );

//****** Sections ajoutés ******//

  // Add Section footer
  $wp_customize->add_section( 'footer' , array(
      'title' => __( 'Pied de page', 'o_oreli' ),
      'priority' => 30,
      'description' => __( "
      <p>Le pied de page est commun à toutes les pages.</p>
      - Les liens réseaux sociaux sont gérés dans le menu précédent <strong><i>Réseaux sociaux</i></strong>.<br>
      - Le menu est à definir dans le menu précédent <strong><i>Menu > Emplacement</i></strong>
      ", 'o_oreli' )
  ) );
  $wp_customize->add_setting( 'footer_slogan_bis' , array( 'default' & '' ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_slogan_bis', array(
            'label' => __( 'Slogan personalisé', 'o_oreli' ),
            'description' => __( "Supporte les balises html", 'o_oreli' ),
            'section' => 'footer',
            'type'           => 'textarea',
            'settings' => 'footer_slogan_bis',
  ) ) );
    // coche
    $wp_customize->add_setting( 'check_logo' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'check_logo', array(
        'label' => __( 'Afficher le logo', 'o_oreli' ),
        'section' => 'footer',
        'settings' => 'check_logo',
        'type'       => 'checkbox',
    ) ) );
    // coche
    $wp_customize->add_setting( 'check_slogan' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'check_slogan', array(
        'label' => __( 'Afficher le slogan', 'o_oreli' ),
        'section' => 'footer',
        'settings' => 'check_slogan',
        'type'       => 'checkbox',
    ) ) );

// Add Section Social Media
$wp_customize->add_section( 'social-media' , array(
    'title' => __( 'Réseaux sociaux', 'o_oreli' ),
    'priority' => 30,
    'description' => __( "Renseignez l'url des réseaux sociaux que vous souhaitez voir apparaitre.", 'o_oreli' )
) );
    // Add Facebook Setting
    $wp_customize->add_setting( 'facebook' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
        'label' => __( 'Facebook', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'facebook',
        'type' => 'url',
    ) ) );
    // Add youtube Setting
    $wp_customize->add_setting( 'youtube' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
        'label' => __( 'youtube', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'youtube',
        'type' => 'url',
    ) ) );
    // Add tripadvisor Setting
    $wp_customize->add_setting( 'tripadvisor' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tripadvisor', array(
        'label' => __( 'tripadvisor', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'tripadvisor',
        'type' => 'url',
    ) ) );
    // Add Pinterest Setting
    $wp_customize->add_setting( 'pinterest' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
        'label' => __( 'Pinterest', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'pinterest',
        'type' => 'url',
    ) ) );
    // Add Instagram Setting
    $wp_customize->add_setting( 'instagram' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
        'label' => __( 'Instagram', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'instagram',
        'type' => 'url',
    ) ) );
    // Add linkedin Setting
    $wp_customize->add_setting( 'linkedin' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
        'label' => __( 'linkedin', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'linkedin',
        'type' => 'url',
    ) ) );
    // Add viadeo Setting
    $wp_customize->add_setting( 'viadeo' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'viadeo', array(
        'label' => __( 'viadeo', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'viadeo',
        'type' => 'url',
    ) ) );
    // Add google+ Setting
    $wp_customize->add_setting( 'google-plus' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google-plus', array(
        'label' => __( 'google-plus', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'google-plus',
        'type' => 'url',
    ) ) );
    // Add Twitter Setting
    $wp_customize->add_setting( 'twitter' , array( 'default' & '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
        'label' => __( 'twitter', 'o_oreli' ),
        'section' => 'social-media',
        'settings' => 'twitter',
        'type' => 'url',
    ) ) );

}
add_action( 'customize_register', 'y_ceren_customize_register_add' );





/*
 * Emplacement MENU
 */
register_nav_menus( array(
        'menu_footer' => 'menu de pied de page',
    ) );




/*
 * Register sidebar
 */
function custom_sidebars_o_oreli() {

    $args = array(
        'id'            => 'sidhome',
        'class'         => 'sid-home',
        'name'          => __( '-- Accueil', 'o_oreli' ),
        'description'   => __( 'Ajouter un widget', 'o_oreli' ),
        'before_widget' => '<section id="%1$s" class="widget widget--horizontal %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    register_sidebar( $args );

    // $args = array(
    //     'id'            => 'sidchambre',
    //     'class'         => 'sid-chambre',
    //     'name'          => __( '-- Chambre', 'o_oreli' ),
    //     'description'   => __( 'Ajouter un widget', 'o_oreli' ),
    //     'before_widget' => '<section id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</section>',
    //     'before_title'  => '<h2 class="widget-title">',
    //     'after_title'   => '</h2>',
    // );
    // register_sidebar( $args );

    // $args = array(
    //     'id'            => 'squaresimple',
    //     'class'         => 'sid-squaresimple',
    //     'name'          => __( '-- Modèle de page "simple"', 'o_oreli' ),
    //     'description'   => __( 'Ajouter un widget', 'o_oreli' ),
    //     'before_widget' => '<section id="%1$s" class="widget widget--horizontal %2$s">',
    //     'after_widget'  => '</section>',
    //     'before_title'  => '<h2 class="widget-title">',
    //     'after_title'   => '</h2>',
    // );
    // register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars_o_oreli' );
