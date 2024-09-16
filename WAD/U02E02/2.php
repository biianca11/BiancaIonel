<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$meals = array($days=>'Monday', 'Tuesday' , $food=>'Pasta', 'Chicken');
foreach ($days as $food => $meals) {
echo "The day $days you will eat $meals <br>";
}

    ?>
    
</body>
</html>