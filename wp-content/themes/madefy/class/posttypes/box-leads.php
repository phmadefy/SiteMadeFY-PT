<?php 

add_action( 'add_meta_boxes', 'leads_add_meta_box' );
 
function leads_add_meta_box() {
    add_meta_box(
        'leads_metaboxid',
        'Informações do Contato',
        'leads_inner_meta_box',
        'base-leads'
    );
}
 
function leads_inner_meta_box( $link ) {
?>

<p>
  <label for="email-leads">E-mail de contato:</label>
  <br />
  <input style="width:100%;" type="text" id="url" name="email-leads" value="<?php echo get_post_meta( $link->ID, '_email-leads', true ); ?>" >
</p>

<p>
  <label for="telefone-leads">Telefone de contato:</label>
  <br />
  <input style="width:100%;" type="text" id="url" name="telefone-leads" value="<?php echo get_post_meta( $link->ID, '_telefone-leads', true ); ?>" >
</p>

<p>
  <label for="mensagem-leads">Mensagem:</label>
  <br />
  <textarea style="width:100%;" name="mensagem-leads" rows="10"><?php echo get_post_meta( $link->ID, '_mensagem-leads', true ); ?></textarea>
</p>


<?php
}



add_filter( 'manage_edit-base-leads_columns', 'leads_manage_edit_columns' );
function leads_manage_edit_columns( $columns ) {
 
  $lista_leads_columns = array(
    "cb" => $columns["cb"],
    "title" => 'Nome',
    "email-leads" => 'E-mail',
    "telefone-leads" => 'Telefone',
    "date" => $columns["date"],
  );
  return $lista_leads_columns;
 
}


add_action( "manage_posts_custom_column", 'lista_leads_manage_columns', 10, 2);
function lista_leads_manage_columns( $column ) {
  global $post;
  switch ($column) {
    case "email-leads":
      echo get_post_meta( $post->ID, '_email-leads', true );
      break;
    case "telefone-leads":
      echo get_post_meta( $post->ID, '_telefone-leads', true );
      break;
 
  }
}




?>