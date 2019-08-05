<?php
	include '../../funciones/conexion.php';


    $sql2 = "select count(*) from materias";
    $consulta2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_row($consulta2);

    $usuariosporpagina = 8;
    $cantusuarios = mysqli_fetch_row($consulta2); 
    $paginas = ceil($row[0]/$usuariosporpagina);
    $inicial = ($_GET['pagina']-1)*$usuariosporpagina;
    $inicial = (int)$inicial;
    $usuariosporpagina = (int)$usuariosporpagina;

    $sql = "select id_materia, materia, id_anio, turno, profesor, dias, horario from materias order by materia, turno, dias, horario limit $inicial,$usuariosporpagina";
    $consulta = mysqli_query($conn, $sql);

    
    
    mysqli_close($conn);
?>