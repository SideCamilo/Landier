<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");

/////////////////////////LEE CLIENTES
$buscar = 'SELECT * FROM propiedades where publica = "S" order by id ASC';
$sql_buscar = mysqli_query($landier, $buscar);
$row_sql_buscar = mysqli_fetch_assoc($sql_buscar);
$totalRows_sql_buscar = mysqli_num_rows($sql_buscar);

/////////////////////////AREA VISIBLE
$output_string='';
do{
$output_string .='<option value="'.$row_sql_buscar['codigo'].'">'.$row_sql_buscar['codigo'].'</option>';
}while ($row_sql_buscar=mysqli_fetch_assoc($sql_buscar)); 
print (json_encode("".$output_string.""));
?>