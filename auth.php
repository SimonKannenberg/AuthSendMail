<?php 
	ini_set("session.cookie_path", "/");
	date_default_timezone_set('America/Sao_Paulo');
	session_start();
	//Gerador do codigo
	function generateRandomString($length) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}


	function envia($email){

	//Seta alguns valores para serem passados para o email:
    $codigo_secreto = generateRandomString(6);

    $horario_gerado = date(' H\:i\:s');
    
    $_SESSION["sec"] = $codigo_secreto;

    //Infos para mandar o email:
    $email = $email; //pega o email digitado

	$mensagem = $codigo_secreto;
	
	//Configurando O apache:
	ini_set("SMTP","smtp.gmail.com" ); 
	ini_set('sendmail_from', 'deyeequip@gmail.com'); ///email configurado no apache

	//configurando o envio
	$to = $email;
	$subject = "Seu Titulo";
	$message = $mensagem;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	//envia o email e verifica se enviou
	if (mail($to,$subject,$message,$headers)) {
		echo "<script>alert('Foi enviado um email para voce com o codigo de login');</script>";

	}else{
		echo "<script>alert('Ocorreu um erro ao enviar um email com o codigo de login! tente novamente mais tarde.');</script>";
	}
	
	}

 ?>