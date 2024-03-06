<?php
include("config/conexion.php");

     $cod_producto = $conn->real_escape_string($_POST["cod_producto"]);
     $nom_producto= $conn->real_escape_string($_POST["nom_producto"]);
     $precio= $conn->real_escape_string($_POST["precio"]);
     $cantidad= $conn->real_escape_string($_POST["cantidad"]);
     $cod_categoria= $conn->real_escape_string($_POST["cod_categoria"]);
     $fecha_elab= $conn->real_escape_string($_POST["fecha_elab"]);
     $fecha_cad= $conn->real_escape_string($_POST["fecha_cad"]);

     $sql = "INSERT INTO productos(cod_producto, nom_producto, precio, cantidad, cod_categoria, fecha_elab, fecha_cad)
     values('$cod_producto', '$nom_producto', '$precio', '$cantidad', '$cod_categoria', '$fecha_elab', '$fecha_cad')";

     $conn->query($sql);
     $conn->close();

?>