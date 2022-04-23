<?php

//include(TEMPLATEPATH . '/recaptchalib.php');

require_once "recaptchalib.php";

// your secret key
$secret = "6LeC6Y8bAAAAADTO76nAjBRMEp7goAofl7DsWJWo";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}


  if ($response != null && $response->success) {



  	if ($_REQUEST['nome']) {

		try {
		
			$new_post = array(
							'post_title' => $_REQUEST['nome'],
							'post_status' => 'publish',
							'post_author' => '1',
							'post_type' => 'base-leads'
						);
			$post_id = wp_insert_post($new_post);
			
			update_post_meta($post_id, '_telefone-leads', $_REQUEST['telefone']);
			update_post_meta($post_id, '_email-leads', $_REQUEST['email']);
			update_post_meta($post_id, '_mensagem-leads', $_REQUEST['mensagem']);
		} 

	    catch (Exception $e) {
	        echo   '{
	                    "title": "Falha na gravação dos dados",
	                    "message": "Erro ao enviar sua mensagem, tente novamente."
	                }';
	        exit;
		}


		echo "<script type='text/javascript'>
				location.href = 'https://www.madefy.com.br/sucesso/';
			</script>";

	} else{
		echo "<script type='text/javascript'>
				alert('Preencha todos os campos.'); 
				location.href = 'https://www.madefy.com.br/fale-conosco/';
			</script>";
	}



  } else {

  	echo "<script type='text/javascript'>
				alert('Recaptcha invalido.'); 
				location.href = 'https://www.madefy.com.br/fale-conosco/';
			</script>";

  }




	


	              
	

?>