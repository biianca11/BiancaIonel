<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Conectar a la BD y luego ya actuo siempre sobre la variable conexion*/
	$conexion = mysqli_connect("localhost","root","","ropa");
	
/* Para seleccionar la bd*/	
	mysqli_select_db($conexion,"ropa") or die ("No se puede seleccionar la BD");
	
/* para detectar errores*/
	if (mysqli_connect_errno()) {
	    printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
	    exit();
	}

/* Devuelve el número de filas del resultado */
?>

<form action="register.php" method="POST">
    <label for="persona">Selecciona Persona:</label>
    <select name="persona" id="persona">
        <?php
        $consulta = "SELECT * FROM persona";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<option value='" . $fila["id"] . "'>" . $fila["nombre"] . "</option>";
        }
        ?>
    </select><br><br>

    <label for="pantalon">Selecciona Pantalón:</label>
    <select name="pantalon" id="pantalon">
        <?php
        
        $consulta = "SELECT * FROM pantalon";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<option value='" . $fila["id"] . "'>" . $fila["color"] . " - Talla: " . $fila["talla"] . "</option>";
        }
        
        ?>
    </select><br><br>

    <label for="camiseta">Selecciona Camiseta:</label>
    <select name="camiseta" id="camiseta">
        <?php
       
        $consulta = "SELECT * FROM camiseta";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<option value='" . $fila["id"] . "'>" . $fila["color"] . " - Talla: " . $fila["talla"] . "</option>";
        }
        
        ?>
    </select><br><br>

    <label for="calzado">Selecciona Calzado:</label>
    <select name="calzado" id="calzado">
        <?php
        
        $consulta = "SELECT * FROM calzado";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<option value='" . $fila["id"] . "'>" . $fila["color"] . " - Talla: " . $fila["talla"] . "</option>";
        }
        ?>
    </select><br><br>


    <input type="submit" value="<" name="GoBack" >
	<input type="submit" value="register">
</form>

<?php
if(isset($_POST["GoBack"])) {
    header("Location: index.php");
}    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $persona = $_POST['persona'];
    $pantalon = $_POST['pantalon'];
    $camiseta = $_POST['camiseta'];
    $calzado = $_POST['calzado'];

    if ($persona) {
        $consultaPersona = "SELECT * FROM persona WHERE id = ?";
        $stmtPersona = mysqli_prepare($conexion, $consultaPersona);
        mysqli_stmt_bind_param($stmtPersona, 'i', $persona);
        mysqli_stmt_execute($stmtPersona);
        $resultadoPersona = mysqli_stmt_get_result($stmtPersona);
        if ($row = mysqli_fetch_assoc($resultadoPersona)) {
            $totalPersona = "Persona: " . $row['nombre'];
        }
    }

    if ($pantalon) {
        $query_pantalon = "SELECT * FROM pantalon WHERE id = ?";
        $stmtPantalon = mysqli_prepare($conexion, $consultaPantalon);
        mysqli_stmt_bind_param($stmtPantalon, 'i', $pantalon);
        mysqli_stmt_execute($stmtPantalon);
        $resultadoPantalon = mysqli_stmt_get_result($stmtPantalon);
        if ($row = mysqli_fetch_assoc($resultadoPantalon)) {
            $totalPantalon = "Pantalón: " . $row['color'] . " - Talla: " . $row['talla'];
        }
    }

    if ($camiseta) {
        $consultaCamiseta = "SELECT * FROM camiseta WHERE id = ?";
        $stmtCamiseta = mysqli_prepare($conexion, $consultaCamiseta);
        mysqli_stmt_bind_param($stmtCamiseta, 'i', $camiseta);
        mysqli_stmt_execute($stmtCamiseta);
        $resultadoCamiseta = mysqli_stmt_get_result($stmtCamiseta);
        if ($row = mysqli_fetch_assoc($resultadoCamiseta)) {
            $totalCamiseta = "Camiseta: " . $row['color'] . " - Talla: " . $row['talla'];
        }
    }

    if ($calzado) {
        $consultaCalzado = "SELECT * FROM calzado WHERE id = ?";
        $stmtCalzado = mysqli_prepare($conexion, $consultaCalzado);
        mysqli_stmt_bind_param($stmtCalzado, 'i', $calzado);
        mysqli_stmt_execute($stmtCalzado);
        $resultadoCalzado = mysqli_stmt_get_result($stmtCalzado);
        if ($row = mysqli_fetch_assoc($resultadoCalzado)) {
            $totalCalzado = "Calzado: " . $row['color'] . " - Talla: " . $row['talla'];
        }
    }

    // Verificar que no haya un conjunto registrado
    $consulta = "SELECT * FROM llevar WHERE persona = '$persona'";
    $resultado = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($resultado) == 0) {
        $consulta = "INSERT INTO llevar (fecha, pers, pantalon, camiseta, calzado) VALUES ('$persona', '$pantalon', '$camiseta', '$calzado')";
        if (mysqli_query($conexion, $consulta)) {
            echo "Conjunto registrado con éxito.";
            header("Location: register.php");
        } else {
            echo "Error al registrar el conjunto.";
            
        }
    } else {
        echo "Ya se ha registrado un conjunto para esta persona.";
    }

    
}
mysqli_close($conexion);
?>

</body>
</html>