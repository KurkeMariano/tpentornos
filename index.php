<?php
   include 'template/header.php';
   
   ?>
<body>
   <?php
      include 'template/menu.php';
      
      ?>
   <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#demo" data-slide-to="0" class="active"></li>
         <li data-target="#demo" data-slide-to="1"></li>
         <li data-target="#demo" data-slide-to="2"></li>
      </ol>
      <!-- The slideshow -->
      <div class="carousel-inner" role="listbox">
         <div class="carousel-item active" id="img_carousel">
            <img class="d-block img-fluid" src="img/fondos/108181.jpg" alt="Los Angeles">
            <div class="carousel-caption d-md-block">
            </div>
         </div>
         <div class="carousel-item" id="img_carousel2">
            <img class="d-block img-fluid" src="img/fondos/672539.jpg" alt="Chicago">
            <div class="carousel-caption d-md-block">
            </div>
         </div>
         <div class="carousel-item" id="img_carousel3">
            <img class="d-block img-fluid" src="img/fondos/753999.jpg" alt="New York">
            <div class="carousel-caption d-md-block">
            </div>
         </div>
      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev" role="button">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next" role="button">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
   </div>
   <?php
      include 'template/footer.php';
      
      ?>
</body>
</html>