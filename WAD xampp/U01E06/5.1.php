<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!function_exists('str_contains')) {
        function str_contains (string $bio1, string $needle): bool {
            return '' === $needle || false !== strpos ($bio1, $needle);
        }
    }
    $bio1="Jules Verne (born February 8, 1828, Nantes, France—died March 24, 1905, Amiens) was a prolific French author whose writings laid much of the foundation of modern science fiction.";
    
    if (str_contains ($bio1, 'French')) {
        echo "The text contains the word French";
    }else {
        echo "the text doesn't contain the word French";
    }
    
    
    
    
    
    
    ?>
</body>
</html>