<?php
// Verificar si ya existen cookies para autocompletar el formulario
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $savedUsername = $_COOKIE['username'];
    $savedPassword = $_COOKIE['password'];
} else {
    $savedUsername = '';
    $savedPassword = '';
}

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Validar usuario y contraseña (esto es solo un ejemplo)
    if ($username == 'admin' && $password == '1234') {
        echo "Bienvenido, $username.";

        // Si la opción 'Recordarme' está marcada, guardar las cookies
        if ($remember) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
            setcookie('password', $password, time() + (86400 * 30), "/");
        } else {
            // Borrar las cookies si no está marcada la opción
            setcookie('username', '', time() - 3600, "/");
            setcookie('password', '', time() - 3600, "/");
        }
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>