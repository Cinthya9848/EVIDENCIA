<?php
$con = mysqli_connect("localhost", "root", "", "alumnos");
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}


$NOMBRE = $_POST['nombre'];
$ID = $_POST['id']; 
$APELLIDOS = $_POST['apellidos'];
$EDAD = $_POST['edad'];


$query = "UPDATE datos SET nombre='$NOMBRE', apellidos='$APELLIDOS', edad='$EDAD' WHERE id_matricula='$ID'";

if (mysqli_query($con, $query)) {
   
    header("Location: actualizar_datos.php");
    exit; 
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}


mysqli_close($con);
?>