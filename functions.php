<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


function custom_post_type_cardapio() {
	register_post_type('cardapio', array(
		'label' => 'Cardápio',
		'description' => 'Cardápio',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'cardapio', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Cardápio',
			'singular_name' => 'Cardapio',
			'menu_name' => 'Cardápio',
			'add_new' => 'Adicionar Novo ',
			'add_new_item' => 'Adicionar Novo Prato',
			'edit' => 'Editar',
			'edit_item' => 'Editar Prato',
			'new_item' => 'Novo Prato',
			'view' => 'Ver Prato',
			'view_item' => 'Ver Prato',
			'search_items' => 'Procurar Prato',
			'not_found' => 'Nenhum Prato Encontrado',
			'not_found_in_trash' => 'Nenhum Prato Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_cardapio');
