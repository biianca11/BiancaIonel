<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="username">Enter your username:</label>
        <input type="text" name="username" id="username" value="<?php echo $default_name; ?>" required>
        <button type="submit">Submit</button>
    </form>



<?php
// Configuración de parámetros
$valid_users = ["Alice", "Bob", "Charlie", "Dave", "Eve"]; // Lista de usuarios válidos
$cookie_name = "user"; // Nombre de la cookie
$cookie_duration = 2 * 24 * 60 * 60; // Duración de la cookie en segundos (2 días)

// Función para mostrar el formulario con el nombre de usuario precargado si existe la cookie
function displayLoginForm($default_name = "") {
    echo '<form method="POST">
            <label for="username">Introduce tu nombre de usuario:</label>
            <input type="text" name="username" id="username" value="' . htmlspecialchars($default_name) . '" required>
            <button type="submit">Enviar</button>
          </form>';
}

// Manejo de solicitud de cierre de sesión
if (isset($_POST['logout'])) {
    setcookie($cookie_name, "", time() - 3600); // Expira la cookie en el pasado para eliminarla
    unset($_COOKIE[$cookie_name]); // Reflejar la eliminación en la variable $_COOKIE
    displayLoginForm(); // Mostrar formulario vacío después de cerrar sesión
    exit;
}

// Verificación de envío del formulario para iniciar sesión
if (isset($_POST['username'])) {
    $username = htmlspecialchars(trim($_POST['username'])); // Sanitizar el nombre de usuario

    if (in_array($username, $valid_users)) { // Validar el nombre de usuario
        // Si la cookie no existe o el usuario es diferente, crear o actualizar la cookie
        if (!isset($_COOKIE[$cookie_name]) || $_COOKIE[$cookie_name] !== $username) {
            setcookie($cookie_name, $username, time() + $cookie_duration, "/");
            $_COOKIE[$cookie_name] = $username; // Actualizar el valor en $_COOKIE
        }
        
        // Mostrar mensaje de bienvenida y botón de cierre de sesión
        echo "<h2>Bienvenido, $username!</h2>";
        echo '<form method="POST"><button type="submit" name="logout">Cerrar sesión</button></form>';
        exit;
    } else {
        // Usuario incorrecto: mostrar el formulario y mensaje de error
        echo "<p style='color:red;'>Usuario incorrecto. Por favor, inténtalo de nuevo.</p>";
        displayLoginForm(); // Mostrar formulario vacío
        exit;
    }
}

// Si el usuario accede por primera vez o ya existe una cookie, mostrar el formulario
$default_name = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : ""; // Nombre precargado si la cookie existe
displayLoginForm($default_name); // Mostrar el formulario
?>
</body>
</html>