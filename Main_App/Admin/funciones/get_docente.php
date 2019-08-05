<?php
include '../../funciones/conexion.php';
 
    $sql = "select nombre, apellido from usuario where tipo_usuario = 2 order by apellido, nombre";
    $consulta = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>