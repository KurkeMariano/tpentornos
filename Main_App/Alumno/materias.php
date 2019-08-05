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
   //header("Location: ../Alumno/index.php");
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
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
    	<?php

            include 'template/menu.php';

        ?>
	</div>
        
    <?php
        include 'funciones/traermaterias.php';
    ?>

    <legend id="legend-form">Materias</legend>
        <div class="form-row">
            <div class="col-md-6 mb-3">                 
                

                <div>
                    <div class="table-responsive-sm  border p-2 m-2">
                        <table class="table table-hover table-striped table-dark table-responsive" id="tabla">
                            <thead  class="thead-dark ">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Profesor</th>
                                    <th scope="col">Dias</th>
                                    <th scope="col">Horario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <?php
                            while ($fila=mysqli_fetch_array($consulta))
                            {
                            ?>
                            <tr>
                                <td><?php echo ($fila['materia']);?></td>
                                <td><?php echo ($fila['profesor']);?></td>
                                <td><?php echo ($fila['dias']);?></td>
                                <td><?php echo ($fila['horario']);?></td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span><i class="fas fa-plus-square"></i></span></button>
                                            <button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span><i class="fas fa-trash"></i></span></button>
                                        </div>
                                        <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Guardar</button>
                                        <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="float: none; display: none;">Confirmar</button>
                                        <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="float: none; display: none;">Restaurar</button>
                                    </div>
                                </td>
                            </tr>
                            

                            <?php

                            }
                                mysqli_free_result($consulta);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

<?php

   include 'template/footer.php';

?>		  

<script>
$('#tabla').Tabledit({
    url: 'edit.php',
    columns: {
        identifier: [0, 'dni'],
        editable: [[1, 'apellido'], [2, 'nombre'],[3, 'mail'],[4, 'fecha_nacimiento'],[5, 'telefono'],[6, 'instrumento', '{"1": "Guitarra", "2": "Bateria", "3": "Piano"}']]
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