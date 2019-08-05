<?php

    include 'template/header.php';

?>
<body>
   <?php

    include 'template/menu.php';

    ?>
   
    <div id="contenedorhistoria"> 
    

        <div id="historia" class="rounded border border-info">
            <h2>Sobre la Escuela</h2>
            <br>
            <p class="text-justify">La instituci&oacuten ofrece propuestas de formaci&oacuten musical en diversas especialidades, con diferentes metodolog&iacuteas y para variadas edades. 
            Los cursos se dictan entre marzo y noviembre de cada a&ntildeo. Se publican los d&iacuteas y horarios de inscripci&oacuten y cursado cuando est&aacuten vigentes.</p>
            <br>
            <p>Su misión central es formar músicos y educadores altamente capacitados, con programas que desarrollen una gran variedad de estéticas y estilos musicales y posibilitar una experiencia para niños, adolescentes, jóvenes y adultos, que aporte en cada etapa una nueva herramienta de formación artística y humanista.</p>

            <p>Asimismo la Escuela promueve la realización de un recorrido pedagógico y artístico que permita a los miembros involucrarse en la vida cultural y educacional de la comunidad teniendo en cuenta particularmente la diversidad cultural, el incentivo a la educación musical temprana y el estudio de la disciplina artística como vehículo de integración.</p>
            <br>
            <h4>Profesorado</h4>
            <br>
            <p>Esta carrera se compone de materias de contenido estrictamente musical así como de materias pedagógicas y humanísticas que son de fundamental importancia para el futuro docente. Todas las materias son de cursado obligatorio con excepción de Historia de la Música I, II.</p>

            <p>El profesorado tiene una duración de 3 años y otorga el título de Profesor de Enseñanza de Música para Nivel Primario y Secundario con carácter de habilitante aprobado por Ordenanza 3142/82 de la Municipalidad de Rosario y Resolución 613/85 del Ministerio de Educación de la provincia de Santa Fe de incumbencia en todo el territorio nacional.</p>

            <p>El cursado es de lunes a viernes, de 18 a 22 h.</p>

            <p>Duración: 3 años.</p>

            <p>Nivel: Terciario</p>

            <p>Especialidad: Profesor de Música para escuelas de nivel Inicial, EGB y Polimodal.</p>
            <br>
            <h4>Asignaturas</h4>
            <br>
            <ul>
                <li>Audioperceptiva</li>
                <li>Armonía análisis e improvisación para educadores</li>
                <li>Historia de la Música</li>
                <li>Psicopedagogía</li>
                <li>Psicología infantil</li>
                <li>Psicología del adolescente</li>
                <li>Didáctica de la música</li>
                <li>Canto</li>
                <li>Dirección Coral</li>
                <li>Folclore</li>
                <li>Flauta dulce</li>
                <li>Piano</li>
                <li>Guitarra.</li>
            </ul>
            <br>
            <h4>Requisitos para la inscripción:</h4>
            <br>
            <ul>
            <li>Estudios secundarios completos</li>
            <li>Conocimientos previos para rendir exámenes de ingreso de Teoría de la Música y nociones de Educación Audioperceptiva e instrumento (conocimientos básicos de piano o guitarra).</li>
            </ul>
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



</body>
</html>