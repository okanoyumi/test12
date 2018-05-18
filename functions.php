<?php
/**
 * Functions
 *
 * @package WordPress
 */

/**Add_theme_support*/
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnail' );

// Custom-header.
$custom_header_args = array(
	'width'          => 1200,
	'height'         => 300,
	'flex-width'     => false,
	'flex-height'    => false,
	'random-default' => true,
);
add_theme_support( 'custom-header', $custom_header_args );

/** Navigation.*/
function test12_setup_theme() {
	register_nav_menus( array(
		'top' => ( 'Top Menu' ),
	) );
}
add_action( 'after_setup_theme', 'test12_setup_theme' );

/** Custom-posts */
function news_init() {
	register_post_type(
		'news', array(
			'label'         => 'news',
			'public'        => true,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'menu_position' => 3,
			'has_archives'  => true,
			'taxonomies'    => array( 'news' ),
			'show_in_rest'  => true,
			'singular_name' => 'news',
	) );
		$args = array(
			'label'        => 'NEWS',
			'public'       => true,
			'show_ul'      => true,
			'hierarchical' => true,
		);
		register_taxonomy( 'news', $args );
}
add_action( 'init', 'news_init' );
