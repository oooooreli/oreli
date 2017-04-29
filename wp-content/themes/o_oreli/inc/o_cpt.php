<?php

/*
/*
/*
/*
/*  LES CPT
––––––––––––––––––––––––––––––––––––––––––––––––––
–––––––––––––––––––––––––––––––––––––––––––––––––– */


// Register Custom Post Type ACCUEIL
function y_cptui_accueil() {

    $labels = array(
        'name'                  => _x( 'Accueil', 'Post Type General Name', 'o_oreli' ),
        'singular_name'         => _x( 'type home', 'Post Type Singular Name', 'o_oreli' ),
        'menu_name'             => __( 'Accueil', 'o_oreli' ),
        'name_admin_bar'        => __( 'Unit Home', 'o_oreli' ),
        'archives'              => __( 'Unit Home Archives', 'o_oreli' ),
        'parent_item_colon'     => __( 'Parent Unit Home:', 'o_oreli' ),
        'all_items'             => __( 'Sections accueil', 'o_oreli' ),
        'add_new_item'          => __( 'Ajouter une section', 'o_oreli' ),
        'add_new'               => __( 'Ajouter', 'o_oreli' ),
        'new_item'              => __( 'Nouveau Unit Home', 'o_oreli' ),
        'edit_item'             => __( 'Editer Unit Home', 'o_oreli' ),
        'update_item'           => __( 'Update Unit Home', 'o_oreli' ),
        'view_item'             => __( 'View Unit Home', 'o_oreli' ),
        'search_items'          => __( 'Search Unit Home', 'o_oreli' ),
        'not_found'             => __( 'Not found', 'o_oreli' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'o_oreli' ),
        'featured_image'        => __( 'Featured Image', 'o_oreli' ),
        'set_featured_image'    => __( 'Set featured image', 'o_oreli' ),
        'remove_featured_image' => __( 'Remove featured image', 'o_oreli' ),
        'use_featured_image'    => __( 'Use as featured image', 'o_oreli' ),
        'insert_into_item'      => __( 'Insert into item', 'o_oreli' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'o_oreli' ),
        'items_list'            => __( 'Items list', 'o_oreli' ),
        'items_list_navigation' => __( 'Items list navigation', 'o_oreli' ),
        'filter_items_list'     => __( 'Filter items list', 'o_oreli' ),
    );
    $args = array(
        'label'                 => __( 'type home', 'o_oreli' ),
        'description'           => __( 'Tous les elements de la page d\'accueil', 'o_oreli' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor','thumbnail' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-admin-home',
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'unithomepage', $args );
}
add_action( 'init', 'y_cptui_accueil', 0 );



/**/
// Register Custom Post Type y_taxo_nosmenus
function y_cptui_nosmenus() {

    $labels = array(
        'name'                  => _x( 'Menu', 'Post Type General Name', 'o_oreli' ),
        'singular_name'         => _x( 'Menu ', 'Post Type Singular Name', 'o_oreli' ),
        'menu_name'             => __( 'Nos menus', 'o_oreli' ),
        'name_admin_bar'        => __( 'Nos menus', 'o_oreli' ),
        'archives'              => __( 'Nos menus Archives', 'o_oreli' ),
        'parent_item_colon'     => __( 'Nos menus', 'o_oreli' ),
        'all_items'             => __( 'Tous les menus', 'o_oreli' ),
        'add_new_item'          => __( 'Ajouter une menus', 'o_oreli' ),
        'add_new'               => __( 'Ajouter', 'o_oreli' ),
        'new_item'              => __( 'Nouvelle chambre', 'o_oreli' ),
        'edit_item'             => __( 'Editer chambre', 'o_oreli' ),
        'update_item'           => __( 'Update chambre', 'o_oreli' ),
        'view_item'             => __( 'View chambre', 'o_oreli' ),
        'search_items'          => __( 'Search chambre', 'o_oreli' ),
        'not_found'             => __( 'Not found', 'o_oreli' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'o_oreli' ),
        'featured_image'        => __( 'Featured Image', 'o_oreli' ),
        'set_featured_image'    => __( 'Set featured image', 'o_oreli' ),
        'remove_featured_image' => __( 'Remove featured image', 'o_oreli' ),
        'use_featured_image'    => __( 'Use as featured image', 'o_oreli' ),
        'insert_into_item'      => __( 'Insert into item', 'o_oreli' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'o_oreli' ),
        'items_list'            => __( 'Items list', 'o_oreli' ),
        'items_list_navigation' => __( 'Items list navigation', 'o_oreli' ),
        'filter_items_list'     => __( 'Filter items list', 'o_oreli' ),
    );
    $args = array(
        'label'                 => __( 'label menu', 'o_oreli' ),
        'description'           => __( '', 'o_oreli' ),
        'labels'                => $labels,
        'supports'              => array('title','thumbnail','editor','custom-fields','excerpt'),
        'taxonomies'            => array( 'categorie' ),
        // 'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        // 'rewrite'               => $rewrite,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-image-filter',

    );
    register_post_type( 'nosmenus', $args );
}
add_action( 'init', 'y_cptui_nosmenus', 0 );


// Register Custom Taxonomy
function y_taxo_nosmenus() {

    $labels = array(
        'name'                       => _x( 'Catégorie de menus', 'Taxonomy General Name', 'o_oreli' ),
        'singular_name'              => _x( 'Catégorie', 'Taxonomy Singular Name', 'o_oreli' ),
        'menu_name'                  => __( 'Catégorie', 'o_oreli' ),
        'all_items'                  => __( 'All Catégorie de menus', 'o_oreli' ),
        'parent_item'                => __( 'Parent Catégorie de menus', 'o_oreli' ),
        'parent_item_colon'          => __( 'Parent Catégorie de menus:', 'o_oreli' ),
        'new_item_name'              => __( 'New Item Name', 'o_oreli' ),
        'add_new_item'               => __( 'Ajouter un nouveau type de menus', 'o_oreli' ),
        'edit_item'                  => __( 'Edit Catégorie de menus', 'o_oreli' ),
        'update_item'                => __( 'Update Catégorie de menus', 'o_oreli' ),
        'view_item'                  => __( 'View Catégorie de menus', 'o_oreli' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'o_oreli' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'o_oreli' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'o_oreli' ),
        'popular_items'              => __( 'Popular Items', 'o_oreli' ),
        'search_items'               => __( 'Search Items', 'o_oreli' ),
        'not_found'                  => __( 'Not Found', 'o_oreli' ),
        'no_terms'                   => __( 'No items', 'o_oreli' ),
        'items_list'                 => __( 'Items list', 'o_oreli' ),
        'items_list_navigation'      => __( 'Items list navigation', 'o_oreli' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'nos-menus', array( 'nosmenus' ), $args );

}
 add_action( 'init', 'y_taxo_nosmenus', 0 );
