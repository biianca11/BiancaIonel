<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $student=["luis","pedro","ramon","ruben","rocio"];
     $studentMarks=[];
     for ($i=0; $i<5; $i++){
         $studentM["maths"]="6";
         $studentM["language"]="6";
         $studentM["science"]="6";
         $studentM["music"]="6";
         $studentMarks[$student[$i]]=$studentM;
     }
     $student="luis";
     if (isset($studentMarks[$student])) {
        foreach ($studentMarks[$student] as $key => $value) {
            echo "The mark for $key is: " . $value ."<\n";
     }
    }
    else {
        echo "the student don't exist";
    }



    ?>
</body>
</html>