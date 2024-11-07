<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number= (rand(1,10000));
        $digits= 0;
        if (($number > 0) && ($number < 10)) {
            $digits=1;
        }
            if (($number > 9) && ($number < 100)) {
            $digitos= 2;
        }
        if (($number > 99) && ($number < 1000)) {
            $digits= 3;
        }
        if (($number > 999) && ($number < 10000)) {
            $digits= 4;
        }
        if (($number >= 10000))  {
            $digits= 5;
        }
        echo "<br>";
        echo "This number " .$number. " has " .$digits. " digits";

    ?>
    
</body>
</html>