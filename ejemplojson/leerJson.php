<?php 
$str_datos = file_get_contents('database.json');  //recoge datos
$aDataBase = json_decode($str_datos,true); //traduce los datos recogidos en un array
 
$sNomBD = $aDataBase['nombre'];
$sHost = $aDataBase['host'];
$sRoot = $aDataBase['root'];
$sPassword = $aDataBase['password'];


//conexion a base de datos
$sConexion = mysql_connect($sHost,$sRoot,$sPassword);
mysql_select_db($sNomBD, $sConexion);





 ?>