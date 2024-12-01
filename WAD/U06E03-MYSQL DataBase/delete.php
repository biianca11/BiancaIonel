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

<h1>Eliminar Calzado por Talla</h1>

    <!-- Formulario para seleccionar el tamaño -->
    <form action="eliminar_calzado.php" method="POST">
        <label for="talla">Selecciona la talla:</label>
        <select name="talla" id="talla" required>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
        </select><br><br>
        <input type="submit" value="<" name="GoBack" >
	    <input type="submit" value="load">
    </form>

<?php
    if(isset($_POST["GoBack"])) {
	    header("Location: index.php");
    }    

?>


