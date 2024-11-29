<html>
<head>
<title>Ejemplo bases de datos</title>
</head>
<body>
<?php
/* Conectar a la BD y luego ya actuo siempre sobre la variable conexion*/
	$conexion = mysqli_connect("localhost","root","","ropa");
	
/* Para seleccionar la bd*/	
	mysqli_select_db($conexion,"ropa") or die ("No se puede seleccionar la BD");
	
/* Lazo la consulta sobre la BD*/	
	$resultado = mysqli_query($conexion, "select * from calzado");
	
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
	<br>
<form action="modify.php" method="post">
	<input type="text"  name="id" placeholder="id"><br><br>
	<input type="text"  name="talla" placeholder="talla"><br><br>
	<input type="text"  name="precio" placeholder="precio"><br><br>
	<input type="text"  name="marca" placeholder="marca"><br><br>
	<input type="text"  name="color" placeholder="color"><br><br>
   	<input type="submit" value="<" name="GoBack" >
   	<input type="submit" name="Modify" value="Modify" >
</form>

<?php

if(isset($_POST["GoBack"])) {
	header("Location: index.php");
}
if(isset($_POST["Modify"])){

	$id = $_POST['id'];
	echo $id;
	$talla = $_POST['talla'];
	echo $talla;
	$precio = $_POST['precio'];
	echo $precio;
	$marca = $_POST['marca'];
	echo $marca;
	$color = $_POST['color'];
	echo $color;
	$consulta="update calzado set talla='$talla', precio='$precio', marca='$marca', color='$color' where id='$id'";
	$resultado= mysqli_query($conexion, $consulta);
	if($resultado){
		echo "Modificado con exito";
		header ("Location: modify.php");
	}else{
		echo "Error al modificar";
	}
}
	mysqli_close($conexion);
?>
</body>
</html>