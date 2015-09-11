<?php
  // adiciona suporte a imagens destaque de posts
  add_theme_support( 'post-thumbnails' );

  //função que retorna a uri do thumbnail
  function retorna_medium_thumb_url(){
    $thumb_id = get_post_thumbnail_id($post->ID);
    $thumb_url = wp_get_attachment_image_src( $thumb_id , 'medium' );
    $sized_thumb = $thumb_url['0'];
    echo $sized_thumb;
  }

  function retorna_large_thumb_url(){
    $thumb_id = get_post_thumbnail_id($post->ID);
    $thumb_url = wp_get_attachment_image_src( $thumb_id , 'large' );
    $sized_thumb = $thumb_url['0'];
    echo $sized_thumb;
  }
?>
