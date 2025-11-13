<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilos.css">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
  <?php 
  include("cabecera.php")
  ?>

  <div class="contenedor_botones">
    <div class="botones3 contenedor_contenidos">
      <a href="index.php">INICIO</a>
      <a href="servicios.php">SERVICIOS</a>
      <a id="contactobtn" href="contacto.php">CONTACTO</a>
    </div>
   </div>

  <div class="contenedor_banner">
    <div class="Encabezado">
      <h1 class="principal">Request now</h1>
    </div>
  </div>

  <!-- formulario -->
   <br><br><br>
    <div class="contenedor_contenidos centrar">
      <br><br><br>
      <h2 class="Titulos">Beautifully designed, print-ready massage gift certificate</h2>
      <br><br>
      <p class="info">Leave your personal data, phone, select the desirable service <br> and suitable time. Leave a request and check the email.</p>
    </div>

    <div class="contenedor-form">
  <form id="formularioj" class="form-request">
    <div class="fila">
      <div class="campo">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" placeholder="example@email.com">
      </div>
      <div class="campo">
        <label for="phone">Enter your phone:</label>
        <input type="tel" id="phone" placeholder="(123) 456-7890">
      </div>
    </div>

    <div class="fila">
      <div class="campo">
        <label for="service">Select services:</label>
        <select id="service">
          <option value="">-- Choose a service --</option>
          <option>Web Design</option>
          <option>SEO Optimization</option>
          <option>Marketing</option>
        </select>
      </div>
      <div class="campo">
        <label for="time">Select time:</label>
        <select id="time">
          <option value="">-- Choose a time --</option>
          <option>Morning</option>
          <option>Afternoon</option>
          <option>Evening</option>
        </select>
      </div>
    </div>
    <button type="button" id="validar">Leave a Request</button>
  </form>
</div>

<?php 
include("pie.php")
?>
</body>
</html>

<script>
$(document).ready(function() {
  $("#validar").click(function() {
    const email = $("#email").val().trim();
    const phone = $("#phone").val().trim();
    const service = $("#service").val();
    const time = $("#time").val();

    if (email === "") {
      alert("Please enter your email");
      $("#email").focus();
      return false;
    }

    if (phone === "") {
      alert("Please enter your phone number");
      $("#phone").focus();
      return false;
    }

    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
      alert("The phone number must contain exactly 10 digits");
      $("#phone").focus();
      return false;
    }

    if (service === "") {
      alert("Please select a service");
      $("#service").focus();
      return false;
    }

    if (time === "") {
      alert("Please select a time");
      $("#time").focus();
      return false;
    }

    alert("Request submitted successfully!");
    $("#formularioj").submit();
  });
});
</script>
