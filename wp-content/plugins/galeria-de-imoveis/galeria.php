<?php
	/*

	Plugin Name: Lista de imagens para slideshow
	Description: Plugin criado especificamente para apresentar as imagens de imóveis em cleberlopes.com

	*/

function retorna_lista_de_imagens( $content ){
	$imagens_galeria = get_post_gallery_images( $post );
	foreach ( $imagens_galeria as $url_imagem){
		$cada_imagem = '<li>' . '<img src="' . $url_imagem . '">' . '</li>';
		echo $cada_imagem;
	}
}
?>
