<?php
include("config/conexion.php");

    $codigo=$_GET['cod_producto'];
    $sql = "DELETE FROM productos WHERE cod_producto='$codigo'";

    if ($conn->query($sql) === TRUE) {
      $conn->close();
      header("Location: consulta_productos.php");
      exit();
    } else {
      echo "Error al eliminar el producto: " . $conn->error;
    }
?>
