<?php 


add_action('init', 'conteudo_customizado');
 
function conteudo_customizado() {
	

	/* $labels = array(
		'name' => _x('Banners', 'post type general name'),
		'singular_name' => _x('Banner', 'post type singular name'),
		'add_new' => _x('Novo Banner', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Depoimento encontrado'),
		'not_found_in_trash' => __('Nenhum Depoimento na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail')
	  );
	register_post_type( 'lista-banners' , $args );


 */

    $labels = array(
		'name' => _x('Serviços', 'post type general name'),
		'singular_name' => _x('Serviços', 'post type singular name'),
		'add_new' => _x('Novo', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum encontrado'),
		'not_found_in_trash' => __('Nada encontrado na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_icon'   => 'dashicons-desktop',
		'menu_position' => null,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail')
	  );
	register_post_type( 'servicos' , $args );


	    $labels = array(
		'name' => _x('Soluções', 'post type general name'),
		'singular_name' => _x('Soluções', 'post type singular name'),
		'add_new' => _x('Novo', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum encontrado'),
		'not_found_in_trash' => __('Nada encontrado na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_icon'   => 'dashicons-awards',
		'menu_position' => null,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail')
	  );
	register_post_type( 'solucoes' , $args );





	  $labels = array(
		'name' => _x('Clientes', 'post type general name'),
		'singular_name' => _x('clientes', 'post type singular name'),
		'add_new' => _x('Novo clientes', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Depoimento encontrado'),
		'not_found_in_trash' => __('Nenhum Depoimento na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail')
	  );
	register_post_type( 'lista-clientes' , $args );



	$labels = array(
		'name' => _x('Base Leads', 'post type general name'),
		'singular_name' => _x('Base Leads', 'post type singular name'),
		'add_new' => _x('Novo lead', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Depoimento encontrado'),
		'not_found_in_trash' => __('Nenhum Depoimento na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		'menu_icon'   => 'dashicons-groups',
		'supports' => array('title')
	  );
	register_post_type( 'base-leads' , $args );


/***************/





	flush_rewrite_rules();
}

?>