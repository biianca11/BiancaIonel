<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1=[];
    $n2=[];
    for($i= 0;$i< 300;$i++){
        $n1[$i] = random_int (min:0,max:100);
        $n2[$i] = random_int (min:0,max:100);
    }
    print_r(value: $n1);
    echo"<br>";
    print_r(value: $n2);
    echo "<br>";
    $result= array_diff(array:$n1, arrays: $n2);
    print_r(value: $result);
    echo"<br>";
    for($i= 0;$i< count(value: $result);$i++){
        echo "$result [$i] don't appear <br>";
    }
    ?>
</body>
</html>