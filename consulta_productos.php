<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA DE PRODUCTOS</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.js"></script>
</head>
<body>
    
   <div class="container">
   <table class="table table-hover table-borderless table-info" id="tabla_datos">
        <thead>
            <tr>
                <td>Cod. Producto</td>
                <td>Producto</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Categoria</td>
                <td>Fecha Elab.</td>
                <td>Fecha Cad.</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <?php
                    include("config/conexion.php");
                    $consulta = "SELECT * FROM productos";
                    if ($resultado = $conn->query($consulta)) 
                    {
                        echo "<tbody>";
                        while ($filas = $resultado->fetch_assoc()) 
                        {
                            $cod_producto = $filas["cod_producto"];
                            $nom_producto= $filas["nom_producto"];
                            $precio= $filas["precio"];
                            $cantidad= $filas["cantidad"];
                            $cod_categoria= $filas["cod_categoria"];
                            $fecha_elab= $filas["fecha_elab"];
                            $fecha_cad= $filas["fecha_cad"];

                            echo '<tr>
                                    <td>'.$cod_producto.'</td>
                                    <td>'.$nom_producto.'</td>
                                    <td>'.$precio.'</td>
                                    <td>'.$cantidad.'</td>
                                    <td>'.$cod_categoria.'</td>
                                    <td>'.$fecha_elab.'</td>
                                    <td>'.$fecha_cad.'</td>';
                                ?>
                                    <td><a href="editar.php?cod_producto=<?php echo $cod_producto; ?>">Editar</a></td>
                                    <td><a href="eliminar.php?cod_producto=<?php echo $cod_producto; ?>">Eliminar</a></td>
                                    <?php
                                echo "</tr>";
                        }
                        echo "</tbody>";
                    }
                    ?>
                    <?php
                        $resultado->free();
                        mysqli_close($conn);   
                    ?>
                    <script>
                        $(document).ready(function () {
                            $('#tabla_datos').DataTable();
                        });
                    </script>
    </table>
   </div>
   <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    
</body>
</html>
