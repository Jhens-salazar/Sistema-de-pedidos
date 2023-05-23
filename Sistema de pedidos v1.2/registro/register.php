<?php
include("conexion.php");



if (isset($_POST['registrarme'])) {
    if (
        strlen($_POST['Nombres']) >= 1 &&
        strlen($_POST['Apellidos']) >= 1 &&
        strlen($_POST['Direccion']) >= 1 &&
        strlen($_POST['Ciudad']) >= 1 &&
        strlen($_POST['Departamento']) >= 1 &&
        strlen($_POST['Correo']) >= 1 &&
        strlen($_POST['Contraseña']) >= 1 &&
        strlen($_POST['Conficontra']) >= 1
    ) {

        $Nombres = trim($_POST['Nombres']);
        $Apellidos = trim($_POST['Apellidos']);
        $Direccion = trim($_POST['Direccion']);
        $Ciudad = trim($_POST['Ciudad']);
        $Departamento = trim($_POST['Departamento']);
        $Correo = trim($_POST['Correo']);
        $Contraseña = trim($_POST['Contraseña']);
        $Conficontra = trim($_POST['Conficontra']);
        $fecha = date("d/m/y");
        $rol = 2;
        $consulta = "INSERT INTO usuarios(Nombres, Apellidos, Direccion, Ciudad, Departamento, Correo, Contraseña, Conficontra, Fecha, rol)
                 values('$Nombres','$Apellidos','$Direccion','$Ciudad', '$Departamento','$Correo','$Contraseña', '$Conficontra', '$fecha', '$rol')";
        $resultado = mysqli_query($conn, $consulta);





        if ($resultado) {
            
            echo "<script>window.location='../login.php'</script>";
        } else {
            echo "<script>Swal.fire('Error al completar el registro')</script>";
        }
    } else {
        echo "<script>Swal.fire('Llene todos los campos')</script>";
     
    }
}


?>