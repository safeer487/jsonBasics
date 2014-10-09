<?php 

$aDataBase = array();
$aDataBase['nombre'] = 'carrito' ;
$aDataBase['host'] = 'localhost' ;
$aDataBase['root'] = 'root' ;
$aDataBase['password'] = '' ;

$fh = fopen('database.json', 'w') //para insertar en un array
      or die('Error al abrir fichero de salida');
fwrite($fh, json_encode($aDataBase,JSON_UNESCAPED_UNICODE));
fclose($fh);




 ?>