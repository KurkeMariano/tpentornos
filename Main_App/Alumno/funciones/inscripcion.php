<?php
include '../../../funciones/conexion.php';
session_start();

$id = $_POST['id_materia'];
$materia= $_POST['materia'];
$profesor= $_POST['profesor'];
$dias= $_POST['dias'];
$horario= $_POST['horario'];
$alumno = $_SESSION['dni'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$completo = $apellido . ", " . $nombre;
//print_r($_SESSION); exit();

$existe="select count(*) as cantidad from materias_alumno where id_materia = '$id' and id_alumno = '$alumno'";
$resultado= mysqli_query($conn, $existe);
while ($fila=mysqli_fetch_array($resultado)) {
    $cantidad= $fila['cantidad'];
    }

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="../../../js/jquery-3.4.1.min.js"> </script>
      <script src="../../../js/sweetalert2.min.js"></script>
      
<?php
if($cantidad > 0){

echo "<script>alert('Ya se encuentra inscripto en esa materia')</script>";


} else {

    $sql= "INSERT INTO `materias_alumno`(`materia`, `profesor`, `alumno`, `dias`, `horario`, `id_alumno`, `id_materia`) VALUES ('$materia','$profesor','$completo','$dias','$horario','$alumno','$id')";
    $insert = mysqli_query($conn, $sql);

}
mysqli_close($conn);
header("Location: ../agregarmateria.php");
?>