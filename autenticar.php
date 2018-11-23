<?php 

	session_start();

	require_once("verifica.php");

	if (isset($_POST["codigo"])){
		$digitou = $_POST["codigo"];
		$c_correto = $_SESSION["sec"];
		verifica($c_correto, $digitou);
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
			<input type="text" name="codigo" placeholder="Insira o codigo!" required><br>
			<input type="submit" value="Verificar codigo!">
			<hr>
		</form>
		</center>
	</body>
</html>