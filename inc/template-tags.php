<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package galira_1.0
 */

if ( ! function_exists( 'galira_web_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function galira_web_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '<i class="fa fa-clock-o"></i> %s', 'post date', 'galira-web' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '<i class="fa fa-user"></i> %s', 'post author', 'galira-web' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'galira_web_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function galira_web_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'galira-web' ) );
		if ( $categories_list && galira_web_categorized_blog() ) {
			printf( '<span class="cat-links">' . _x( '<i class="fa fa-folder-open"></i> %1$s', 'galira-web' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'galira-web' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . _x( '<i class="fa fa-tags"></i> %1$s', 'galira-web' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( _x( '<i class="fa fa-comments"></i>&nbsp; Komentar anda', 'galira-web' ), esc_html__( '1 Comment', 'galira-web' ), esc_html__( '% Comments', 'galira-web' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			_x( '&nbsp;<i class="fa fa-pencil-square-o"></i>&nbsp;Ubah%s', 'galira-web' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function galira_web_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'galira_web_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'galira_web_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so galira_web_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so galira_web_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in galira_web_categorized_blog.
 */
function galira_web_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'galira_web_categories' );
}
add_action( 'edit_category', 'galira_web_category_transient_flusher' );
add_action( 'save_post',     'galira_web_category_transient_flusher' );
