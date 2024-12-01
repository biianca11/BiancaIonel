<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
/* Conectar a la BD y luego ya actuo siempre sobre la variable conexion*/
	$conexion = mysqli_connect("localhost","root","","ropa");
	
/* Para seleccionar la bd*/	
	mysqli_select_db($conexion,"ropa") or die ("No se puede seleccionar la BD");
	
/* Lazo la consulta sobre la BD*/	
	$resultado = mysqli_query($conexion, "select * from camiseta");
	
/* para detectar errores*/
	if (mysqli_connect_errno()) {
	    printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
	    exit();
	}

/* Devuelve el número de filas del resultado */
?>	
	<h1>Cargar Camisetas por Talla</h1>

<!-- Formulario para seleccionar el tamaño -->
<form action="load.php" method="POST">
	<label for="talla">Selecciona la talla:</label>
	<select name="talla" id="talla" required>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select><br><br>
	<input type="submit" value="<" name="GoBack" >
	<input type="submit" value="load">
</form>

<?php
if(isset($_POST["GoBack"])) {
	header("Location: index.php");
}

$talla = isset($_POST['talla']) ? $_POST['talla'] : '';

// Verificar que el tamaño no esté vacío
if (!empty($talla)) {
    /* Llamar a la base de datos para obtener las camisetas de la talla seleccionada */
    $consulta = "SELECT * FROM camiseta WHERE talla = '$talla'";
    $resultado = mysqli_query($conexion, $consulta);

    /* Comprobar si la consulta fue exitosa */
    if ($resultado) {
        $numr = mysqli_num_rows($resultado);
        if ($numr > 0) {
            // Mostrar la tabla con los resultados
            echo "<h2>Camisetas de la talla $talla</h2>";
            echo "<table style='border: 1px solid black;'>";
            echo "<tr>
                    <td>id</td>
                    <td>talla</td>
                    <td>precio</td>
                    <td>marca</td>
                    <td>color</td>
                  </tr>";
            // Iterar sobre los resultados
            while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["talla"] . "</td>";
                echo "<td>" . $fila["precio"] . "</td>";
                echo "<td>" . $fila["marca"] . "</td>";
                echo "<td>" . $fila["color"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Si no se encontraron camisetas para esa talla
            echo "<p>No se encontraron camisetas para la talla seleccionada.</p>";
        }
    } else {
        echo "<p>Error al ejecutar la consulta: " . mysqli_error($conexion) . "</p>";
    }
} else {
    echo "<p>Por favor, selecciona una talla.</p>";
}

/* Cerrar la conexión a la base de datos */
mysqli_close($conexion);
?>
</body>
</html>