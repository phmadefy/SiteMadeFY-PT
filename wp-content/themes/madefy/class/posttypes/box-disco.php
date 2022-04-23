<?php 

add_action( 'add_meta_boxes', 'disco_add_meta_box' );
 
function disco_add_meta_box() {
    add_meta_box(
        'disco_metaboxid',
        'Link do album',
        'disco_inner_meta_box',
        'discografia',
        'side'
    );
}
 
function disco_inner_meta_box( $disco ) {
?>


<p>
  <label for="link_disco">Link do spotify:</label>
  <br />
  <input type="text" style="width: 100%;" name="link_disco" class="form-campo" value="<?php echo get_post_meta( $disco->ID, '_link_disco', true ); ?>">
</p>

<?php
}

/***************/

add_action( 'save_post', 'disco_save_post', 10, 2 );
 
function disco_save_post( $disco_id, $download ) {
    // Fazer a saneaÃ§Ã£o dos inputs e guardÃ¡-los
    update_post_meta( $disco_id, '_link_disco', strip_tags( $_POST['link_disco'] ) );

   return true;
}






?>