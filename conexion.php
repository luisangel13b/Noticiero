<?php
function conectar(){
$user="root";
$server="localhost";
$pass="";
$basededatos="noticiero";
$conexion=mysqli_connect($server,$user,$pass,$basededatos)
or die("No se pudo conectar al servidor.");
mysqli_set_charset($conexion,"utf8");
}
?>

