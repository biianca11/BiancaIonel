<?php
session_start();
$_SESSION["T-shirt"] = $_POST["T-shirt"];
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
        <th>Jumpers</th>
    </tr>

    <tr>
        <td>Scuffers</td>
    </tr>

    <tr>
        <td>White Fox</td>
    </tr>

    <tr>
        <td>Denim & Tears</td>
    </tr>
</table>
<br>
        
    
    <form action="Session3.php" method="post">
        <label for= "Jumper" > Select a T-shirt: </label>
        <input type="text" id="Jumper" name="Jumper"></input>
        <input type="submit" value="submit"></input>
    </form>
 
</body>
</html>