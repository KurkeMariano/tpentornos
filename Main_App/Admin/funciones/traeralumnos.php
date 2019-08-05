<?php
include '../../funciones/conexion.php';

    $sql2 = "select count(*) from usuario where tipo_usuario = 1";
    $consulta2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_row($consulta2);

    $usuariosporpagina = 8;
    $cantusuarios = mysqli_fetch_row($consulta2); 
    $paginas = ceil($row[0]/$usuariosporpagina);
    $inicial = ($_GET['pagina']-1)*$usuariosporpagina;
    $inicial = (int)$inicial;
    $usuariosporpagina = (int)$usuariosporpagina;

    $sql = "select dni, nombre, apellido, mail, fecha_nacimiento, telefono, instrumento from usuario where tipo_usuario = 1 order by apellido, nombre, fecha_nacimiento limit $inicial,$usuariosporpagina";
    $consulta = mysqli_query($conn, $sql);

    mysqli_close($conn);

?>