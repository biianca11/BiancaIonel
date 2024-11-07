<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bio1="Jules Verne (born February 8, 1828, Nantes, France—died March 24, 1905, Amiens) was a prolific French author whose writings laid much of the foundation of modern science fiction.";
    $bio2= "Jules Verne hit his stride as a writer after meeting publisher Pierre-Jules Hetzel, who nurtured many of the works that would comprise the author's Voyages Extraordinaires.";
    
    similar_text ($bio1, $bio2, $percent);

    echo "The similarity between the two texts is $percent %"



    ?>
</body>
</html>