<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}


add_action( 'init', 'coaches_init' );
/**
 * Register a coach post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function locations_init() {
    $labels = array(
        'name'               => _x( 'Coaches', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Coach', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Coaches', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Coach', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'coach', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Coach', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Coach', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Coach', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Coach', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Coaches', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Coaches', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Coaches:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No coaches found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No coaches found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'coaches' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies'         => array('category', 'post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'coaches', $args );
}
