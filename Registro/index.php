<?php
session_start();

function verificar_login($user,$password) {
	include_once "conexion.php";
	
	$query = 'SELECT * from users where user = "'.$user.'" and contra = "'.$password.'";';
	$sql_buscar = mysqli_query($fc, $query);
	$row_sql_buscar = mysqli_fetch_assoc($sql_buscar);
	$totalRows_sql_buscar = mysqli_num_rows($sql_buscar);

	return $totalRows_sql_buscar;
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password']) == 1)
        {
            $_SESSION['userid'] = $_POST['user'];
            header("location: ../indexi.php");
        }
        else
        {
            echo '<div class="error" style = "font-size: 30px; color: red;">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Landier</title>
	<link rel="shortcut icon" href="../img/logo2015.png" />
	
	<!-- Estilos CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/stlymenu.css">
	
	
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js" defer></script>
</head>
<body>

<div class = "container">
	<div class = "row">
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<img src = "../img/logobg.jpg">
		</div>
		<div class = "col-md-4"></div>
	</div><br />
	<div class = "row">
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<a href = "../index.html"><button class="btn btn-default" style = "margin-left: 75px; background-color: #d5b560; border-radius: 0px;">Regresar a página principal</button></a>
		</div>
		<div class = "col-md-4"></div>
	</div><br />
	<div class = "row">
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "caption">
				<h1 style = "color: white; text-align: center;">USUARIO REGISTRADO <br />FAVOR DE INGRESAR TUS DATOS DE USUARIO</h1><br />
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>
</div>

	<form action="" method="post" class="login">
	<div class = "container" style = "background-color: white; padding-top: 50px; padding-bottom: 50px; border-radius: 15px;">
		<div class="row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="user" placeholder="Usuario" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Contraseña" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
	</div>
	<div class = "container">
		<br />
		<div class = "row">
			<div class =  "col-md-4"></div>
			<div class =  "col-md-4"></div>
			<div class =  "col-md-4">
				<button type="submit" class="btn btn-default" name = "login" value = "login" style = "margin-left: 295px; background-color: #d5b560; border-radius: 0px;">Enviar</button>
			</div>
		</div>
	</div>
	</form>
	
	<div class = "container">
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class = "caption">
					<h1 style = "color: white; text-align: center;"><b>SI AUN NO CUENTAS CON UN USUARIO</b> <br /> SOLICITA TUS DATOS PARA REGISTRO DE ACCESO <br />LOS REVISAREMOS Y ENVIAREMOS A VUELTA DE CORREO</h1><br />
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
	</div>
	
<form action="registro.php" method="post" role="form">
	<div class = "container" style = "background-color: white; padding-top: 50px; padding-bottom: 50px; border-radius: 15px;">
		<div class="row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="email" placeholder="Introduce tu e-mail" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="e-mail" class="form-control" name="telefono" placeholder="Introduce tu telefono" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>				
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class = "form group">
					<textarea class="form-control" name="mensaje" rows="3" placeholder = "Escribe tu mensaje aqu&iacute" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;"></textarea>
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
	</div>
	
	<div class = "container">
		<br />
		<div class = "row">
			<div class =  "col-md-4"></div>
			<div class =  "col-md-4"></div>
			<div class =  "col-md-4">
				<button type="submit" class="btn btn-default" style = "margin-left: 295px; background-color: #d5b560; border-radius: 0px;">Enviar</button>
			</div>
		</div>
	</div> <br /><br />
</form>
<footer>

</footer>
<?php 
} else {
    header("location: ../indexi.php");
}
?>
<script src="js/script.js"></script>
<script>
	 var URLhash = window.location.hash;
        if (URLhash == "#002") {
            
            $('#confirma').modal('show');
        $('#msg').html('<div id=""><a class="btn btn-success" >Su registro fue exitoso, pronto recibirá nuestras noticias, gracias por suscribirse</a></div>');
            
        }else{}
</script>
</html>