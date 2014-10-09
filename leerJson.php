<?php 

$str_datos = file_get_contents('colores.json');  //recoge datos
$aColores = json_decode($str_datos,true); //traduce los datos recogidos en un array
 
echo $aColores['coche2'];//el color del coche que va a aparecer


 ?>