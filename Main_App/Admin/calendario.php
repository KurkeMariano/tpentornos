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
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../js/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="../../css/styles.css" rel="stylesheet">
    <link href="../../css/calendar.css" rel="stylesheet">
  </head>
 
<?php

   include 'template/header.php';

?>	
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"  aria-current="page"><a href="index.php">Inicio</a></li>
        <li class="breadcrumb-item active"  aria-current="page">Calendario</li>
      </ol>
    </nav>
    <div class="page-content">
    	<div class="row">
        <div class="col-md-2">
          <?php

              include 'template/menu.php';

          ?>
        </div>
      <div class="col-md-9">

		  	<div class="content-box-large">
		  		<div class="panel-body">
		  			
		  				<div id='calendar'></div>
		  			
		  		</div>
		  	</div>
	  	</div>
		</div>


<?php

   include 'template/footer.php';

?>		  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>

    <script src="../../js/fullcalendar/fullcalendar.js"></script>
    <script src="../../js/fullcalendar/gcal.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/calendar.js"></script>
  </body>
</html>

