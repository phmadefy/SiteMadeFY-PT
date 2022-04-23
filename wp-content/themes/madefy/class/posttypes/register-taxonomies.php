<?php

add_action( 'init', 'create_taxonomy_categoria_agenda', 0 );
function create_taxonomy_categoria_agenda() {
    register_taxonomy( 'categoria-agenda', array( 'agenda' ), array(
        'hierarchical' => true,
        'label' => __( 'Mês' ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
	        'rewrite' => array(
	            'slug' => 'agenda/mes',
	            'with_front' => true,
	        ),
	        'capabilities' => array(
	            'manage_terms' => true,
	            'edit_terms' => true,
	            'delete_terms' => true,
	        )
        )
    );
}




add_action( 'init', 'create_taxonomy_categoria_midias', 0 );
function create_taxonomy_categoria_midias() {
    register_taxonomy( 'categoria-midias', array( 'midias' ), array(
        'hierarchical' => true,
        'label' => __( 'Mês' ),
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
	        'rewrite' => array(
	            'slug' => 'midias/mes',
	            'with_front' => true,
	        ),
	        'capabilities' => array(
	            'manage_terms' => true,
	            'edit_terms' => true,
	            'delete_terms' => true,
	        )
        )
    );
}



?>