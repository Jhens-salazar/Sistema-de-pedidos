<!DOCTYPE html>
<html lang="en">
<?php
include('../registro/conexion.php');
session_start();
$varsesion = $_SESSION['id_usuario'];
$name = $_SESSION['username'];
if (!isset($varsesion)) {
    header('location:../login.php');
}

$consulta = "SELECT * FROM usuarios WHERE IDusuario = '$varsesion'";
$ejecuta = $conn->query($consulta);
$row = $ejecuta->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../Estilos/index_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body id="index_admin" >
<header class="header_pagpi">
  <article class="logo_user">
  <img class="logo" src="../imagenes/logo4.png" alt="">
  </article>

  <div class="menu1">
    <nav class="menu">
        <ul class="ul" >
            <li class="li" ><a class="a" href="../pagina_principal/pag_admin.php">Inicio</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/rsu_pedidos.php">Pedidos</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/rsu_cotiza.php">Cotizaciónes</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/tienda.php">Tienda</a></li>
            <li class="li" ><a class="a" href="../perfil.php">Perfil</a></li>
        </ul>
</nav>
<h1 class="saludo" >Bienvenido <?php echo"$name" ?></h1>
</div>

</header>
    
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







</script>

<footer class="footer_inicio" >
    <h4>Copyright© Carpinteria los borugos</h4>
    <h4>Florencia-Caqueta</h4>
    <h4>3124263009</h4>
    
</footer>
</body>

</html>





 



