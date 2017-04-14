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
  $labels = array(
    'name'               => 'Pros',
    'singular_name'      => 'Pro',
    'menu_name'          => 'Pros',
    'name_admin_bar'     => 'Pro',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Pro',
    'new_item'           => 'New Pro',
    'edit_item'          => 'Edit Pro',
    'view_item'          => 'View Pro',
    'all_items'          => 'All Pros',
    'search_items'       => 'Search Pros',
    'parent_item_colon'  => 'Parent Pro',
    'not_found'          => 'No Pros Found',
    'not_found_in_trash' => 'No Pros Found in Trash'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-media-interactive',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'pros' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_pro', $args );


  // creating new content type called menu

  $labelsMenu = array(
    'name'               => 'Poems',
    'singular_name'      => 'Poem',
    'menu_name'          => 'Poems',
    'name_admin_bar'     => 'Poem',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Poem',
    'new_item'           => 'New Poem',
    'edit_item'          => 'Edit Poem',
    'view_item'          => 'View Poem',
    'all_items'          => 'All Poems',
    'search_items'       => 'Search Poems',
    'parent_item_colon'  => 'Parent Poem',
    'not_found'          => 'No Poems Found',
    'not_found_in_trash' => 'No Poems Found in Trash'
  );

  $argsMenu = array(
    'labels'              => $labelsMenu,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-carrot',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'poems' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_poem', $argsMenu );


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
