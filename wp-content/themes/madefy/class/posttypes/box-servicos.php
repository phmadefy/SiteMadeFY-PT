<?php 

add_action( 'add_meta_boxes', 'servicos_add_meta_box' );
 
function servicos_add_meta_box() {
    add_meta_box(
        'servicos_metaboxid',
        'Informações',
        'servicos_inner_meta_box',
        'servicos'
    );
}
 
function servicos_inner_meta_box( $video ) {
?>

<p>
  <label for="desc_servicos">Breve descrição do serviço:</label>
  <br />
  <input style="width:100%;" type="text" name="desc_servicos" value="<?php echo get_post_meta( $video->ID, '_desc_servicos', true ); ?>" ><br>
</p>

<?php
}

/***************/

add_action( 'save_post', 'servicos_save_post', 10, 2 );
 
function servicos_save_post( $servicos_id, $download ) {
    // Fazer a saneaÃ§Ã£o dos inputs e guardÃ¡-los
    update_post_meta( $servicos_id, '_desc_servicos', strip_tags( $_POST['desc_servicos'] ) );

  return true;
}

?>