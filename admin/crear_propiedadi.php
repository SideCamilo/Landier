<!DOCTYPE html>
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
        <div id="page-wrapper" class="page-wrapper-cls" >
        <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head">CREAR PROPIEDAD PRIVADA</h1>
                    </div>
                </div>
            <div id="page-inner" style="padding: 40px; border: solid 1px #333; background: no-repeat url('../../img/dash.png') right 0px top;  ">
              
               
                <div class="row">
             
              <div class=" col-md-8 col-sm-12">
                  <div class="list-group">
                           
                                <h4 class="list-group-item-heading">PROPIEDAD NUEVA</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                <form action="scripts/creari.php" enctype="multipart/form-data" method="post">
                                   <table class="table  table-bordered ">
                              
                                <tbody>
									<tr>
                                        <td>PRIVADA:</td>
                                        <td><input type="radio" name="publica" value="N" checked>Si</td>
                                       
                                    </tr>
									<tr>
                                        <td>CÓDIGO:</td>
                                        <td><textarea style="color: #000" id="cod" name="cod" required></textarea></td>
                                    </tr>
									<tr>
                                         <td>VALOR VENTA:</td>
                                        <td><textarea style="color: #000" name="valor_venta"></textarea></td>
                                    </tr>
									<tr>
                                         <td>TERRENO:</td>
                                        <td><textarea style="color: #000" name="terreno"></textarea></td>
                                    </tr>
									<tr>
                                         <td>CONSTRUCCIÓN:</td>
                                        <td><textarea style="color: #000" name="construccion"></textarea></td>
                                    </tr>
									<tr>
                                         <td>PLANTAS:</td>
                                        <td><textarea style="color: #000" name="plantas"></textarea></td>
                                    </tr>
									<tr>
                                         <td>RECÁMARAS:</td>
                                        <td><textarea style="color: #000" name="recamaras"></textarea></td>
                                    </tr>
									<tr>
                                         <td>BAÑOS:</td>
                                        <td><textarea style="color: #000" name="banos"></textarea></td>
                                    </tr>
									<tr>
                                         <td>MEDIOS BAÑOS:</td>
                                        <td><textarea style="color: #000" name="medbanos"></textarea></td>
                                    </tr>
									<tr>
                                         <td>ZONA:</td>
                                        <td><select id="zona" name="zona" class="form-control">
                                            <option value="0">SELECCIONE</option>
                                            <option value="7">DESARROLLOS COMERCIALES</option>
                                            <option value="8">AREAS DE INVERSION</option>
                                        </select></td>
                                    </tr>
									<tr>
                                        <td>COLONIA:</td>
                                        <td><textarea style="color: #000" id="col" name="col"></textarea></td>
                                    </tr>
									<tr>
                                        <td>ESTADO:</td>
                                        <td><select name="edo" class="form-control">
										<option value="1">AGUASCALIENTES</option>
										<option value="2">BAJA CALIFORNIA</option>
										<option value="3">BAJA CALIFORNIA SUR</option>
										<option value="4">CAMPECHE</option>
										<option value="5">COAHUILA DE ZARAGOZA</option>
										<option value="6">COLIMA</option>
										<option value="7">CHIAPAS</option>
										<option value="8">CHIHUAHUA</option>
										<option value="9">DISTRITO FEDERAL</option>
										<option value="10">DURANGO</option>
										<option value="11">GUANAJUATO</option>
										<option value="12">GUERRERO</option>
										<option value="13">HIDALGO</option>
										<option value="14">JALISCO</option>
										<option value="15">MÉXICO</option>
										<option value="16">MICHOACÁN DE OCAMPO</option>
										<option value="17">MORELOS</option>
										<option value="18">NAYARIT</option>
										<option value="19">NUEVO LEÓN</option>
										<option value="20">OAXACA</option>
										<option value="21">PUEBLA</option>
										<option value="22">QUERÉTARO</option>
										<option value="23">QUINTANA ROO</option>
										<option value="24">SAN LUIS POTOSÍ</option>
										<option value="25">SINALOA</option>
										<option value="26">SONORA</option>
										<option value="27">TABASCO</option>
										<option value="28">TAMAULIPAS</option>
										<option value="29">TLAXCALA</option>
										<option value="30">VERACRUZ DE IGNACIO DE LA LLAVE</option>
										<option value="31">YUCATÁN</option>
										<option value="32">ZACATECAS</option>
										</select></td>
                                    </tr>
									<tr>
                                        <td>TELÉFONO:</td>
                                        <td><textarea style="color: #000" id="desc" name="desc"></textarea></td>
                                    </tr>
									<tr>
                                        <td>DESCRIPCIÓN:</td>
                                        <td><textarea style="color: #000" id="desc" name="desc"></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>CIUDAD:</td>
                                        <td><input type="text" style="color: #000" name="ciudad"></td>
                                    </tr>
									<tr>
                                        <td>INVERSIÓN:</td>
                                        <td><input type="text" style="color: #000" name="inversion"></td>
                                    </tr>
                                   <tr>
                                        <td>QUE INCLUYE LA INVERSIÓN:</td>
                                        <td><input type="text" style="color: #000" name="incluyeinversion"></td>
                                    </tr>
									<tr>
                                        <td>PROYECTO:</td>
                                        <td><input type="text" style="color: #000" name="proyecto"></td>
                                    </tr>
									<tr>
                                        <td>RENDIMIENTO:</td>
                                        <td><input type="text" style="color: #000" name="rendimiento"></td>
                                    </tr>
									<tr>
                                        <td>CADENA COMERCIAL:</td>
                                        <td><input type="text" style="color: #000" name="cadena"></td>
                                    </tr>
									<tr>
                                        <td>TIEMPO DE GRACIA:</td>
                                        <td><input type="text" style="color: #000" name="tiempo"></td>
                                    </tr>
                                    
									<tr>
										<td>IMAGEN PRINCIPAL:</td>
                                        <td><input type="file" name="imagen_1" class="form-control"></td>
									</tr>
                                    
                                     <tr>
                                        <td colspan="2">Imágenes complementarias<hr></td>
                                        
                                       
                                    </tr>
                                    <tr>
                                        <td>IMAGEN 1:</td>
                                        <td><input type="file" name="imagen_1a" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 2:</td>
                                        <td><input type="file" name="imagen_2" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 3:</td>
                                        <td><input type="file" name="imagen_3" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 4:</td>
                                        <td><input type="file" name="imagen_4" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 5:</td>
                                        <td><input type="file" name="imagen_5" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 6:</td>
                                        <td><input type="file" name="imagen_6" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 7:</td>
                                        <td><input type="file" name="imagen_7" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 8:</td>
                                        <td><input type="file" name="imagen_8" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 9:</td>
                                        <td><input type="file" name="imagen_9" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 10:</td>
                                        <td><input type="file" name="imagen_10" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 11:</td>
                                        <td><input type="file" name="imagen_11" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 12:</td>
                                        <td><input type="file" name="imagen_12" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 13:</td>
                                        <td><input type="file" name="imagen_13" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 14:</td>
                                        <td><input type="file" name="imagen_14" class="form-control"></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>IMAGEN 15:</td>
                                        <td><input type="file" name="imagen_15" class="form-control"></td>
                                       
                                    </tr>
                                    <tr>
										<td></td>
										<td>
											<button type="submit" class="btn btn-default" style = "background-color: #d5b560; border-radius: 0px;">Crear</button>
										</td>
									</tr>
                                </tbody>
                            </table>
                            </form>
                                </p>
                           
                        </div>
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


</body>
</html>