<?php 

    function verifica($correto, $digitado){
    	$codigo_correto = $correto;
		$codigo_digitado = $digitado;
		if ($codigo_digitado === $codigo_correto) {
			echo "Correto";
		}else{
			echo "Erro!!";
		}

    }



?>
