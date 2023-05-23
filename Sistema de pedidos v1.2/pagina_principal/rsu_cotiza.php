<?php
// Archivo de configuración de la base de datos
$servername = "localhost"; // Cambia localhost por el nombre de tu servidor si es diferente
$username = "root"; // Cambia tu_usuario por tu nombre de usuario de la base de datos
$password = ""; // Cambia tu_contraseña por tu contraseña de la base de datos
$dbname = "sistemadepedidos"; // Cambia nombre_base_de_datos por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/index_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Cotizacion</title>
</head>

<body id="body_cotizacion" >

<section class="principal" >

<header class="header_pagpi">

  <article class="logo_user">
  <img class="logo" src="../imagenes/logo4.png" alt="">
  </article>
    
  <div class="menu1">
    <nav class="menu">
        <ul class="ul" >
            <li class="li" ><a class="a" href="../pagina_principal/index.php">Inicio</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/realizapedido.php">Realiza tu pedido</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/cotizacion.php">Cotización</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/tienda.php">Tienda</a></li>
            <li class="li" ><a class="a" href="../cerrar.php">cerrar sesion</a></li>
        </ul>
</nav>
</div>
    
</header>

<h1 class="hac" >Cotizacion</h1>


<article class="form_cotiza">
<h1 class="re" >Cotización de Mueble</h2>
<table class="tabla_cotiza" >
                <tr class="tr_cotiza" >
                    <th class="th_cotiza" >ID</th>
                    <th class="th_cotiza" >Tipo de mueble</th>
                    <th class="th_cotiza" >Color</th>
                    <th class="th_cotiza" >Tipo de pintura</th>
                    <th class="th_cotiza" >Medidas</th>
                    <th class="th_cotiza" >Dirección</th>
                    <th class="th_cotiza" >Ciudad</th>
                    <th class="th_cotiza" >Departamento</th>
                    <th class="th_cotiza" >Teléfono</th>
                    <th class="th_cotiza" >Descripción</th>
                    <th class="th_cotiza" >Imagen</th>
                    <!-- Agregar más columnas según tu necesidad -->
                </tr>
                <?php
                // Consulta para obtener los pedidos
                $sql = "SELECT * FROM cotizaciones";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar los pedidos en la tabla
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["tipo_mueble"] . "</td>";
                        echo "<td>" . $row["color"] . "</td>";
                        echo "<td>" . $row["tipo_pintura"] . "</td>";
                        echo "<td>" . $row["medidas"] . "</td>";
                        echo "<td>" . $row["direccion"] . "</td>";
                        echo "<td>" . $row["ciudad"] . "</td>";
                        echo "<td>" . $row["departamento"] . "</td>";
                        echo "<td>" . $row["telefono"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>" . $row["imagen"] . "</td>";
                        echo "<td>" . $row["fecha_hora"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>No se encontraron pedidos.</td></tr>";
                }
                ?>
            </table>

</article>
 

<footer class="Realiza_foo" >
    <h4>Copyright© Carpinteria los borugos</h4>
    <h4>Florencia-Caqueta</h4>
    <h4>3124263009</h4>
    
</footer>
    </section>
</body>
</html>
<?php
// Cerrar la conexión
$conn->close();
?>