<?php
    include 'get_docente.php';
    include 'get_instrumento.php';

?>

<body>
            <div class="col-12">
                <div id="form_body"> 
                    <form action="funciones/nuevocurso.php" method="POST" class="well form-horizontal" id="formulario">
                        <fieldset class="border p-2 m-2">
                            <legend id="legend-form">Datos Materia</legend>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0"><i class="fas fa-user"></i></span>
                                                <input id="id_materia" name="id_materia" onkeypress="return justNumbers(event);"  required placeholder="ID Materia" class="form-control col-md-11 m-0"  type="text">
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-folder"></i></span>
                                                <input  name="materia" id="materia" placeholder="Materia" required class="form-control col-md-11 m-0"  type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                     
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">                                        
                                            <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-info-circle"></i></span>
                                            <select id="id_año" name="id_año" class="form-control input-group-text m-11 m-0" required>
                                                <option selected disabled>Año Cursado </option>
                                                <option value="1">Primero</option>
                                                <option value="2">Segundo</option>
                                                <option value="3">Tercero</option>
                                                <option value="4">Cuarto</option>
                                                <option value="5">Quinto</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-sun"></i></span>
                                            <select id="turno" name="turno" class="form-control input-group-text m-11 m-0" required>
                                                <option selected disabled>Turno </option>
                                                <option value="M">Mañana</option>
                                                <option value="T">Tarde</option>
                                                <option value="N">Noche</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-calendar-day"></i></span>
                                            <select id="dias" name="dias" class="form-control input-group-text m-11 m-0" required>
                                                <option selected disabled>Dias</option>
                                                <option value="Lun y Mar">Lunes y Martes</option>
                                                <option value="Lun y Vier">Lunes y Viernes</option>
                                                <option value="Mar y Jue">Martes y Jueves</option>
                                                <option value="Mier y Vier">Miercoles y Viernes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-clock"></i></span>
                                            <input id="horario" name="horario" type="time" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-chalkboard-teacher"></i></span>
                                            <select name="cbx_docente" id="cbx_docente" class="form-control col-md-11 m-0" required;>
											        <option selected disabled>Profesor...</option>
                                                    <?php
                                                        while($fila = mysqli_fetch_assoc($consulta)){
                                                    ?>
                                                    <option value="<?php echo $fila['apellido'],', ',$fila['nombre']; ?>"><?php echo $fila['apellido'],', ',$fila['nombre']; ?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>       
                                </div> 
                            <div class="col-md-6 mb-3">
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-city"></i></span>
                                            <input id="salon" name="salon" type="text" class="form-control" placeholder="Salon">
                                        </div>
                                    </div>
                                </div>
                            <br>                  
                            <br>  
                            
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <input type="hidden" id="tipo" value="crear">
                                    <button type='button' id="boton_enviar" class="btn btn-danger" onclick="preguntar(event)"><strong>Enviar</strong></button>
                                </div>
                            </div>
                            
                            
                        </fieldset>                   
                    </form>
                </div>
            </div>
    

        <script src="../../js/jquery-3.4.1.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="../../js/bootstrap.min.js"></script>  
        <script>function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }</script>
		<script>
            function preguntar(event) {
            event.preventDefault();
            Swal.fire(
            'Genial!',
            'Curso añadido con éxito!',
            'success'
            ).then(function(value) {
                var form = $('#formulario');
                if (value) form.submit();
            });
            }

        </script>
    
    </body>
</html>