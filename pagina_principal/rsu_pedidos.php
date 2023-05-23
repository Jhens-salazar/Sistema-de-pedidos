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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Estilos/pedidos_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>

<body id="body_pedidos" >

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
</div>

</header>
    
<h1 class="hac" >Pedidos</h1>


<article class="form">
<table class="tabla" >
                <tr class="tr" >
                    <th class="th" >ID</th>
                    <th class="th" >Tipo de mueble</th>
                    <th class="th" >Color</th>
                    <th class="th" >Tipo de pintura</th>
                    <th class="th" >Medidas</th>
                    <th class="th" >Dirección</th>
                    <th class="th" >Ciudad</th>
                    <th class="th" >Departamento</th>
                    <th class="th" >Teléfono</th>
                    <th class="th" >Descripción</th>
                    <th class="th" >Imagen</th>
                    <th class="th" >Fecha</th>
                    <!-- Agregar más columnas según tu necesidad -->
                </tr>

                <?php
                // Consulta para obtener los pedidos
                $sql = "SELECT * FROM pedidos";
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
                        echo "<td>" . $row["fecha"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>No se encontraron pedidos.</td></tr>";
                }
                ?>
            </table>

</article>
 

<footer class="footer_inicio" >
    <h4>Copyright© Carpinteria los borugos</h4>
    <h4>Florencia-Caqueta</h4>
    <h4>3124263009</h4>
    
</footer>
</body>
</html>
<?php
// Cerrar la conexión
$conn->close();
?>