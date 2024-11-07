<?php
session_start();
$_SESSION["Jumper"] = $_POST["Jumper"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Sesiones</title>
</head>
<body>
<table>
    <tr>
        <th>Jeans</th>
    </tr>

    <tr>
        <td>Corteiz</td>
    </tr>

    <tr>
        <td>Dickies</td>
    </tr>

    <tr>
        <td>Shein</td>
    </tr>
</table>
<br>
        
    
    <form action="Session4.php" method="post">
        <label for= "Jeans" > Select a Jean: </label>
        <input type="text" id="Jeans" name="Jeans"></input>
        <input type="submit" value="submit"></input>
    </form>
  
</body>
</html>