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
     $total=0;
     foreach ($studentMarks[$student] as $student => $value) {
         $total+= $value;
    }
    $avg=$sum/$cont($studentMarks[$student]);
    echo "the average of $student is " .$avg. "\n";
    ?>
</body>
</html>