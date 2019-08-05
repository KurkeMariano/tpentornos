<?php
include 'conexion.php';
session_start();

$usuario = strtolower($_POST['usuariolg']);
$password = strtolower($_POST['passlg']);

$password = md5($password);

$sql = "select * from usuario where usuario = '$usuario' and password = '$password'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0) 
{
    $sqltipo = "select tipo_usuario, dni, nombre, apellido from usuario where usuario = '$usuario' and password = '$password'";
    $consulta = mysqli_query($conn, $sqltipo);
    while ($fila=mysqli_fetch_array($consulta)) {
        $tipo= $fila['tipo_usuario'];
        $dni= $fila['dni'];
        $nombre= $fila['nombre'];
        $apellido= $fila['apellido'];
        }
    
    $_SESSION['usuario']=$usuario;
    $_SESSION['tipo_usuario']=$tipo;
    $_SESSION['dni']=$dni;
    $_SESSION['nombre']=$nombre;
    $_SESSION['apellido']=$apellido;
    if($_SESSION['tipo_usuario'] == 0){
        header("Location: ../Main_App/Admin/index.php");
    }
    elseif ($_SESSION['tipo_usuario'] == 1){
        header("Location: ../Main_App/Alumno/index.php");
    } elseif ($_SESSION['tipo_usuario'] == 2){
        header("Location: ../Main_App/Docente/index.php");
    } 
    else{
        echo "Error infernal";
    }
 
    
} else {
    ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="../js/jquery-3.4.1.min.js"> </script>
      <script src="../js/sweetalert2.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      
<?php
    echo '<script>
    
         alert("Este usario no existe")
        ;</script>';}
        header("Refresh:0; url=../sesion.php");
?>
   

