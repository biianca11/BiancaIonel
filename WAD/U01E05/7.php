<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = "I was born in the year 1632, in the city of York, of a good family, though not of that country, my father being a foreigner of Bremen, who settled first at Hull. He got a good estate by merchandise, and leaving off his trade, lived afterwards at York, from whence he had married my mother, whose relations were named Robinson";
    $wordsArray = explode(' ', $text);
    $uniqueWordsArray = array_unique($wordsArray);
    $compactedArray = array_values($uniqueWordsArray);
    echo "Array de palabras únicas:\n";
    print_r($compactedArray);
    $flippedArray = array_flip($compactedArray);
    echo "\nArray después de array_flip:\n";
    print_r($flippedArray);
    $mergedArray = array_merge($wordsArray, $compactedArray);
    echo "\nArray después de array_merge:\n";
    print_r($mergedArray);
    $intersectedArray = array_intersect_key($wordsArray, array_flip($compactedArray));
    echo "\nArray después de array_intersect_key:\n";
    print_r($intersectedArray);

    
    ?>
</body>
</html>