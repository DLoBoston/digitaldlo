<?php
/**
 * @package Ampersand Child Theme
 */


/**
 * Load the parent and child theme styles
 */
function ampersand_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'ampersand-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'ampersand-child-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ampersand_parent_theme_style' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');