<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="Session1.php" method="post">
        <label for= "Selec" > Seleccione un producto: </label>
        <select name="T-shirts" id="T-shirt">
            <option value= "Zara"> Zara </option>
            <option value= "Bershka"> Bershka </option>
            <option value= "Pull & Bear"> Pull & Bear </option>
        </select>
    </form>




</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$valid_users = ["Bianca", "Jose", "Julia", "Alex", "Felipe"];
$cookie_name = "user";
$cookie_duration = 2 * 84600;

function displayLoginForm($default_name = "") {
    echo '<form method="POST">
            <label for="username">Introduce your user name: </label>
            <input type="text" name="username" id="username" value="' . htmlspecialchars($default_name) . '" required>
            <label for= "option" > Seleccione un producto: </label>
                <select name="T-shirts" id="T-shirt">
                    <option value= "Zara"> Zara </option>
                    <option value= "Bershka"> Bershka </option>
                    <option value= "Pull & Bear"> Pull & Bear </option>
                </select>
            <button type="submit">Enviar</button>
          </form>';
}
if (isset($_POST['logout'])) {
    setcookie($cookie_name, "", time() - 3600); 
    unset($_COOKIE[$cookie_name]); 
    displayLoginForm();
    exit;
}

if (isset($_POST['username'])) {
    $username = htmlspecialchars(trim($_POST['username'])); 
    $option = ($_POST ['option']);
    if (in_array($username, $valid_users)) { 
        if (!isset($_COOKIE[$cookie_name]) || $_COOKIE[$cookie_name] !== $username) {
            setcookie($cookie_name, $username, time() + $cookie_duration);
            $_COOKIE[$cookie_name] = $username;
        }

        echo "<h2>Welcome, $username!</h2>";
        echo "<h3> You have choosen: $option </h3>";
        echo '<form method="POST"><button type="submit" name="logout">Log out</button></form>';
        exit;

    } else {
       
        echo "<p style='color:red;'>Incorrect user. Please, try again.</p>";
        displayLoginForm();
        exit;
    }
}
$default_name = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : ""; 
displayLoginForm($default_name); 
?>

</body>
>>>>>>> 195711667bda1c17b600c3c539a395949a19746f
</html>