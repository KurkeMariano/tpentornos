<?php
include '../../../funciones/conexion.php';

$id= $_POST['id_materia'];
$materia= $_POST['materia'];
$id_anio= $_POST['id_año'];
$turno= $_POST['turno'];
$dias= $_POST['dias'];
$horario= $_POST['horario'];
$profesor =$_POST['cbx_docente'];
$salon= $_POST['salon'];


$existe="select count(*) as cantidad from materias where id_materia = '$id'";
$resultado= mysqli_query($conn, $existe);

while ($fila=mysqli_fetch_array($resultado)) {
    $cantidad= $fila['cantidad'];
    }


if($cantidad > 0){

    echo "Esa materia ya existe!";

} else {

    $sql= "INSERT INTO materias(`id_materia`, `materia`, `id_anio`, `turno`, `profesor`, `dias`, `horario`) VALUES ('$id','$materia','$id_anio','$turno','$profesor','$dias','$horario')";
    $insert = mysqli_query($conn, $sql);
}
mysqli_close($conn);
header("Location: ../agregarcurso.php");
?>