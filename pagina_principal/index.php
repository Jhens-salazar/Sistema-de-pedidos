<?php
include('../registro/conexion.php');
session_start();
$varsesion = $_SESSION['id_usuario'];
$name = $_SESSION['username'];
if (!isset($varsesion)) {
    header('location:../login.php');
}

$consulta = "SELECT * FROM usuarios WHERE IDusuario= '$varsesion'";
$ejecuta = $conn->query($consulta);
$row = $ejecuta->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://kit.fontawesome.com/c3860b92ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Estilos/index_user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    
</head>

<body id="inicio_user" >
  
<header class="header_pagpi">
  <article class="logo_user">
  <img class="logo" src="../imagenes/logo4.png" alt="">
  </article>
    
  <div class="menu1">
  <nav class="menu">
  <ul class="ul">
    <li class="li"><a class="a" href="../pagina_principal/index.php"><i class="fa-solid fa-house"></i>Inicio</a></li>
    <li class="li"><a class="a" href="../pagina_principal/realizapedido.php"><i class="fa-regular fa-address-book"></i>Realiza tu pedido</a></li>
    <li class="li"><a class="a" href="../pagina_principal/cotizacion.php"><i class="fa-solid fa-clipboard"></i>Cotización</a></li>
    <li class="li"><a class="a" href="../pagina_principal/tienda.php"><i class="fa-solid fa-shop"></i>Tienda</a></li>
    <li class="li perfil"><a class="a" href="#"><i class="fa-solid fa-user"></i>Perfil</a>
      <ul class="submenu">
        <li><a href="#">Cambiar contraseña</a></li>
        <li><a href="#">Ver pedidos</a></li>
        <li><a href="#">Ver cotizaciones</a></li>
        <li><a href="../cerrar.php">Cerrar sesión</a></li>
      </ul>
    </li>
  </ul>
</nav>

</div>
    
</header>

<section class="principal" >

<h1 class="hac" >Inicio</h1>

<div class="container">
  
  <ul class="slider">
    <li id="slide1">
      <img src="../imagenes/armarios.png"/>
    </li>

    <li id="slide2">
      <img src="../imagenes/casaanimales.png"/>
    </li>
    <li id="slide3">
        <img src="../imagenes/cocinas.png" alt="">
    </li>
    <li id="slide4">
      <img src="../imagenes/mesasillas.png" alt="">
    </li>
    <li id="slide5">
      <img src="../imagenes/setups.png"/>
    </li>
  </ul>
  
  
</div>
</section>

<h1 class="muroh" >Muro Muebles Fabricados</h1>
<div class="containertwo">

<section class="fabricaciones">
<div class="image-gallery">
  <img src="../imagenes/Armario1.jpg" alt="Producto" id="main-image">
  <div class="thumbnail-images">
    <img src="../imagenes/Armario1.jpg" alt="Producto" class="thumbnail active">
    <img src="../imagenes/armario2.jpg" alt="Producto" class="thumbnail">
    <img src="../imagenes/armario3.jpg" alt="Producto" class="thumbnail">
  </div>
</div>

  <section class="acciones">

  </section>
</section>

<section class="fabricaciones">
<div class="image-gallery">
  <img src="../imagenes/Armario1.jpg" alt="Producto" id="main-image">
  <div class="thumbnail-images">
    <img src="../imagenes/Armario1.jpg" alt="Producto" class="thumbnail active">
    <img src="../imagenes/armario2.jpg" alt="Producto" class="thumbnail">
    <img src="../imagenes/armario3.jpg" alt="Producto" class="thumbnail">
  </div>
</section>
<section class="fabricaciones">
<div class="image-gallery">
  <img src="../imagenes/Armario1.jpg" alt="Producto" id="main-image">
  <div class="thumbnail-images">
    <img src="../imagenes/nochero1.jpg" alt="Producto" class="thumbnail active">
    <img src="../imagenes/nochero2.jpg" alt="Producto" class="thumbnail">
    <img src="../imagenes/nochero3.jpg" alt="Producto" class="thumbnail">
  </div>
</section>
<section class="fabricaciones">
<div class="image-gallery">
  <img src="../imagenes/Armario1.jpg" alt="Producto" id="main-image">
  <div class="thumbnail-images">
    <img src="../imagenes/Armario1.jpg" alt="Producto" class="thumbnail active">
    <img src="../imagenes/armario2.jpg" alt="Producto" class="thumbnail">
    <img src="../imagenes/armario3.jpg" alt="Producto" class="thumbnail">
  </div>
</section>
</div>


<script>
    // Selecciona el slider y los elementos de las diapositivas
    var slider = document.querySelector('.slider');
    var slides = slider.getElementsByTagName('li');
    var currentSlide = 0;
  
    // Función para mostrar la siguiente diapositiva
    function showNextSlide() {
      slides[currentSlide].style.opacity = 0; // Oculta la diapositiva actual
      currentSlide = (currentSlide + 1) % slides.length; // Actualiza el índice de la diapositiva
      slides[currentSlide].style.opacity = 1; // Muestra la siguiente diapositiva
    }
  
    // Configura el intervalo para cambiar las diapositivas automáticamente cada 5 segundos
    setInterval(showNextSlide, 5000);
  </script>

<footer class="index_foo" >
    <section class="separador_footer">
    <i class="fa-solid fa-copyright"></i>
    <h4>Copyright© Carpinteria los borugos</h4>
    </section>
    <section class="separador_footer">
    <i class="fa-solid fa-location-dot"></i>
    <h4>Florencia-Caqueta</h4>
    </section>
    <section class="separador_footer">
    <i class="fa-solid fa-phone"></i>
    <h4>3124263009</h4>
    </section>
    


    
</footer>
<script src=".../Js/galeria.js"></script>
    <script src="../Js/menu.js"></script>
</body>
</html>