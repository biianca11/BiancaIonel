<?php
/* Conectar a la BD y luego ya actuo siempre sobre la variable conexion*/
	$conexion = mysqli_connect("localhost","root","","ropa");
	
/* Para seleccionar la bd*/	
	mysqli_select_db($conexion,"ropa") or die ("No se puede seleccionar la BD");
	
/* Lazo la consulta sobre la BD*/	
	$resultado = mysqli_query($conexion, "select * from pantalon");
	
/* para detectar errores*/
	if (mysqli_connect_errno()) {
	    printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
	    exit();
	}

/* Devuelve el número de filas del resultado */
	$numr = mysqli_num_rows($resultado);
?>
	<table style="border:1px solid black">
		<tr>
			<td>
				id
			</td>
			<td>
				talla
			</td>
			<td>
				precio
			</td>
			<td>
				marca
			</td>
			<td>
				color
			</td>
		</tr>
		<?php
			if($numr > 0){
				for ($i = 0; $i < $numr; $i++){
					echo "<tr>";
/* El resultado es realmente una matriz y voy cogiendo por filas con esa función*/					
					$fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);

/* Para concatenar string utilzo el .*/					
					echo "<td>".$fila["id"]."</td>";
					echo "<td>".$fila["talla"]."</td>";
					echo "<td>".$fila["precio"]."</td>";
					echo "<td>".$fila["marca"]."</td>";
					echo "<td>".$fila["color"]."</td>";
					echo "</tr>";
				}
			}
		?>

	</table>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Pantalón</title>
</head>
<body>
    <h1>Insertar Pantalón</h1>

    <form action="insert.php" method="POST">
	<input type="text"  name="talla" placeholder="talla"><br><br>
	<input type="text"  name="precio" placeholder="precio"><br><br>
	<input type="text"  name="marca" placeholder="marca"><br><br>
	<input type="text"  name="color" placeholder="color"><br><br>
   	<input type="submit" value="<" name="GoBack" >
   	<input type="submit" name="Insert" value="insert"> 
    </form>

<?php
    // Obtener el próximo ID disponible
    $consulta = "SELECT MAX(id) AS max_id FROM pantalon";
    $resultado = mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_assoc($resultado);
    $new_id = $row['max_id'] + 1;

    // Comprobar si se envió el formulario
    if(isset($_POST["GoBack"])) {
	    header("Location: index.php");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $talla = $_POST['talla'];
        $precio = $_POST['precio'];
        $marca = $_POST['marca'];
        $color = $_POST['color'];

       // Validación de datos
       $errores = [];
        
       // Validar talla (debe ser un número entero entre 35 y 46)
       if (!is_numeric($talla) || $talla < 35 || $talla > 46) {
        $errores[] = "La talla debe ser un número entre 35 y 46.";
    }

       // Validar precio (debe ser un número válido)
       if (!is_numeric($precio) || $precio <= 0) {
           $errores[] = "El precio debe ser un número válido y mayor que 0.";
       }

       // Validar marca (debe ser un número entero positivo)
       if (!is_numeric($marca) || $marca <= 0) {
           $errores[] = "La marca debe ser un número entero válido.";
       }

       // Validar color (debe ser texto no vacío)
       if (empty($color)) {
           $errores[] = "El color no puede estar vacío.";
       }

       // Si hay errores, mostrar los mensajes de error y no continuar
       if (count($errores) > 0) {
           foreach ($errores as $error) {
               echo "<p style='color: red;'>$error</p>";
           }
       } else {
           // Si no hay errores, proceder con la inserción
           // Consulta de inserción (sin ID ya que es AUTO_INCREMENT)
           $consulta = "INSERT INTO pantalon (talla, precio, marca, color) VALUES ('$talla', '$precio', '$marca', '$color')";
           $resultado = mysqli_query($conexion, $consulta);

           // Manejo de errores de la base de datos
           if ($resultado) {
               echo "<p style='color: green;'>Pantalón insertado correctamente.</p>";
               // Redirigir a la misma página para refrescar los datos
               header("Location: insert.php");
               exit();
           } else {
               echo "<p style='color: red;'>Error al insertar el pantalón: " . mysqli_error($conexion) . "</p>";
           }
       }
   }

   // Cerrar la conexión a la base de datos
   mysqli_close($conexion);
   ?>
    
</body>
</html>