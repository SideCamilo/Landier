﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landier Dashboard</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper" style="background: #444;">
         <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="height: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="" href="index.php"><img src="../../img/ltr.png" style="max-height: 40px; position: relative; left: 15px; top: 30px; vertical-align: bottom;"> <span style="color:#d5b560; font-size: 1.5em; position: relative; top: 30px; left: 50px;"> DASHBOARD</span>

                </a>
            </div>

            <div class="notifications-wrapper" style="background:#000">
<ul class="nav" style="background:#000; height: 100px;">
               
               
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation" style="background: none;" >
            <div class="sidebar-collapse" >
      
                <ul class="nav" id="main-menu" >
                    <li>


                    </li>
                     <li>
                        <a  href="#"> <strong>  </strong></a>
                    </li>

                    <li>
                        <a class="active-menu" style="border: none"   href="index.php">DASHBOARD</a>
                    </li>
                   <li>
                        <a style="border: none"  href="#">PROPIEDADES <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a style="border: none"  href="#">Crear Propiedad<span class = "fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a style="border: none"  href="crear_propiedad.php">Publica</a>
									</li>
									 <li>
										<a style="border: none"  href="crear_propiedadi.php">Privada</a>
									</li>
								</ul>
                            </li>
                            <li>
                                <a style="border: none"  href="#">Editar Propiedad<span class = "fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a style="border: none"  href="ed_propiedad.php">Publica</a>
									</li>
									 <li>
										<a style="border: none"  href="ed_propiedadi.php">Privada</a>
									</li>
								</ul>
                            </li>
							<li>
                                <a style="border: none"  href="#">Borrar Propiedad<span class = "fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a style="border: none"  href="borrar_propiedad.php">Publica</a>
									</li>
									 <li>
										<a style="border: none"  href="borrar_propiedadi.php">Privada</a>
									</li>
								</ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a style="border: none"  href="#">USUARIOS <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a style="border: none"  href="crear_usuario.php">Crear Usuario</a>
                            </li>
                             <li>
                                <a style="border: none"  href="borrar_Usuario.php">Borrar Usuario</a>
                            </li>
                           
                        </ul>
                    </li>
                  
                   
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ingrese los datos para crear usuario</h1>
                    </div>
                </div>
                
              
                <div class="row">
             
              <div class=" col-md-8 col-sm-12">
                 <form action="users/creausuario.php" method="post" role="form">
	<div class = "container" style = "background-color: white; padding-top: 50px; padding-bottom: 50px; border-radius: 15px;">
		<div class="row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="contra" placeholder="Contraseña" style = "border-bottom: solid 1px #ccc; border-top: solid 0px; border-right: solid 0px; border-left: solid 0px;">
				</div>
			</div>
			<div class = "col-md-4"></div>
		</div>
	</div>
	<div class = "container">
		<div class = "row">
			<div class =  "col-md-4"></div>
			<div class =  "col-md-4">
				<button type="submit" class="btn btn-default" value = "login" style = "background-color: #d5b560; border-radius: 0px;">Enviar</button>
			</div>
			<div class =  "col-md-4"></div>
		</div>
	</div>
</form>
                  <br />
               
                    <br />

                    <div class="media">
      <a class="media-left" href="#">
       
      </a>
      <div class="media-body">
      
      </div>
    </div>
   
          
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
        </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; 2017 Landier </a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/funcionesadmin.js"></script>
    <script>
         var URLhash = window.location.hash;
        if (URLhash == "#002") {
            
            $('#confirma').modal('show');
        $('#msg').html('<div id=""><a class="btn btn-success" >Su registro fue exitoso, pronto recibirá nuestras noticias, gracias por suscribirse</a></div>');
            
        }else{}
        lista_prop();
    </script>


</body>
</html>