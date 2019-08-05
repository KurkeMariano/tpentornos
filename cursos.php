<?php

    include 'template/header.php';

?>
<body style="background-image: url('img/fondos/1012732.jpg');
    background-repeat: no-repeat;
    background-size: cover;">
   <?php

    include 'template/menu.php';

    ?>

<div>

<div id="historia" class="rounded border border-info bd-example">

            <h2>Formaci&oacuten Art&iacutestica para las Industrias Culturales</h2>
            <br>
            <h3>Capacitaci&oacuten Instrumental</h3>
            <br>
            <ul>
                <li>Taller de Iniciaci&oacuten Musical (para ni&ntildeos de 5 a 8 a&ntildeos, arancelado: $200 por mes).</li>
                <li>Curso M&eacutetodo Suzuki (para ni&ntildeos de 5 a 7, capacitaci&oacuten en el uso del piano, guitarra, viol&iacuten y violoncello, arancelado: $200 por mes).</li>
                <li>Ciclo de Capacitaci&oacuten instrumental (especialidades instrumentales: flauta, fagot, clarinete, saxof&oacuten, trompeta, viol&iacuten, viola, violoncello, contrabajo, bajo el&eacutectrico, bandone&oacuten, bater&iacutea, piano, teclados, guitarra cl&aacutesica, guitarra el&eacutectrica, canto y repertorio, para mujeres de 16 a 40 a&ntildeos y hombres de 18 a&ntildeos a 42 a&ntildeos. Costo: $200 por mes).</li>
            </ul>
            
            <br>
            <h2>Experiencia Suzuki en Rosario</h2>
            <br>
            <p class="text-justify">El M&eacutetodo Suzuki o de la Lengua Materna es un m&eacutetodo de ense&ntildeanza musical pensado para los m&aacutes peque&ntildeos y basado en los principios generales del aprendizaje de la lengua nativa. Desde sus primeros a&ntildeos el ni&ntildeo puede aprender a tocar un instrumento en un clima similar al que necesita para comenzar a hablar.</p>
            <p class="text-justify">La Escuela Municipal de M&uacutesica incorpor&oacute en el a&ntildeo 1999 este M&eacutetodo a trav&eacutes del Curso Suzuki de Guitarra, que comenz&oacute a funcionar con un grupo de 12 alumnos de 4, 5 y 6 a&ntildeos. Luego se extendi&oacute la propuesta, incorporando el Curso Suzuki de Piano y el de viol&iacuten.</p>
            <p class="text-justify">Entre las actividades organizadas por los cursos Suzuki se encuentra el Festival Internacional Suzuki de Rosario el cual abarca distintas actividades vinculadas a este m&eacutetodo de aprendizaje musical, entre las que se destacan cursos de capacitaci&oacuten para docentes, conciertos, encuentros de docentes y de alumnos y clases magistrales y grupales.</p>
            
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