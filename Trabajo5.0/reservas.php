<?php
// Incluye el archivo de conexión a la base de datos
include 'includes/conexion.php';

// Consulta SQL para obtener los datos de la tabla guarderias
$sql = "SELECT nombre_guarderia, direccion, telefono FROM guarderias";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Guarderías</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Reservas de Guarderías</h2>

    <?php
    // Verifica si hay resultados
    if ($result->num_rows > 0) {
        // Muestra los datos en una tabla HTML
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Dirección</th><th>Teléfono</th></tr>";

        // Itera sobre los resultados y muestra cada fila de datos
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["nombre_guarderia"]."</td><td>".$row["direccion"]."</td><td>".$row["telefono"]."</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cierra la conexión
    $conexion->close();
    ?>
</body>
</html>
