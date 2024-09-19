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

$week= "Monday";
switch ($week) {
    case ('Monday'):
        echo "The meal for this day is " . $meals["Monday"];
        break;
        case ('Tuesday'):
            echo "The meal for this day is " . $meals["Tuesday"];
            break;
            case ('Wednesday'):
                echo "The meal for this day is " . $meals["Wednesday"];
                break;
                case ('Thursday'):
                    echo "The meal for this day is " . $meals["Thursday"];
                    break;
                    case ('Friday'):
                        echo "The meal for this day is " . $meals["Friday"];
                        break;
                        case ('Saturday'):
                            echo "The meal for this day is " . $meals["Saturday"];
                            break;
                            case ('Sunday'):
                                echo "The meal for this day is " . $meals["Sunday"];
                                break;
    
    default:
        echo "There's no menu";
        break;
}

?>

</body>
</html>