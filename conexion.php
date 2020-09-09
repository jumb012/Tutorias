<?php
$usuario = "o32YIXCfXY";
$passwd = "v9peRDGP6R";
$bd = "o32YIXCfXY";
$servidor ="remotemysql.com";

$conexion = new mysqli($servidor, $usuario,$passwd,$bd);
if($conexion==false){
	echo'fallo';
}else{
	echo'exito';
}

?>