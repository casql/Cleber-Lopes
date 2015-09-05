<?php
	/*
	Plugin Name: Posts do tipo Imóvel
	Description: Plugin que cria o tipo de post "imóveis" para Cleber Lopes Imóveis
	*/

	add_action( 'init', 'adiciona_post_type_imoveis' );

	function adiciona_post_type_imoveis() {

	register_post_type( 'cleberlopes_imoveis', array(
	  'labels' => array(
	    'name' => 'Imóveis',
	    'singular_name' => 'Imóvel',
	   ),
	  'description' => 'Cadastro de imóveis no sistema.',
	  'public' => true,
	  'menu_position' => 3,
	  'supports' => array( 'title', 'editor', 'custom-fields' ),
		'rewrite' => array('slug' => 'imoveis'),
	));
	}
