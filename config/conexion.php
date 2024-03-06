<?php
$servidor = "localhost";
$base_datos = "gestion_ventas";
$usuario = "root";
$clave = "";

$conn = new mysqli($servidor, $usuario, $clave , $base_datos);
if (!$conn) 
{
die("Connectciòn Fallida: " . mysqli_connect_error());
}
?>