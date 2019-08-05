<?php
   include '../../funciones/traerdatos.php';
   include 'template/header.php';
   include '../../funciones/get_provincia.php';

?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"  aria-current="page"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item active"  aria-current="page">Perfil</li>
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
                <div id="form_body"> 
                        <form action="../../funciones/actualizarperfil.php" method="POST" class="well form-horizontal" id="formulario">
                            <fieldset class="border p-2 m-2">
                                <legend id="legend-form">Datos Personales</legend>
                                <div class="form-row">
                                    <?php
                                        while ($row=mysqli_fetch_array($consulta2))
                                        {
                                    ?>
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                                <input  name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>"  class="form-control col-md-11 m-0"  type="text" readonly="readonly" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">                                        
                                                <span class="input-group-text m-0" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                                <input name="apellido" id="apellido" value="<?php echo $row['apellido']; ?>"  class="form-control col-md-11 m-0"  type="text" readonly="readonly" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0"><i class="fas fa-envelope"></i></span>
                                                <input id="mail" name="mail" placeholder="<?php echo $row['mail']; ?>"  class="form-control col-md-11 m-0"  type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0"><i class="fas fa-calendar-alt"></i></span>
                                                <input id="fecha_nac" name="fecha_nac"  value="<?php echo $row['fecha_nacimiento']; ?>" class="form-control col-md-11 m-0"  type="date" readonly="readonly" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0"><i class="fas fa-user"></i></span>
                                                <input id="dni" name="dni"   value="<?php echo $row['DNI']; ?>" class="form-control col-md-11 m-0"  type="text" readonly="readonly" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0"><i class="fas fa-phone"></i></span>
                                                <input id="telefono" name="telefono"   placeholder="<?php echo $row['telefono']; ?>" class="form-control col-md-11 m-0" type="tel" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text m-0"><i class="fas fa-city"></i></span>
                                                <select name="cbx_provincia" id="cbx_provincia" class="form-control col-md-11 m-0"  placeholder="<?php echo $row['provincia']; ?>" required>
                                                        <option selected disabled><?php echo $row['provincia']; ?></option>
                                                        <?php
                                                            while($fila = mysqli_fetch_assoc($consulta)){
                                                        ?>
                                                        <option value="<?php echo $fila['provincia_nombre']; ?>"><?php echo $fila['provincia_nombre'];?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                        </div>       
                                    </div>
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">        
                                                <span id="icono_ocultar" class="input-group-text m-0"><i class="fas fa-city"></i></span>
                                                <input id="cbx_ciudad" name="cbx_ciudad"  class="form-control  col-md-11 m-0" type="text" placeholder="<?php echo $row['ciudad']; ?>" required>  
                                            </div>
                                        </div>    
                                    </div>        
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                                <input id="direccion" name="direccion" type="text" class="form-control  col-md-11 m-0" id="validationDefault01"  placeholder="<?php echo $row['direccion']; ?>" required>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-3 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span id="icono_ocultar" class="input-group-text"><i class="fas fa-home"></i></span>
                                                <input id="piso" name="piso" type="text" class="form-control col-md-0 m-0" id="validationDefault01" placeholder="<?php echo $row['piso']; ?>"  >   
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-3 mb-3">                                    
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group-prepend">
                                                <span id="icono_ocultar" class="input-group-text"><i class="fas fa-home"></i></span>
                                                <input id="dpto" name="dpto" type="text" class="form-control col-md-0 m-0" id="validationDefault01" placeholder="<?php echo $row['dpto']; ?>" > 
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <h6> * Si piensa modificar sus datos <strong>debe modificar todos los campos o ninguno</strong> *</h6>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <input type="hidden" id="tipo" value="crear">
                                        <button type='button' id="boton_enviar" class="btn btn-danger" onclick="preguntar(event)"><strong>Actualizar</strong></button>
                                    </div>
                                </div>
                                <?php
                                    }
                                    mysqli_free_result($consulta2);
                                ?>
                            
                            </fieldset>                   
                        </form>
                </div>
            </div>
        </div>
    </div>
    <script>
            function preguntar(event) {
            event.preventDefault();
            Swal.fire(
            'Genial!',
            'Perfil actualizado con éxito!',
            'success'
            ).then(function(value) {
                var form = $('#formulario');
                if (value) form.submit();
            });
            }

        </script>

<?php

   include 'template/footer.php';

?>		  
