<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $numbers= [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50];
        $total=0;
        $totalNum= 0;

        for ($i= 0; $i< count($numbers); $i++) {
            if (($i%2)==0) {
                $total=$total + $numbers[$i];
                $totalNum++;
            }
        }

        $average= $total/$totalNum;
        echo "The average is: " . $average;
    ?>
    
</body>
</html>