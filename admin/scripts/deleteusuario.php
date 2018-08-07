<?php
header("Location: final.html");
$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2";
$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");
$buscar = 'DELETE FROM usuarios WHERE idusuario = "'.$_POST['prop'].'"';
$usuariorecord = mysqli_query($landier, $buscar);

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Landier</title>
	<link rel="shortcut icon" href="../../img/logo2015.png" />
	
	<!-- Estilos CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/stlymenu.css">
	
	
	<script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js" defer></script>
</head>
<body>

<div class = "container">
	<div class = "row">
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<img src = "../../img/logobg.jpg">
		</div>
		<div class = "col-md-4"></div>
	</div>
	<div class = "row">
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "caption">
				<h1 style = "color: white; text-align: center;">Su movimiento ha sido exitoso!</h1><br />
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>
	<div class = "row">
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<a href = "../index.php"><button class="btn btn-default" style = "margin-left: 100px; background-color: #d5b560; border-radius: 0px;">Regresar a Dashboard</button></a>
		</div>
		<div class = "col-md-4"></div>
	</div>
</div>
<footer>

</footer>
<script src="js/script.js"></script>
</html>'
?>