<?php
session_start();
if(!isset($_SESSION['tipo_usuario'])) {
    header("Location: ../../sesion.php");
    exit;
}
elseif($_SESSION['tipo_usuario'] == 0){
   //header("Location: ../Admin/index.php");
}
elseif ($_SESSION['tipo_usuario'] == 1){
   header("Location: ../Alumno/index.php");
} elseif ($_SESSION['tipo_usuario'] == 2){
   header("Location: ../Docente/index.php");
} 
else{
   echo "Error infernal";
}
?>

<?php
   include 'template/header.php';

   
   ?>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"  aria-current="page">Inicio</li>
   </ol>
</nav>
<div class="page-content">
   <div class="row">
      <div class="col-md-2">
         <?php
            include 'template/menu.php';
            
            ?>
      </div>
      <h1>Bienvenido <?php echo (ucwords($_SESSION['apellido'] . ", " . $_SESSION['nombre']))?>!</h1>
   </div>
</div>
<?php
   include 'template/footer.php';
   
   ?>		  
<script>
   const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
   
    Toast.fire({
      type: 'success',
      title: 'Logueado Correctamente!'
    })
                
</script>