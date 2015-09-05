<?php
	/*
	Plugin Name: Galeria de imagens
	Description: Plugin que retorna uma lista de imagens usando a funcionalidade de galeria do WP
	*/

	/* Start Adding Functions Below this Line */
	// Documentação de funções do tema Cleber Lopes

	function cleberlopes_galeria_retorna_urls_das_imagens( $content ) {

 	global $post;

 	// Only do this on singular items
 	if( ! is_singular() )
 		return $content;

 	// Make sure the post has a gallery in it
 	if( ! has_shortcode( $post->post_content, 'gallery' ) )
 		return $content;

 	// Retrieve the first gallery in the post
 	$gallery = get_post_gallery_images( $post );

	$image_list = '<ul>';

	// Loop through each image in each gallery
	foreach( $gallery as $image_url ) {

		$image_list .= '<li>' . '<img src="' . $image_url . '">' . '</li>';

	}

	$image_list .= '</ul>';

	// Append our image list to the content of our post
	$content .= $image_list;

 	return $content;

 }
 add_filter( 'the_content', 'cleberlopes_galeria_retorna_urls_das_imagens' );

	/* Stop Adding Functions Below this Line */
	?>
