<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $names=["luis","pedro","ramon","ruben","rocio"];
     $surnames= ["gomez","menendez","sanz","garcia","hernandez"];
     $result=array_combine($names,$surnames);
     print _r($result);
    ?>
</body>
</html>