<?php

/**
 * Create a projects content type
 *
 * Extended reading:
 * @link https://codex.wordpress.org/Post_Types
 * @link https://www.smashingmagazine.com/2015/04/extending-wordpress-custom-content-types/
 *
 * Adding icons to the menu:
 * @link https://developer.wordpress.org/resource/dashicons/
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {

    // Prose Custom Type

  $labelsProse = array(
    'name'               => 'Prose',
    'singular_name'      => 'Prose Piece',
    'menu_name'          => 'Prose',
    'name_admin_bar'     => 'Prose Piece',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Prose Piece',
    'new_item'           => 'New Prose Piece',
    'edit_item'          => 'Edit Prose Piece',
    'view_item'          => 'View Prose Piece',
    'all_items'          => 'All Prose',
    'search_items'       => 'Search Prose Prose',
    'parent_item_colon'  => 'Parent Prose Piece',
    'not_found'          => 'No Prose Found',
    'not_found_in_trash' => 'No Prose Found in Trash'
  );

  $argsProse = array(
    'labels'              => $labelsProse,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-media-text',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'prose' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_prose', $argsProse );

  // Poetry Custom Type

  $labelsPoem = array(
    'name'               => 'Poetry',
    'singular_name'      => 'Poem',
    'menu_name'          => 'Poetry',
    'name_admin_bar'     => 'Poem',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Poem',
    'new_item'           => 'New Poem',
    'edit_item'          => 'Edit Poem',
    'view_item'          => 'View Poem',
    'all_items'          => 'All Poetry',
    'search_items'       => 'Search Poetry',
    'parent_item_colon'  => 'Parent Poem',
    'not_found'          => 'No Poetry Found',
    'not_found_in_trash' => 'No Poetry Found in Trash'
  );

  $argsPoem = array(
    'labels'              => $labelsPoem,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-media-text',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'poem' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_poetry', $argsPoem );

  // Drama Custom Type

  $labelsDrama = array(
    'name'               => 'Drama',
    'singular_name'      => 'Drama Piece',
    'menu_name'          => 'Drama',
    'name_admin_bar'     => 'Drama Piece',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Drama Piece',
    'new_item'           => 'New Drama Piece',
    'edit_item'          => 'Edit Drama Piece',
    'view_item'          => 'View Drama Piece',
    'all_items'          => 'All Drama',
    'search_items'       => 'Search Drama',
    'parent_item_colon'  => 'Parent Drama Piece',
    'not_found'          => 'No Drama Found',
    'not_found_in_trash' => 'No Drama Found in Trash'
  );

  $argsDrama = array(
    'labels'              => $labelsDrama,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-media-text',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'drama-piece' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_drama', $argsDrama );

  // Art Custom Type

  $labelsArt = array(
    'name'               => 'Art',
    'singular_name'      => 'Artwork',
    'menu_name'          => 'Art',
    'name_admin_bar'     => 'Artwork',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Artwork',
    'new_item'           => 'New Artwork',
    'edit_item'          => 'Edit Artwork',
    'view_item'          => 'View Artwork',
    'all_items'          => 'All Art',
    'search_items'       => 'Search Art',
    'parent_item_colon'  => 'Parent Artwork',
    'not_found'          => 'No Art Found',
    'not_found_in_trash' => 'No Art Found in Trash'
  );

  $argsArt = array(
    'labels'              => $labelsArt,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-format-image',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'artwork' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_artwork', $argsArt );
}

// Let's give our custom post type some category and tag like functionality
add_action( 'init', 'create_taxonomies' );
function create_taxonomies() {

  // Add a taxonomy like categories
  $labels = array(
    'name'              => 'Types',
    'singular_name'     => 'Type',
    'search_items'      => 'Search Types',
    'all_items'         => 'All Types',
    'parent_item'       => 'Parent Type',
    'parent_item_colon' => 'Parent Type:',
    'edit_item'         => 'Edit Type',
    'update_item'       => 'Update Type',
    'add_new_item'      => 'Add New Type',
    'new_item_name'     => 'New Type Name',
    'menu_name'         => 'Types',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'type' ),
  );

  register_taxonomy('fourohfive_project_type',array('fourohfive_project'),$args);

  // Add a taxonomy like tags
  $labels = array(
    'name'                       => 'Attributes',
    'singular_name'              => 'Attribute',
    'search_items'               => 'Attributes',
    'popular_items'              => 'Popular Attributes',
    'all_items'                  => 'All Attributes',
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit Attribute',
    'update_item'                => 'Update Attribute',
    'add_new_item'               => 'Add New Attribute',
    'new_item_name'              => 'New Attribute Name',
    'separate_items_with_commas' => 'Separate Attributes with commas',
    'add_or_remove_items'        => 'Add or remove Attributes',
    'choose_from_most_used'      => 'Choose from most used Attributes',
    'not_found'                  => 'No Attributes found',
    'menu_name'                  => 'Attributes',
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'attribute' ),
  );

  register_taxonomy('fourohfive_project_attribute','fourohfive_project',$args);
}
