<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $text = "Hello world, my name is Bianca!";
     echo chunk_split($text,5,"<br>");
    ?>
</body>
</html>