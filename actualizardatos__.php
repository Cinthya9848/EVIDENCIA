<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "alumnos");
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$MATRICULA = $_POST['id']; 

$resultado = mysqli_query($con, "SELECT * FROM datos WHERE id_matricula = '$MATRICULA'"); 

if ($resultado === FALSE) { 
    die("Fallo en la consulta: " . mysqli_error($con));
}

echo "<center>";
echo "<form action='Actualizar3_datos.php' method='POST'>"; 
echo "<h1>Editar Datos</h1>";
echo "<table border='0'>";


while($row = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>Matricula:</td>";

    echo "<td><input type='text' name='id' value='" . htmlspecialchars($row['id_matricula']) . "'></td>";
    echo "</tr>"; 
}

echo "</table>"; 
echo "<input type='submit' value='Actualizar'>";
echo "</form>"; 
echo "</center>";


mysqli_close($con);
?>
    echo "<td> Nombre:</td>";
    // Añadir comillas para el atributo value
    echo "<td><input type='text' name='nombre' value='" . $row['nombre'] . "'></td>";
    echo "</tr>"; // Mover cierre de <tr> aquí
    echo "<tr>";
    echo "<td>Apellidos:</td>";
    // Añadir comillas para el atributo value
    echo "<td><input type='text' name='apellidos' value='" . $row['apellidos'] . "'></td>";
    echo "</tr>"; // Mover cierre de <tr> aquí
    echo "<tr>"; // Agregar apertura de <tr> aquí (falta el punto y coma en la línea anterior )
    echo "<td>Edad:</td>";
    // Añadir comillas para el atributo value
    echo "<td><input type='text' name='edad' value='" . $row['edad'] . "'></td>";
    echo "</tr>"; // Mover cierre de <tr> aquí
}

echo "</table>";
mysqli_close($con); // Corrección: punto y coma en lugar de coma
echo "<input type='submit' value='actualizar_datos' />"; // Añadir comillas
echo "</form>";
?>
</body>
</html>