<?php
include '../../../funciones/conexion.php';

$nombre= strtolower($_POST['nombre']);
$apellido= strtolower($_POST['apellido']);
$email= $_POST['email'];
$fechanacimiento= $_POST['fecha_nac'];
$dni= $_POST['dni'];
$numero = substr($dni,5,3);
$usuario = $apellido . $nombre . $numero;
$password = md5($usuario);
$telefono= $_POST['telefono'];
$cbx_provincia =$_POST['cbx_provincia'];
$cbx_ciudad= $_POST['cbx_ciudad'];
$direccion= $_POST['direccion'];
$piso= $_POST['piso'];
$dpto= $_POST['dpto'];
$instrumento= $_POST['instrumento'];

$existe="select count(*) as cantidad from usuario where dni = '$dni'";
$resultado= mysqli_query($conn, $existe);

while ($fila=mysqli_fetch_array($resultado)) {
    $cantidad= $fila['cantidad'];
    }


if($cantidad > 0){

    echo "Ese usuario ya existe!";

} else {

    $sql= "INSERT INTO usuario(`tipo_usuario`, `desc_usuario`, `DNI`, `usuario`, `password`, `nombre`, `apellido`, `fecha_nacimiento`, `mail`, `telefono`, `provincia`, `ciudad`,  `direccion`, `piso`, `dpto`, `instrumento`, `fecha_ingreso`, `fecha_egreso`, `activo`) VALUES (2,'alumno','$dni','$usuario','$password','$nombre','$apellido','$fechanacimiento','$email','$telefono','$cbx_provincia','$cbx_ciudad','$direccion','$piso','$dpto','$instrumento',CURRENT_DATE(),NULL,1)";
    $insert = mysqli_query($conn, $sql);
}
mysqli_close($conn);
header("Location: ../agregardocente.php");
?>