<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $text = "Jules Gabriel Verne, known in Spanish-speaking countries such as Jules Verne (Nantes, Kingdom of France, February 8, 1828-Amiens, Third French Republic, March 24, 1905) was a writer, poet and playwright French famous for his novels adventure and its profound influence on the literary genre of science fiction.​";
    
    foreach(count_chars($text,1) as $i => $val) {
        echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    }
    echo "<br><br><br><br><br>";
    foreach(count_chars(trim($text),1) as $i => $val ) {
        if ( chr($i) == " ") {
            echo "There were $val instance(s) of \"space\" in the string.\n";
        }
    }
    echo "<br><br><br><br><br>";
    echo(str_replace("e","", $text));
    
    ?>
</body>
</html>