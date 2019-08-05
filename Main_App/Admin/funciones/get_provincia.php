<?php
include '../../funciones/conexion.php';
 
    $sql = "select provincia_nombre, id_provincia from provincia order by provincia_nombre";
    $consulta = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>