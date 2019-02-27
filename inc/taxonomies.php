<?php

/**
 * Registramos taxonomía para cargar los Fuentes.
 */
function source_init() {
    $labels = array(
        'name'          => _x( 'Fuentes', 'taxonomy general name', 'textdomain' ),
        'singular_name' => _x( 'Fuente', 'taxonomy singular name', 'textdomain' ),
        'all_items'     => __( 'Todas las fuentes' ),
        'edit_item'     => __( 'Editar fuente' ),
        'update_item'   => __( 'Actualizar fuente' ),
        'add_new_item'  => __( 'Añadir nueva fuente' ),
        'parent_item'   => __( 'Fuente superior' ),
        'search_items'  => __( 'Buscar fuentes' ),
        'popular_items' =>__( 'Fuentes populares' )
    );

    $args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_rest'          => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'fuentes' ),
	);

	register_taxonomy( 'source', array('post', 'attachment'), $args );
}
add_action( 'init', 'source_init', 0 );


/**
 * Registramos taxonomía para cargar las personas.
 */
function people_init() {
    $labels = array(
        'name'          => _x( 'Personas', 'taxonomy general name', 'textdomain' ),
        'singular_name' => _x( 'Persona', 'taxonomy singular name', 'textdomain' ),
        'all_items'     => __( 'Todos las personas' ),
        'edit_item'     => __( 'Editar persona' ),
        'update_item'   => __( 'Actualizar persona' ),
        'add_new_item'  => __( 'Añadir nueva persona' ),
        'parent_item'   => __( 'Persona superior' ),
        'search_items'  => __( 'Buscar personas' ),
        'popular_items' => __( 'Personas populares' )
    );

    $args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'show_in_rest'          => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'personas' ),
	);

	register_taxonomy( 'people', array('post', 'attachment'), $args );
}
add_action( 'init', 'people_init', 0);

/**
 * Registramos taxonomía para cargar la localidad.
 */
function location_init() {
    $labels = array(
        'name'          => _x( 'Ubicaciónes', 'taxonomy general name', 'textdomain' ),
        'singular_name' => _x( 'Ubicación', 'taxonomy singular name', 'textdomain' ),
        'all_items'     => __( 'Todas las ubicaciónes' ),
        'edit_item'     => __( 'Editar ubicación' ),
        'update_item'   => __( 'Actualizar ubicación' ),
        'add_new_item'  => __( 'Añadir nueva ubicación' ),
        'parent_item'   => __( 'Ubicación superior' ),
        'search_items'  => __( 'Buscar ubicaciónes' ),
        'popular_items' =>__( 'Ubicaciónes populares' )
    );

    $args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_rest'          => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'ubicaciónes' ),
	);

	register_taxonomy( 'location', array('post', 'attachment'), $args );
}
add_action( 'init', 'location_init', 0 );
