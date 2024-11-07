<?php
session_start();
$_SESSION["Jeans"] = $_POST["Jeans"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "You have slected: ";
    echo $_SESSION["T-shirt"];
    echo "<br>";
    echo $_SESSION["Jumper"];
    echo "<br>";
    echo $_SESSION["Jeans"];
    echo "<br>";
    ?>


</body>
</html>