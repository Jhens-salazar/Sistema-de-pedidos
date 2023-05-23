<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebles</title>
    <link rel="stylesheet" href="../stilo/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body id="inic" >
<section class="principal" >
    <?php
    include ("../partials/header_pagpri.php")
    ?>
<main class="maine">
    
<nav class="menu">
        <ul class="ul" >
            <li class="li" ><a class="a" href="../pagina_principal/index.php">Inicio</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/rsu_pedidos.php">Pedidos</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/rsu_cotiza.php">Cotización</a></li>
            <li class="li" ><a class="a" href="../pagina_principal/crud_tienda.php">Tienda</a></li>
            <li class="li" ><a class="a" href="../cerrar.php">cerrar sesion</a></li>
        </ul>
</nav>
</main>
<h1 class="hac" >Tienda</h1>
</section>
<br><br><br><br>

<article class="tienda_muebles" >

    <h1>Categorías</h1>

    <ul class="muebles" >

    <section class="sep_mu">

        <li class="li_mu"><a href="?category=armarios" id="armarios"><img src="../imagenes/armario.png"  > Armarios</a></li>

        <li class="li_mu"><a href="?category=cunas" id="cunas"><img src="../imagenes/cuna.png"  > Cunas</a></li>
        </section>
        <br>
        <section class="sep_mu"> 
        <li class="li_mu"><a href="?category=puertas" id="puertas"><img src="../imagenes/puertas.png"  > Puertas</a></li>
        
        <li class="li_mu"><a href="?category=camas" id="camas"><img src="../imagenes/camas.png" > Camas</a></li>
        </section>
        <section class="sep_mu">
        <li class="li_mu"><a href="?category=cocinas" id="cocinas" ><img src="../imagenes/coci.png" > Cocinas en Madera</a></li>
        
        <li class="li_mu"><a href="?category=mesas-sillas" id="ms"><img src="../imagenes/mesasilla.png"  > Mesas y Sillas</a></li>
        </section>
        <section class="sep_mu">
        <li class="li_mu"><a href="?category=juegos-alcobas" id="ja"><img src="../imagenes/ja.png" > Juegos de Alcobas</a></li>
        
        <li class="li_mu"><a href="?category=juegos-salas" id="js"><img src="../imagenes/salas.png"  > Juegos de Salas</a></li>
        </section>
    </ul>

    <?php
        // Array de productos por categoría
        $productos = array(
            'armarios' => array(
                array(
                    'nombre' => 'Armario de madera',
                    'precio' => 200,
                    'medidas' => '100x200x50 cm',
                    'color' => 'Marrón',
                    'tipo_pintura' => 'Barniz',
                    'imagenes' => array('armario1.jpg', 'armario2.jpg', 'armario3.jpg')
                ),
                array(
                    'nombre' => 'Armario de metal',
                    'precio' => 150,
                    'medidas' => '80x180x40 cm',
                    'color' => 'Gris',
                    'tipo_pintura' => 'Pintura en polvo',
                    'imagenes' => array('armario4.jpg', 'armario5.jpg')
                )
            ),
            'cunas' => array(
                array(
                    'nombre' => 'Cuna de madera',
                    'precio' => 120,
                    'medidas' => '120x60 cm',
                    'color' => 'Blanco',
                    'tipo_pintura' => 'Pintura acrílica',
                    'imagenes' => array('cuna1.jpg', 'cuna2.jpg', 'cuna3.jpg')
                ),
                array(
                    'nombre' => 'Cuna de metal',
                    'precio' => 100,
                    'medidas' => '100x50 cm',
                    'color' => 'Plateado',
                    'tipo_pintura' => 'Esmalte',
                    'imagenes' => array('cuna4.jpg', 'cuna5.jpg')
                )
            ),
            // Agregar más categorías y productos aquí
        );
       
        // Obtener la categoría seleccionada
        if (isset($_GET['category']) && array_key_exists($_GET['category'], $productos)) {
            $categoria = $_GET['category'];
            echo '<h2>Productos en ' . ucwords(str_replace('-', ' ', $categoria)) . '</h2>';
            echo '<ul>';
            foreach ($productos[$categoria] as $producto) {
                echo '<li>';
                echo 'Nombre: ' . $producto['nombre'] . '<br>';
                echo 'Precio: $' . $producto['precio'] . '<br>';
                echo 'Medidas: ' . $producto['medidas'] . '<br>';
                echo 'Color: ' . $producto['color'] . '<br>';
                echo 'Tipo de pintura: ' . $producto['tipo_pintura'];
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<h2>Seleccione una categoría</h2>';
        }
    ?>

</article>
<?php
    include ("../partials/footer.php")
    ?>
</body>
</html>