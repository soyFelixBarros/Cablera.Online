<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package StrapPress
 */

if ( ! function_exists( 'cableraonline_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function cableraonline_posted_on() {
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

	echo $time_string;
}
endif;

if ( ! function_exists( 'strappress_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function strappress_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() && is_single() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'strappress' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><i class="fas fa-tags"></i>' . esc_html__( '%1$s', 'strappress' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'strappress' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link float-right">',
		'</span>', 0, 'btn btn-sm btn-danger'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function strappress_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'strappress_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'strappress_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so strappress_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so strappress_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in strappress_categorized_blog.
 */
function strappress_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'strappress_categories' );
}
add_action( 'edit_category', 'strappress_category_transient_flusher' );
add_action( 'save_post',     'strappress_category_transient_flusher' );

if ( ! function_exists( 'cableraonline_get_link_url' ) ) :
	/**
	 * Devuelve la URL de la publicación.
	 *
	 * Vuelve al enlace permanente de la publicación si no se encuentra una URL en la publicación.
	 *
	 * @since Cablera Online 1.0.1
	 *
	 * @see get_url_in_content()
	 *
	 * @return string La URL del formato de enlace.
	 */
	function cableraonline_get_link_url() {
		$has_url = get_url_in_content( get_the_content() );
	
		return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	}
endif;
