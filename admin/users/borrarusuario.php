<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");

$query_usuarios = 'delete from usuarios
				   where usuario = "'.$_POST['usuario'].'" and password = "'.$_POST['contra'].'"';
$usuariorecord = mysqli_query($landier, $query_usuarios) ;
$idi=mysqli_insert_id($landier);

$go = "borrado.html";
header(sprintf("Location: %s", $go));

?>