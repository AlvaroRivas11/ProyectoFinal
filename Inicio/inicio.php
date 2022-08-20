<?php  
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
        alert("Por favor debes iniciar sesión");
        window.location = "login.php";
        </script>';
        session_destroy();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
  />
    <link rel="stylesheet" href="estilosI.css">
</head>
<body>
<a href="inicio.php"><div class="logo"> <img src="../Imagenes/Logo.jpg" alt="" width="300px" height="100px"> </div> </a>
    <nav>
        <div class="menu"> <a href="../Calculadora/calculadora.html"> CALCULADORA </a> </div>
        <div class="menu"> <a href="../Areas/index.html"> AREAS </a> </div>
        <div class="menu"> <a href="../Sugerencias/index.html"> SUGERENCIAS </a> </div>
        <div class="menu"> <a href="../php/cerrar_sesion.php"> CERRAR SESION </a> </div>
    </nav>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"> <img src="../Imagenes/Img1.jpg" alt=""></div>
          <div class="swiper-slide"> <img src="../Imagenes/img2.jpg" alt=""></div>
          <div class="swiper-slide"> <img src="../Imagenes/img3.jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="javaI.js"></script>
</body>
</html>