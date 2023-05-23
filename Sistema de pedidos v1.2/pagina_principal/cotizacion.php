<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambiar al nombre de tu servidor de base de datos
$username = "root"; // Cambiar al nombre de usuario de tu base de datos
$password = ""; // Cambiar a la contraseña de tu base de datos
$dbname = "sistemadepedidos"; // Cambiar al nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
if(isset($_POST['enviar'])){
    
    // Obtener los datos del formulario de pedidos
$tipo_mueble = $_POST['tipo_mueble'];
$color = $_POST['color'];
$tipo_pintura = $_POST['tipo_pintura'];
$medidas = $_POST['medidas'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$departamento = $_POST['departamento'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];

// Insertar los datos en la tabla de pedidos
$sql = "INSERT INTO cotizaciones (tipo_mueble, color, tipo_pintura, medidas, direccion, ciudad, departamento, telefono, descripcion, imagen) VALUES ('$tipo_mueble', '$color', '$tipo_pintura', '$medidas', '$direccion', '$ciudad', '$departamento', '$telefono', '$descripcion', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "La cotizacion se registró correctamente en la base de datos";
} else {
    echo "Error al registrar la cotizacion en la base de datos: " . $conn->error;
}

}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion</title>
    <script src="https://kit.fontawesome.com/c3860b92ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Estilos/cotizacion_user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body id="cotizacion_user" >
<header class="header_pagpi">
  <article class="logo_user">
  <img class="logo" src="../imagenes/logo4.png" alt="">
  </article>
    
  <div class="menu1">
    <nav class="menu">
        <ul class="ul" >

            
            <li class="li" ><a class="a" href="../pagina_principal/index.php"><i class="fa-solid fa-house"></i>Inicio</a></li>

            
            <li class="li" ><a class="a" href="../pagina_principal/realizapedido.php"><i class="fa-regular fa-address-book"></i>Realiza tu pedido</a></li>


            <li class="li" > <a class="a" href="../pagina_principal/cotizacion.php"><i class="fa-solid fa-clipboard"></i>Cotización</a></li>


          
            <li class="li" >  <a class="a" href="../pagina_principal/tienda.php"><i class="fa-solid fa-shop"></i>Tienda</a></li>

            
            <li class="li" ><a class="a" href="../cerrar.php"><i class="fa-solid fa-user"></i>Perfil</a></li>

           
        </ul>
</nav>
</div>
    
</header>

<div class="contenedor">
<h1 class="hac" >Cotizacion</h1>

<article class="form_cotizacion">
<h1 class="re" >Cotización de Mueble</h2>

<form action="cotizacion.php" method="post" enctype="multipart/form-data" class="form_cot" >
  

<section class="sep_ped">
<section class="separadores" >
  <label for="tipo_mueble">Tipo de Mueble:</label>
  <input type="text" id="tipo_mueble" name="tipo_mueble" required>
</section>

  <section class="separadores" >
  <label for="color">Color:</label>
  <input type="text" id="color" name="color" required>
</section>
</section>

<section class="sep_ped">
<section class="separadores" >
  <label for="tipo_pintura">Tipo de Pintura:</label>
  <input type="text" id="tipo_pintura" name="tipo_pintura" required>
</section>
  <section class="separadores" >
  <label for="medidas">Medidas:</label>
  <input type="text" id="medidas" name="medidas" required>
  </section>
</section>

<section class="sep_ped">
<section class="separadores" >
  <label for="direccion">Dirección de Residencia:</label>
  <input type="text" id="direccion" name="direccion" required>
</section>
  <section class="separadores" >
  <label for="ciudad">Ciudad:</label>
  <input type="text" id="ciudad" name="ciudad" required>
</section>
</section>

<section class="sep_ped">
<section class="separadores" >
  <label for="departamento">Departamento:</label>
  <input type="text" id="departamento" name="departamento" required>
</section>
  <section class="separadores" >

  <label for="telefono">Número de Teléfono:</label>
  <input type="text" id="telefono" name="telefono" required>
</section>
</section>


<section class="sep_ped">
<section class="separadores" >
  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion"></textarea>
</section>
  <section class="separadores" >
  <label for="imagen">Imagen:</label>
  <input type="file" id="imagen" name="imagen">
</section>
</section>

<section class="sep">
  <input type="submit" name="enviar" value="Enviar Cotización" id="enviar" >
</section>
</form>
</article>
</div>




 

<footer class="cotizacion_foo" >
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
</body>
</html>