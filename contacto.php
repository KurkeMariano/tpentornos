<?php

    include 'template/header.php';

?>
<body style="background-image: url('img/fondos/845892.jpg');
    background-repeat: no-repeat;
    background-size: cover;">
   <?php

    include 'template/menu.php';

    ?>

<script src="js/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="css/sweetalert2.min.css">
<div id="contacto" style="margin-bottom: 80px;">

    <div id="contact_box">
        <div id="contact_form">
            <form action="funciones/contact.php" id="form1" name="form1" method="POST">
                <h2 id="titulo_consulta">Dejanos tu consulta</h2>
                <h4 id="tipo_consulta">Nombre: </h4>
                <input type="text" name="name" id="name" required placeholder="Ingrese su Nombre" onfocus="if(this.placeholder='') this.placeholder='Ingrese su nombre'">
                <h4 id="tipo_consulta">Email: </h4>
                <input type="email" name="email" id="email" required placeholder="Ingrese su Email" onfocus="if(this.placeholder='') this.placeholder='Ingrese su Email'">
                <h4 id="tipo_consulta">Tipo de consulta: </h4>
                <select name="tipo_consulta" id="tipo_consulta">
                    <option value="" disabled selected>-- Seleccione motivo de consulta --</option>
                    <option value="administrativo">Administrativo</option>
                    <option value="inscripcion">Inscripcion</option>
                    <option value="horarios">Horarios</option>
                </select>
                <h4 id="tipo_consulta">Consulta: </h4>
                <textarea name="message" id="message" required minlength="10" rows="10" cols="50" placeholder="Ingrese su Mensaje" onfocus="if(this.placeholder='') this.placeholder='Ingrese su mensaje'"></textarea>
                <input type="reset" name="submit" id="button" value="LIMPIAR" class="btn btn-dark btn-lg">
                <input type="submit" name="submit" id="button" value="ENVIAR" class="btn btn-dark btn-lg">
            </form>

        </div>
        <div id="contact_img" class="img-responsive">
        <div id="contactomapa">
            <div class="flex-container">
                <div id="mapa" class="flex-item">
                    <iframe id="escuela" width="100%" data-zoom="false" frameborder="0" height="auto" src="https://www.rosario.gob.ar/utilsjs/mapas/mapa.html?id_lugar=850&amp;nivelZoom=8&amp;sin_info=true"></iframe>
                    <iframe id="google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.932083503734!2d-60.658011684276744!3d-32.95280247953105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab6c75b895f7%3A0x492bfb23262fcf35!2sBv.+Oro%C3%B1o+1540%2C+S2000DTP+Rosario%2C+Santa+Fe!5e0!3m2!1ses-419!2sar!4v1560485960905!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div id="como-llego" class="flex-item">
                    <div id="contenedormapa">
                        <a class="colorbox-load init-colorbox-load-processed cboxElement" href="https://www.rosario.gob.ar/utilsjs/mapas/mapa.html?id_lugar=850&amp;nivelZoom=8&amp;controles=true&amp;width=900&amp;height=600&amp;rel=850&amp;iframe=true" target=_blank title="Escuela Municipal de Música " j.="" b.="" massa""="">
                        <i class="fas fa-map-marker" alt="Ver mapa">Ver Mapa</i>
                        </a>
                    </div>
                </div>
                <div id="detalle" class="flex-item" style="color:white;">
                    <p class="title">
                        <b>Escuela Municipal de Música "J. B. Massa"</b>
                    </p>
                    <p class="contacto">OROÑO NICASIO 1540<br>4802537</p>
                        <ul class="social">

                        </ul>
                        <p></p>
                        <p class="atencion">Lunes a viernes de 08:00 a 21:00</p>
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
        alertSize();
        function alertSize() { 
            var myWidth = 0, myHeight = 0; 
            if( typeof( window.innerWidth ) == 'number' ) { 
                //No-IE 
                myWidth = window.innerWidth; 
                myHeight = window.innerHeight; 
            } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) { 
                //IE 6+ 
                myWidth = document.documentElement.clientWidth; 
                myHeight = document.documentElement.clientHeight; 
            } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) { 
                //IE 4 compatible 
                myWidth = document.body.clientWidth; 
                myHeight = document.body.clientHeight; 
            } 
            var display;
            var card_menu = document.getElementById("card_menu");
            display = card_menu.style.display;
            if(myWidth < 767){
                card_menu.style.display = "none";
            }
            else{
                card_menu.style.display = "block"
            }
        } 
        function displayMenu(){
            var display;
            var card_menu = document.getElementById("card_menu");
            display = card_menu.style.display;

            if(display == "none"){
                card_menu.style.display = "block"
            }
            else{
                card_menu.style.display = "none";
            }
        }
    </script>
    <script>
        document.getElementById('status').innerHTML = "Sending...";
        formData = {
        'name'     : $('input[name=name]').val(),
        'email'    : $('input[name=email]').val(),
        'tipo_consulta'  : $('input[name=tipo_consulta]').val(),
        'message'  : $('textarea[name=message]').val()
        };


        $.ajax({
        url : "funciones/contact.php",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
        $('#form1').closest('form').find("input[type=text], textarea").val("");
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
        $('#status').text(jqXHR);
        }
        });
    </script>
<script>
                $("#submit").click(function(){
                    swal({
                        title: "OK!",
                        text: "El mensaje ha sido enviado correctamente!",
                        type: "success",
                        confirmButtonText: "Cerrar",
                        claseOnConfirm: false},
                        
                        function(isConfirm){
                            if (isConfirm){
                                window.location = "contacto.php";
                        });
                });
                
    </script>

</body>
</html>