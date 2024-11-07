<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" metrhod="POST">
        <input type="text" name="usuario">
        <input type="password" name="contrasena">
        <input type="submit" name="enviar">
    </form>




    <?php
    
    if(isset($_POST['enviar'])) {
        $usuario= $_POST['usuario'];
        $contrasena= $_POST['contrasena'];


        if($usuario == 'admin' AND $contrasena == '1234'){
            $_SESSION['user'] = $usuario;
            setcookie('user', $usuario, time() + ( 2 * 84600));

        }else{
            echo "usuario o contraseña incorrectos";
        }
    }
    ?>
</body>
</html>