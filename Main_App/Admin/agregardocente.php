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
        <li class="breadcrumb-item"  aria-current="page"><a href="index.php">Inicio</a></li>
        <li class="breadcrumb-item active"  aria-current="page">Docente</li>
        <li class="breadcrumb-item active"  aria-current="page">Nuevo Docente</li>
      </ol>
    </nav>
    <div class="page-content">
    	<div class="row">
		    <div class="col-md-2">
          <?php

                include 'template/menu.php';

            ?>
	      </div>
        <div class="col-md-8">
          <?php
              include 'funciones/formulariodocente.php';
          ?>
        </div>
      </div>
    </div>

<?php

   include 'template/footer.php';

?>		  
