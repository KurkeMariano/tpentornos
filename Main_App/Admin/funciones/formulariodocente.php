<?php
    include 'get_provincia.php';
    include 'get_instrumento.php';

?>


<body>
<script src="../../js/jquery-3.4.1.min.js"> </script>
            <div class="col-12">
                <div id="form_body"> 
                    <form action="funciones/nuevodocente.php" method="POST" class="well form-horizontal" id="formulario">
                        <fieldset class="border p-2 m-2">
                            <legend id="legend-form">Datos Personales</legend>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                            <input  name="nombre" id="nombre" placeholder="Nombre" required class="form-control col-md-11 m-0"  type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                     
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">                                        
                                            <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                            <input name="apellido" id="apellido" placeholder="Apellido" required class="form-control col-md-11 m-0"  type="text">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-envelope"></i></span>
                                            <input id="mail" name="email" placeholder="E-Mail" required class="form-control col-md-11 m-0"  type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-calendar-alt"></i></span>
                                            <input id="fecha_nac "name="fecha_nac" required placeholder="Fecha de Nacimiento" class="form-control col-md-11 m-0"  type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-user"></i></span>
                                            <input id="dni" name="dni" minlength="8"  required placeholder="DNI" class="form-control col-md-11 m-0"  type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-phone"></i></span>
                                            <input id="telefono" name="telefono"  required placeholder="(11- )  2 - 789587" class="form-control col-md-11 m-0" type="tel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0"><i class="fas fa-city"></i></span>
                                            <select name="cbx_provincia" id="cbx_provincia" class="form-control col-md-11 m-0" required>
											        <option selected disabled>Provincia...</option>
                                                    <?php
                                                        while($fila = mysqli_fetch_assoc($consulta)){
                                                    ?>
                                                    <option value="<?php echo $fila['provincia_nombre']; ?>"><?php echo $fila['provincia_nombre']; ?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>       
                                </div>
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">        
                                            <span id="icono_ocultar" class="input-group-text m-0"><i class="fas fa-city"></i></span>
											<input id="cbx_ciudad" name="cbx_ciudad" required class="form-control  col-md-11 m-0" type="text" placeholder="Ciudad...">       
                                        </div>
                                    </div>    
                                </div>        
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            <input id="direccion" name="direccion" type="text" class="form-control  col-md-11 m-0" id="validationDefault01" required placeholder="Ej: Zeballos 1824">
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-3 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span id="icono_ocultar" class="input-group-text"><i class="fas fa-home"></i></span>
                                            <input id="piso" name="piso" type="text" class="form-control col-md-0 m-0" id="validationDefault01" placeholder="Piso, EJ: 8"  >
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-3 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span id="icono_ocultar" class="input-group-text"><i class="fas fa-home"></i></span>
                                            <input id="dpto" name="dpto" type="text" class="form-control col-md-0 m-0" id="validationDefault01" placeholder="Dpto, EJ: D" >
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                            <br>
                            <fieldset class="border p-2 m-2"> 
                            <legend id="legend-form"><br>Datos Inscripcion</legend>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">                                    
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-guitar"></i></span>                                      
                                            <select id="instrumento" name="instrumento" class="form-control input-group-text m-0 m-0" required>
                                            <option selected disabled>Instrumento...</option>
                                                <?php
                                                    while($fila = mysqli_fetch_assoc($consultains)){
                                                ?>
                                                <option value="<?php echo $fila['instrumento'] ?>"><?php echo $fila['instrumento'] ?></option>
                                                <?php } ?>                    
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </fieldset>                           
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
            'Docente añadido con éxito!',
            'success'
            ).then(function(value) {
                var form = $('#formulario');
                if (value) form.submit();
            });
            }

        </script>

    </body>
</html>