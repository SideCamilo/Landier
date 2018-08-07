<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 


require_once('class.upload.php');


$files = array($_FILES['imagen_1'],$_FILES['imagen_1a'],$_FILES['imagen_2'],$_FILES['imagen_3'],$_FILES['imagen_4'],$_FILES['imagen_5'],$_FILES['imagen_6'],$_FILES['imagen_7'],$_FILES['imagen_8'],$_FILES['imagen_9'],$_FILES['imagen_10'],$_FILES['imagen_11'],$_FILES['imagen_12'],$_FILES['imagen_13'],$_FILES['imagen_14'],$_FILES['imagen_15']);
	foreach ($files as $file) {
  $handle = new Upload($file);
  if ($handle->uploaded) {
    $handle->Process("../../img/prop/");
    if ($handle->processed) {
     // echo 'OK';
    } else {
     // echo 'Error: ' . $handle->error;
    }
  } else {
   // echo 'Error: ' . $handle->error;
  }
  unset($handle);
}

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");

if($_FILES['imagen_1']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen = '".$_FILES['imagen_1']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['desc'] != ""){
	$query_usuarios = "UPDATE propiedades SET descripcion = '".$_POST['desc']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['edo'] != "0"){
	$query_usuarios = "UPDATE propiedades SET estado = '".$_POST['edo']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['col'] != ""){
	$query_usuarios = "UPDATE propiedades SET colonia = '".$_POST['col']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['ciudad'] != ""){
	$query_usuarios = "UPDATE propiedades SET ciudad = '".$_POST['ciudad']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['zona'] != "0"){
	$query_usuarios = "UPDATE propiedades SET zona = '".$_POST['zona']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['plantas'] != ""){
	$query_usuarios = "UPDATE propiedades SET plantas = '".$_POST['plantas']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['recamaras'] != ""){
	$query_usuarios = "UPDATE propiedades SET recamaras = '".$_POST['recamaras']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['banos'] != ""){
	$query_usuarios = "UPDATE propiedades SET banos = '".$_POST['banos']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['medbanos'] != ""){
	$query_usuarios = "UPDATE propiedades SET medbanos = '".$_POST['medbanos']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['valor_venta'] != ""){
	$query_usuarios = "UPDATE propiedades SET valor_venta = '".$_POST['valor_venta']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['terreno'] != ""){
	$query_usuarios = "UPDATE propiedades SET terreno = '".$_POST['terreno']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['construccion'] != ""){
	$query_usuarios = "UPDATE propiedades SET construccion = '".$_POST['construccion']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_1a']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen1 = '".$_FILES['imagen_1a']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_2']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen2 = '".$_FILES['imagen_2']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_3']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen3 = '".$_FILES['imagen_3']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_4']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen4 = '".$_FILES['imagen_4']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);	
}
if($_FILES['imagen_5']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen5 = '".$_FILES['imagen_5']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_6']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen6 = '".$_FILES['imagen_6']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_7']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen7 = '".$_FILES['imagen_7']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_8']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen8 = '".$_FILES['imagen_8']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_9']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen9 = '".$_FILES['imagen_9']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_10']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen10 = '".$_FILES['imagen_10']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);	
}
if($_FILES['imagen_11']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen11 = '".$_FILES['imagen_11']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_12']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen12 = '".$_FILES['imagen_12']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_13']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen13 = '".$_FILES['imagen_13']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_14']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen14 = '".$_FILES['imagen_14']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_FILES['imagen_15']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen15 = '".$_FILES['imagen_15']['name']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['publica'] != ""){
	$query_usuarios = "UPDATE propiedades SET publica = '".$_POST['publica']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['tel'] != ""){
	$query_usuarios = "UPDATE propiedades SET telefono = '".$_POST['tel']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}

$go = "../final.html";
header(sprintf("Location: %s", $go));

?>