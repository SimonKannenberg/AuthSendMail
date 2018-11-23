<?php 
	
	require_once("auth.php");
	if (isset($_POST['email'])){
		envia($_POST['email']);
		header("Location: autenticar.php");
	}

 ?>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
	<body>
		<center>
		<form method="post" autocomplete="off">
			<hr>
			<input type="email" name="email" placeholder="Insira um email para o envio do codigo!" required><br>
			<input type="submit" value="Enviar codigo!">
			<hr>
		</form>
		</center>
	</body>
</html>
