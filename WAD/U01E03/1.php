<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $operand1=5;
    $operand2=10;
    $operator="add";
    
   
    switch($operator){
    case "add":
    echo "Answer is: " . ($operand1 + $operand2);
    break; 
    case "subtract":
    echo "Answer is: " . ($operand1 - $operand2);
    break;
    case "times":
    echo "Answer is: " . ($operand1 * $operand2);
    break; 
    case "divide":
    echo "Answer is: " . ($operand1 / $operand2);
    break;
    default:
    echo "incorrect operations"
    }
    ?>
</body>
</html>