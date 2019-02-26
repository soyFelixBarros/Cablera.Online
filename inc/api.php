<?php
/**
 * StrapPress Theme Customizer
 *
 * @package StrapPress
 */

/**
 * Capturamos la taxonomias envias por API al crear un post.
 */
function action_rest_insert_post( $post, $request, $true ) {
    $params = $request->get_json_params();
    if ( array_key_exists( 'terms', $params ) ) {
        foreach( $params['terms'] as $taxonomy => $terms ) {
            wp_set_post_terms( $post->ID, $terms, $taxonomy );
        }
    }
}
add_action( 'rest_insert_post', 'action_rest_insert_post', 10, 3 );
