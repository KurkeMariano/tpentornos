<?php
session_start();
if(!isset($_SESSION['tipo_usuario'])) {
    header("Location: ../../sesion.php");
    exit;
}
elseif($_SESSION['tipo_usuario'] == 0){
   header("Location: ../Admin/index.php");
}
elseif ($_SESSION['tipo_usuario'] == 1){
   header("Location: ../Alumno/index.php");
} elseif ($_SESSION['tipo_usuario'] == 2){
   //header("Location: ../Docente/index.php");
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
      <li class="breadcrumb-item active"  aria-current="page">Notas</li>
      <li class="breadcrumb-item active"  aria-current="page">Editar Notas</li>
   </ol>
</nav>
<div class="page-content">
<div class="row">
   <div class="col-md-2">
      <?php
         include 'template/menu.php';
         
         ?>
   </div>
   <?php
      include 'funciones/traernotas.php';
      ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script>
      // Write on keyup event of keyword input element
      $(document).ready(function(){
      $("#search").keyup(function(){
      _this = this;
      // Show only matching TR, hide rest of them
      $.each($("#tabla tbody tr"), function() {
      if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
      $(this).hide();
      else
      $(this).show();
      });
      });
      });
   </script>
   <div class="col-md-9">
      <legend id="legend-form">Buscar Alumno</legend>
      <div>
         <div>
            <div class="col-md-12 inputGroupContainer">
               <div class="input-group-prepend m-1">
                  <span class="input-group-text m-0 col-md-0" id="inputGroup-sizing-default"><i class="fas fa-user"></i><label class="col-md-0 control-label">Buscar: </label> </span>
                  <input type="text" class="form-control col-md-0" id="search" style="width: 80%" placeholder="Ingrese lo que desea buscar...">
               </div>
            </div>
            <div class="table-responsive-sm  border p-2 m-2">
               <table class="table table-hover table-striped table-responsive" id="tabla">
                  <thead  class="thead-dark ">
                     <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nota Parcial</th>
                        <th scope="col">Nota Final</th>
                        <th scope="col"></th>
                        <th scope="col">Acciones</th>
                     </tr>
                  </thead>
                  <?php
                     while ($fila=mysqli_fetch_array($consulta))
                     {
                     ?>
                  <tr>
                     <td><?php echo ($fila['dni']);?></td>
                     <td><?php echo ($fila['apellido']);?></td>
                     <td><?php echo ($fila['nombre']);?></td>
                     <td><?php echo ($fila['mail']);?></td>
                     <td><?php echo ($fila['nota_parcial']);?></td>
                     <td><?php echo ($fila['nota_final']);?></td>
                     <td style="white-space: nowrap; width: 1%;">
                     </td>
                  </tr>
                  <?php
                     }
                         mysqli_free_result($consulta);
                     ?>
               </table>
               <nav>
                  <ul class="pagination">
                     <li class="page-item
                        <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>
                        ">
                        <a class="page-link" href="editarnotas.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                        Anterior
                        </a>
                     </li>
                     <?php for($i=0;$i<$paginas;$i++): ?>
                     <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
                        <a class="page-link" href="editarnotas.php?pagina=<?php echo $i+1 ?>">
                        <?php echo $i+1 ?>
                        </a>
                     </li>
                     <?php endfor ?>
                     <li class="page-item
                        <?php echo $_GET['pagina']>=$paginas? 'disabled' : '' ?>
                        ">
                        <a class="page-link" href="editarnotas.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                        Siguiente
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   include 'template/footer.php';
   
   ?>		  
<script src="../../js/jquery.tabledit.js"></script>
<script>
   $('#tabla').Tabledit({
       url: 'funciones/edit.php',
       columns: {
           identifier: [0, 'dni'],
           editable: [[4, 'nota_parcial'],[5, 'nota_final']]
       },
       onDraw: function() {
           console.log('onDraw()');
       },
       onSuccess: function(data, textStatus, jqXHR) {
           console.log('onSuccess(data, textStatus, jqXHR)');
           console.log(data);
           console.log(textStatus);
           console.log(jqXHR);
       },
       onFail: function(jqXHR, textStatus, errorThrown) {
           console.log('onFail(jqXHR, textStatus, errorThrown)');
           console.log(jqXHR);
           console.log(textStatus);
           console.log(errorThrown);
       },
       onAlways: function() {
           console.log('onAlways()');
       },
       onAjax: function(action, serialize) {
           console.log('onAjax(action, serialize)');
           console.log(action);
           console.log(serialize);
       }
   });
</script>