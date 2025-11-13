<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilos.css">
  <title>Document</title>
</head>
<body>

<!-- Cabecera -->
  <?php
  include("cabecera.php")
  ?>

  <!-- Cabecera-Botones -->
   <div class="contenedor_botones">
    <div class="botones contenedor_contenidos">
      <a href="index.php">INICIO</a>
      <a href="servicios.php">SERVICIOS</a>
      <a href="contacto.php">CONTACTO</a>
    </div>
   </div>

   <!-- Contenedor Imagen -->
    <div class="contenedor_imagen">
      <div class="contenedor_contenidos publi">
        <h2 class="slide_principal">Relaxation</h2>
        <br>
        <p id="come">Come to us right now</p>
        <br><br>

        <div class="btn_book">
          <a href="#">Book now</a>
        </div>
      </div>
    </div>

    <br><br><br><br><br><br>
    <!-- Seccion tarjetas -->
     <div class="contenedor_contenidos">
      <h1> Plunge into the world of <br> Relaxation whit us</h1>
      <br>
      <div class="invitacion">
      <p>we invite you to visit the spa paradise and feel the power of Relaxation <br> The unique experts will do their best for you</p>
      </div>
     </div>

     <br><br><br>

     <!-- contenido tarjetas -->
    <div class="contenedor_tarjetas">
      <!-- tarjeta1 -->
      <div class="tarjeta1">
        <div class="foto1">
          <img id="entrada" src="imagenes/foto1.jpg" alt="">
        </div>

        <br>
        <h2 class="sub_trjt">High-quality services</h2>
        <br>
        <p class="text_trjt">The best receptionists will put you through the <br> world of potitenes, profesionalism, deep <br> calmess and High-quality services.</p>
      </div>

      <!-- tarjeta2 -->
      <div class="tarjeta2">
        <div class="foto2">
          <img id="masaje" src="imagenes/foto2.jpg" alt="">
        </div>

        <br>
        <h2 class="sub_trjt">Paradise atmosphere</h2>
        <br>
        <p class="text_trjt">Feel the wonderfull atmosphere of beauty, <br> Pleasant colors, tasty aromas and feel free to <br> have a relax.</p>
    </div>

    <!-- tarjeta3 -->
      <div class="tarjeta3">
        <div class="foto3">
          <img id="terapia" src="imagenes/foto3.jpg" alt="">
        </div>

        <br>
        <h2 class="sub_trjt">Massage to any taste</h2>
        <br>
        <p class="text_trjt">Get the qualified treatment in a most <br> preferable way. Trust our experts and <br> experience the best massage.</p>
      </div>
    </div>

    <br><br><br><br><br>


    <!-- Footer -->
  <?php 
  include("pie.php")
  ?>
</body>
</html>