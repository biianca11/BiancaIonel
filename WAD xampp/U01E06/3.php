<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = "Calle uno,Calle dos,Calle leonardo Da Vinci, Calle Camino de Leganes, Calle final";
    $array = (explode ("Calle", $text) );
    for ($i = 0; $i < count ( $array ); $i ++) {
        echo ucfirst( $array [$i] ). "<br>";
    }





?>
</body>
</html>