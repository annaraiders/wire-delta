<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Delta Custom Post Type
 */
function wire_custom_init() {
    $labels = array(
        'name'                  => _x( 'Delta', 'Post type general name', 'delta' ),
        'singular_name'         => _x( 'Delta', 'Post type singular name', 'delta' ),
        'menu_name'             => _x( 'Delta', 'Admin Menu text', 'delta' ),
        'name_admin_bar'        => _x( 'Delta', 'Add New on Toolbar', 'delta' ),
        'add_new'               => __( 'Add New', 'delta' ),
        'add_new_item'          => __( 'Add New delta', 'delta' ),
        'new_item'              => __( 'New delta', 'delta' ),
        'edit_item'             => __( 'Edit delta', 'delta' ),
        'view_item'             => __( 'View delta', 'delta' ),
        'all_items'             => __( 'All delta', 'delta' ),
        'search_items'          => __( 'Search delta', 'delta' ),
        'parent_item_colon'     => __( 'Parent delta:', 'delta' ),
        'not_found'             => __( 'No delta found.', 'delta' ),
        'not_found_in_trash'    => __( 'No delta found in Trash.', 'delta' ),
        'featured_image'        => _x( 'Delta Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'delta' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'delta' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'delta' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'delta' ),
        'archives'              => _x( 'delta archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'delta' ),
        'insert_into_item'      => _x( 'Insert into delta', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'delta' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this delta', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'delta' ),
        'filter_items_list'     => _x( 'Filter deltas list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'delta' ),
        'items_list_navigation' => _x( 'deltas list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'delta' ),
        'items_list'            => _x( 'deltas list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'delta' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'delta custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'delta' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'delta', $args );
}
add_action( 'init', 'wire_custom_init' );

/**
 * Wire Custom taxonomy
 */
function delta_custom_taxonomy() {
 
    $labels = array(
        'name'              => _x( 'wires', 'taxonomy general name', 'wire' ),
        'singular_name'     => _x( 'wire', 'taxonomy singular name', 'wire' ),
        'search_items'      => __( 'Search wires', 'wire' ),
        'all_items'         => __( 'All wires', 'wire' ),
        'view_item'         => __( 'View wire', 'wire' ),
        'parent_item'       => __( 'Parent wire', 'wire' ),
        'parent_item_colon' => __( 'Parent wire:', 'wire' ),
        'edit_item'         => __( 'Edit wire', 'wire' ),
        'update_item'       => __( 'Update wire', 'wire' ),
        'add_new_item'      => __( 'Add New wire', 'wire' ),
        'new_item_name'     => __( 'New wire Name', 'wire' ),
        'not_found'         => __( 'No wires Found', 'wire' ),
        'back_to_items'     => __( 'Back to wires', 'wire' ),
        'menu_name'         => __( 'Wire', 'wire' ),
    );
 
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'wire' ),
        'show_in_rest'      => true,
    );
 
 
    register_taxonomy( 'wire', 'delta', $args );
 
}

add_action( 'init', 'delta_custom_taxonomy' );