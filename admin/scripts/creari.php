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

$query_usuarios = "INSERT INTO propiedades(codigo, imagen, descripcion, estado, colonia, ciudad, zona, plantas, recamaras, banos, medbanos, valor_venta, terreno, construccion, imagen1, imagen2, imagen3, imagen4, imagen5, imagen6, imagen7, imagen8, imagen9, imagen10, imagen11, imagen12, imagen13, imagen14, imagen15, publica, telefono, inversion, incluyeinversion, proyecto, rendimiento, cadena, tiempo) 
VALUES ('".$_POST['cod']."','".$_FILES['imagen_1']['name']."', '".$_POST['desc']."', '".$_POST['edo']."', '".$_POST['col']."','".$_POST['ciudad']."', '".$_POST['zona']."', '".$_POST['plantas']."', '".$_POST['recamaras']."', '".$_POST['banos']."', '".$_POST['medbanos']."', '".$_POST['valor_venta']."', '".$_POST['terreno']."', '".$_POST['construccion']."', '".$_FILES['imagen_1a']['name']."', '".$_FILES['imagen_2']['name']."', '".$_FILES['imagen_3']['name']."', '".$_FILES['imagen_4']['name']."', '".$_FILES['imagen_5']['name']."', '".$_FILES['imagen_6']['name']."', '".$_FILES['imagen_7']['name']."', '".$_FILES['imagen_8']['name']."', '".$_FILES['imagen_9']['name']."', '".$_FILES['imagen_10']['name']."', '".$_FILES['imagen_11']['name']."', '".$_FILES['imagen_12']['name']."', '".$_FILES['imagen_13']['name']."', '".$_FILES['imagen_14']['name']."', '".$_FILES['imagen_15']['name']."', '".$_POST['publica']."','".$_POST['tel']."','".$_POST['inversion']."','".$_POST['incluyeinversion']."','".$_POST['proyecto']."','".$_POST['rendimiento']."','".$_POST['cadena']."','".$_POST['tiempo']."')";
$usuariorecord = mysqli_query($landier, $query_usuarios) ;
$idi=mysqli_insert_id($landier);

$go = "../final.html";
header(sprintf("Location: %s", $go));

?>