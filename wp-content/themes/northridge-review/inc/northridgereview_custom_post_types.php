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
    'name'               => 'Submissions',
    'singular_name'      => 'Submission',
    'menu_name'          => 'Submissions',
    'name_admin_bar'     => 'Submission',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Submission',
    'new_item'           => 'New Submission',
    'edit_item'          => 'Edit Submission',
    'view_item'          => 'View Submission',
    'all_items'          => 'All Submissions',
    'search_items'       => 'Search Submissions',
    'parent_item_colon'  => 'Parent Submission',
    'not_found'          => 'No Submissions Found',
    'not_found_in_trash' => 'No Submissions Found in Trash'
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
    'menu_icon'           => 'dashicons-media-document',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'submissions' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_project', $args );
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
    'rewrite'           => array( 'slug' => 'category' ),
  );

  register_taxonomy('fourohfive_project_type',array('fourohfive_project'),$args);

  // Add a taxonomy like tags
  $labels = array(
    'name'                       => 'Genres',
    'singular_name'              => 'Genre',
    'search_items'               => 'Genres',
    'popular_items'              => 'Popular Genres',
    'all_items'                  => 'All Genres',
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit Genre',
    'update_item'                => 'Update Genre',
    'add_new_item'               => 'Add New Genre',
    'new_item_name'              => 'New Genre Name',
    'separate_items_with_commas' => 'Separate Genres with commas',
    'add_or_remove_items'        => 'Add or remove Genres',
    'choose_from_most_used'      => 'Choose from most used Genres',
    'not_found'                  => 'No Genres found',
    'menu_name'                  => 'Genres',
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
