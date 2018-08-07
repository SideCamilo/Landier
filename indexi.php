<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Landier</title>
	<link rel="shortcut icon" href="imagenes/logo2015.png" />
	
	<!-- Estilos CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-submenu.min.css">
	<link rel="stylesheet" href="css/stlymenu.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-submenu.min.js"></script>
	<script src="js/docs.js"></script>
	<script src="js/funciones.js"></script>
	<script src="js/lightbox.js"></script>
	
	<script	type = "text/javascript">
		lightbox.option({
		  'alwaysShowNavOnTouchDevices': true
		});
		listapremieri();
		$(function(){
                    $('a.mennu').click(function(e){
                            e.preventDefault();
                            var div = $(this).data('href');
                            var y = $(div).offset().top - 70;
                            $('body,html').stop(true,true).animate({                                
                                    scrollTop: y
                            },1000);
                    });
            });
	</script>
	
</head>

<body onload="zonaseli('7');">
	<?php
	if(!isset($_SESSION['userid'])){
		echo '<div class="error" style = "float: center; font-size: 30px; color: red;">Favor de iniciar Sesión </div>';
    }else{
	?>
	<!-- Menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style = "padding-bottom: 25px; padding-top: 25px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="titulogo"  style = "text-decoration: none" href="#"><img src ="img/logo.png" width = "160px" height = "46px"></img></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
                        <a data-href='#mycarousel' href='#' class = "mennu">INICIO</a>
                    </li>
                    <li>
						<a data-href='#propiedades' href='#' class = "mennu">PROPIEDADES</a>
					</li>
					<li>
                        <a data-href='#contacto' href='#' class = "mennu">CONTACTO</a>
                    </li>
                    <li>
                        <a href="#" onclick="confiaprop()">CONFIANOS TU PROPIEDAD</a>
                    </li>
                    <li>
                        <a href="Registro/logout.php" style = "background-color: #58595B; color: white;">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 	
	<!-- Carrousel imagenes principales -->
	<div style = "width:100%;">
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<img class = "fadeIn" style = "width:100%;" src = "img/Portinver.jpg">
					    
					</img>
				</div>
			</div>
		</div>
	</div>
	
	<br />
	
	
<div id="premier">
 
</div>

		
	<div id="propiedadesi" style="visibility: hidden;">
	  
	</div>
	
	
	
	<div class = "container" id = "propiedades">
		<div class =  "row">
			<div class = "col-md-2">
				<br /><h1 style = "color: #d5b560; font-size: 1.4em">PROPIEDADES</h1>
			</div>
		</div>
	</div>
		
	<div class = "container"></>
		<div class = "row">
			<div id = "arriba" class = "col-md-6">
				<h1 style = 'font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 17px; color: #857e7e; text-align: center;' onclick="zonasel('7');">DESARROLLOS COMERCIALES</h1>
			</div>
			<div id = "arriba" class = "col-md-6">
				<h1 style = 'font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 17px; color: #857e7e; text-align: center;' onclick="zonasel('8');">ÁREAS DE INVERSIÓN</h1>
			</div>
		</div>
	</div>
	
	<div class="row" id="lista"></div>

	</div>
	<br /> <br />		
			
	<div class = "container" id = "contacto">
		<div class = "row">
			<div class = "col-md-2">
				<div class = "Caption">
					<br /><h1 style = "color: #d5b560; font-size: 1.4em">CONTACTO</p>
				</div>
			</div>
		</div>
        <div class="row">
				<form action="php/registro.php" method="post" role="form">
					<div class = "col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" style = "border-radius: 0px;">
						</div>
					</div>
					<div class = "col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="Introduce tu e-mail" style = "border-radius: 0px;">
						</div>
					</div>
						
					<div class  = "col-md-4">
						<div class="form-group">
							<input type="e-mail" class="form-control" name="telefono" placeholder="Introduce tu teléfono" style = "border-radius: 0px;">
						</div>
					</div>
		</div>
				
				<div class = "row">
					<div class =  "col-md-12">
						<div class = "form group">
							<textarea class="form-control" name="mensaje" rows="3" placeholder = "Escribe tu mensaje aqu&iacute" style = "border-radius: 0px;"></textarea>
						</div></br>
					</div>
				</div>
				<div class = "row">
					<div class =  "col-md-4"></div>
					<div class =  "col-md-4"></div>
					<div class =  "col-md-4">
						<button type="submit" class="btn btn-default" style = "margin-left: 295px; background-color: #d5b560; border-radius: 0px;">Enviar</button>
					</div>
				</div>
				</form><br /><br /><br />
	</div>
	
	<div class = "container">
		<div class = "row">
			<div class = "col-md-4">
				<p style="color: #666; font-size: 1.0em">
					® LANDIER MEXICO 2017
				</p></div>
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div style = "float:right;">
					<a href = "http://www.facebook.com/Landier-375170849489308"><img src = "img/logofacebook.png" style = "width:30px; height: 30px;">  </img></a>
					<a href="http://instagram.com/landiermexico"><img src = "img/logoinstagram.png" style = "width:30px; height: 30px;">  </img></a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="confia" class="container" style="visibility: hidden;">
		
		<img src = "img/close.png" id="cerrarventana" class="fa fa-times-circle" aria-hidden="true" onclick="$('#confia').attr('style','visibility:hidden;');" style = "width: 30px; height: 30px; cursor:pointer; position:relative; left:97%;" >
		<div class = "container">
			<div class = "row">
				<h6 style="color: #d5b560; font-size: 1em">
				SI DESEAS VENDER TU PROPIEDAD, CONTACTANOS, EN BREVE NOS COMUNICAREMOS CON USTED
				</h6>
			</div>
		</div>
		<div class = "container" id = "contacto">
        <div class="row">
			<div class = "Caption">
				<form action="php/registro.php" method="post" role="form">
					<div class = "col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" style = "border-radius: 0px;">
						</div>
					</div>
					<div class = "col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="Introduce tu e-mail" style = "border-radius: 0px;">
						</div>
					</div>
						
					<div class  = "col-md-4">
						<div class="form-group">
							<input type="e-mail" class="form-control" name="telefono" placeholder="Introduce tu teléfono" style = "border-radius: 0px;">
						</div>
					</div>
				</div>
			</div>
				
				<div class = "row">
					<div class =  "col-md-12">
						<div class = "form group">
							<textarea class="form-control" name="mensaje" rows="3" placeholder = "Escribe tu mensaje aqu&iacute" style = "border-radius: 0px;"></textarea>
						</div></br>
					</div>
				</div>
				<div class = "row">
					<div class =  "col-md-4"></div>
					<div class =  "col-md-4"></div>
					<div class =  "col-md-4">
						<button type="submit" class="btn btn-default" style = "margin-left: 295px; background-color: #d5b560; border-radius: 0px;">Enviar</button>
					</div>
				</div>
				</form>
		</div>
	</div>
	
</body>
</html>
<?php
	};
	?>