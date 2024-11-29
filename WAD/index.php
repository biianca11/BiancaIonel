<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
<form action="" method="post">
<div class="menu">
	<a href="modify.php"><input type="button" value="Modify Footwear" /></a>
    <a href="login.php"><input type="button" value="Insert Pants" /></a>
	<a href="load.php"><input type="button" value="Load T-shirts" /></a>
	<a href="login.php"><input type="button" value="Delete Footwear" /></a>
</div>
</form>
</body>
</html>