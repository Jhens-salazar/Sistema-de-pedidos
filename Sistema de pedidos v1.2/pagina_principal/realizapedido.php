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
// $imagen = $_POST['imagen'];

// Insertar los datos en la tabla de pedidos
 $sql = "INSERT INTO pedidos (tipo_mueble, color, tipo_pintura, medidas, direccion, ciudad, departamento, telefono, descripcion, imagen) VALUES ('$tipo_mueble', '$color', '$tipo_pintura', '$medidas', '$direccion', '$ciudad', '$departamento', '$telefono', '$descripcion', )";

if ($conn->query($sql) === TRUE) {
    echo "<script>Swal.fire('Se ha guardado el pedido con exito')</script>";
} else {
    echo "<script>Swal.fire('Error al completar el pedido')</script>";
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
    <title>Realizar pedido</title>
    <link rel="stylesheet" href="../Estilos/realiza_pedido.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/c3860b92ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body id="realiza_pedidos" >
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
<h1 class="hac" >Realiza tu pedido</h1>

<article class="form_fab">
<h1 class="re" >Formulario de Pedido de Fabricación de Mueble</h1>

  <form  action="" method="POST" enctype="multipart/form-data" class="form_fbri" >
  
  <section class="sep_ped">
<section class="separadores" >
  <label for="tipo_mueble">Tipo de mueble:</label>
  <input  type="text" id="tipo_mueble" name="tipo_mueble" required>
  </section>
  <section class="separadores" >
  <label for="color">Color:</label>
  <input type="text" id="color" name="color" required>
  </section>
  </section>

  <section class="sep_ped">
  <section class="separadores" >
  <label for="tipo_pintura">Tipo de pintura:</label>
  <input type="text" id="tipo_pintura" name="tipo_pintura" required>
  </section>
  <section class="separadores" >
  <label for="medidas">Medidas:</label>
  <input type="text" id="medidas" name="medidas" required>
  </section>
  </section>

  <section class="sep_ped">
  <section class="separadores" >
  <label for="direccion">Dirección de residencia:</label>
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
  <label for="telefono">Número de teléfono:</label>
  <input type="text" id="telefono" name="telefono" required>
  </section>
  </section>
  <section class="sep_ped">
  <section class="separadores" >
  <label for="descripcion">Más descripciones:</label>
  <textarea id="descripcion" name="descripcion" rows="4" cols="50"></textarea>
  </section>

  <section class="separadores" >
  <label for="imagen">Cargar imagen:</label>
  <input type="file" id="imagen" name="imagen">
  </section>
  </section>
  
  <section class="sep">
  <input type="submit" name='enviar' value="Enviar" id="enviar">
  </section>
</form>
</article>

</div>



<footer class="Realiza_foo" >
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