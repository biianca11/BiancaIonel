<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Sesiones</title>
</head>
<body>
<?php
if(!isset ($_POST['T-shirt']) && !isset($_POST['Jumper']) && !isset($_POST['Jeans'])){
?>
<form action="SessionOnePage.php" method="post">
        <label for= "T-shirt" > Select a T-shirt: </label>
        <select name="T-shirt" id="T-shirt">
            <option value="Zara"> Zara </option>
            <option value="Bershka"> Bershka </option>
            <option value="Pull & Bear"> Pull & Bear </option>
        </select>
        <input type="submit" value="submit"></input>
</form>
<br>
<?php
}else if (isset ($_POST['T-shirt'])){
    $_SESSION['T-shirt'] = $_POST['T-shirt'];

?>

<form action="SessionOnePage.php" method="post">
        <label for= "Jumper" > Select a Jumper: </label>
        <select name="Jumper" id="Jumper">
            <option value="Scuffers"> Scuffers </option>
            <option value="White Fox"> White Fox </option>
            <option value="Denim & Tears"> Denim & Tears </option>
        </select>
        <input type="submit" value="submit"></input>
</form>
<br>
<?php
}else if (isset ($_POST['Jumper'])){
    $_SESSION['Jumper'] = $_POST['Jumper'];

?>

<form action="SessionOnePage.php" method="post">
        <label for= "Jeans" > Select a Jeans: </label>
        <select name="Jeans" id="Jeans">
            <option value="Corteiz"> Corteiz </option>
            <option value="Dickies"> Dickies </option>
            <option value="Shein"> Shein </option>
        </select>
        <input type="submit" value="submit"></input>
</form>
<br>
<?php
}else if (isset ($_POST['Jeans'])){
    $_SESSION['Jeans'] = $_POST['Jeans'];
}
?>




<?php
if(isset ($_SESSION['T-shirt']) && isset($_SESSION['Jumper']) && isset($_SESSION['Jeans'])){
    echo "You have slected: ";
    echo $_SESSION['T-shirt'];
    echo "<br>";
    echo $_SESSION['Jumper'];
    echo "<br>";
    echo $_SESSION['Jeans'];
    echo "<br>";
}
?>

</body>
</html>