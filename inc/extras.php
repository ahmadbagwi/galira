<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package galira_1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function galira_web_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'galira_web_body_classes' );/**
* Custom Read More Button
*/
function modify_read_more_link() {
return '<p><a class="more-link btn btn-default" href="' . get_permalink() . '">Lanjutkan membaca</a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

