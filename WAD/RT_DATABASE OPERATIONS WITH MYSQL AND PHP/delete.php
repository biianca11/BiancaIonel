<html>
<head>
    <title>Gestión de Calzado</title>
</head>
<body>
<?php
/* Conexión a la base de datos */
$conexion = mysqli_connect("localhost", "root", "", "ropa");

/* Comprobar conexión */
if (mysqli_connect_errno()) {
    printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
    exit();
}


/* Consulta para mostrar todos los registros */
$resultado = mysqli_query($conexion, "SELECT * FROM calzado");
?>
<h2>Lista de Calzado</h2>
<table style='border: 1px solid black;'>
    <tr>
        <th>ID</th>
        <th>Talla</th>
        <th>Precio</th>
        <th>Marca</th>
        <th>Color</th>
    </tr>
    <?php
    /* Mostrar registros en la tabla */
    if ($resultado) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["talla"] . "</td>";
            echo "<td>" . $fila["precio"] . "</td>";
            echo "<td>" . $fila["marca"] . "</td>";
            echo "<td>" . $fila["color"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay datos disponibles.</td></tr>";
    }
    ?>

</table>
<h1>Gestión de Calzado</h1>
<form method="POST" action="">
    <label for="talla">Selecciona la talla a eliminar:</label>
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
    </select>
    <button type="submit">Eliminar</button>
</form>

<?php
/* Manejo de eliminación */
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["talla"])) {
    $talla = $_POST["talla"];

        //Eliminar los registros de la tabla llevar
        $consultaLlevar = "DELETE FROM llevar WHERE calzado IN (SELECT id FROM calzado WHERE talla = ?)";
        $stmtLlevar = mysqli_prepare($conexion, $consultaLlevar);
        mysqli_stmt_bind_param($stmtLlevar, "i", $talla);
        mysqli_stmt_execute($stmtLlevar);

        // Ahora eliminar los registros de la tabla calzado
        $consultaCalzado = "DELETE FROM calzado WHERE talla = ?";
        $stmtCalzado = mysqli_prepare($conexion, $consultaCalzado);
        mysqli_stmt_bind_param($stmtCalzado, "i", $talla);

        if (mysqli_stmt_execute($stmtCalzado)) {
            $filasEliminadasCalzado = mysqli_stmt_affected_rows($stmtCalzado);
            if ($filasEliminadasCalzado > 0) {
                echo "<p>Se eliminaron $filasEliminadasCalzado registros de la talla $talla en la tabla calzado</p>";
            } else {
                echo "<p>No se encontraron registros para la talla $talla en la tabla calzado</p>";
            }
            } else {
                echo "<p>Error al eliminar registros de calzado: " . mysqli_error($conexion) . "</p>";
            }

}

/* Cerrar la conexión */
mysqli_close($conexion);
?>
</body>
</html>