<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $meals =[

        "Monday" => "Carbonara",
        "Tuesday" => "Tacos",
        "Wednesday" => "Pizza",
        "Thursday" => "Fish",
        "Friday" => "Shushi",
        "Saturday" => "Salad",
        "Sunday" => "Rice",

    ];


foreach ($meals as $key => $value) {
echo "The day $key you will eat $value <br>";
}

    ?>
    
</body>
</html>