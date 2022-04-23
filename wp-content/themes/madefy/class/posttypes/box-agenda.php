<?php 

add_action( 'add_meta_boxes', 'agenda_add_meta_box' );
 
function agenda_add_meta_box() {
    add_meta_box(
        'agenda_metaboxid',
        'Informações',
        'agenda_inner_meta_box',
        'agenda'
    );
}
 
function agenda_inner_meta_box( $agenda ) {
?>


<p>
  <label for="semana_agenda">Dia da semana:</label>
  <br />
  <select style="width: 100%;" name="semana_agenda" class="form-campo">
    <option value="">Selecione</option>
    <option value="Segunda-feira" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Segunda-feira") { echo "selected"; } ?> >Segunda-feira</option>
    <option value="Terça-feira" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Terça-feira") { echo "selected"; } ?> >Terça-feira</option>
    <option value="Quarta-feira" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Quarta-feira") { echo "selected"; } ?> >Quarta-feira</option>
    <option value="Quinta-feira" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Quinta-feira") { echo "selected"; } ?> >Quinta-feira</option>
    <option value="Sexta-feira" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Sexta-feira") { echo "selected"; } ?> >Sexta-feira</option>
    <option value="Sábado" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Sábado") { echo "selected"; } ?> >Sábado</option>
    <option value="Domingo" <?php if (get_post_meta( $agenda->ID, '_semana_agenda', true ) == "Domingo") { echo "selected"; } ?> >Domingo</option>
  </select>
</p>

<p>
  <label for="local_agenda">Local do evento:</label>
  <br />
  <input type="text" style="width: 100%;" name="local_agenda" class="form-campo" value="<?php echo get_post_meta( $agenda->ID, '_local_agenda', true ); ?>">
</p>

<p>
  <label for="link_agenda">Link para comprar ingresso:</label>
  <br />
  <input type="text" style="width: 100%;" name="link_agenda" class="form-campo" value="<?php echo get_post_meta( $agenda->ID, '_link_agenda', true ); ?>" placeholder="http://www.sitedeingresso.com.br">
</p>

<?php
}

/***************/

add_action( 'save_post', 'agenda_save_post', 10, 2 );
 
function agenda_save_post( $agenda_id, $download ) {
    // Fazer a saneaÃ§Ã£o dos inputs e guardÃ¡-los
    update_post_meta( $agenda_id, '_semana_agenda', strip_tags( $_POST['semana_agenda'] ) );
    update_post_meta( $agenda_id, '_local_agenda', strip_tags( $_POST['local_agenda'] ) );
    update_post_meta( $agenda_id, '_link_agenda', strip_tags( $_POST['link_agenda'] ) );

   return true;
}






?>