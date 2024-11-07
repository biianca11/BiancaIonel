<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers=[];
    for ($i=0;$i<3000; $i++) {
        $numbers[$i] = random_int(0,500);
    }
    $result= array_count_values($numbers);
    for ($i= 0;$i< count($result); $i++) {
        echo "Number: $i frequency $result[$i] <br>";
    }
    ?>
</body>
</html>