<?php 

$sColores = array();
$sColores['coche1'] = 'Rojo';
$sColores['coche2'] = 'Verde';
$sColores['coche3'] = 'Azul';

$fh = fopen('colores.json', 'w') //para insertar en un array
      or die('Error al abrir fichero de salida');
fwrite($fh, json_encode($sColores,JSON_UNESCAPED_UNICODE));
fclose($fh);






 ?>