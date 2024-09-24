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
     $avg=0;
     $cont=0;
     $sum=0;
     $studentMarks=[];
     for ($i=0; $i<5; $i++){
         $studentM["maths"]="6";
         $studentM["language"]="6";
         $studentM["science"]="6";
         $studentM["music"]="6";
         $studentMarks[$student[$i]]=$studentM;
     }
     foreach ($studentMarks as $student => $value) {
         $sum+=$studentM['maths'];
         $sum+=$studentM['language'];
         $sum+=$studentM['science'];
         $sum+=$studentM['music'];
         $cont++;
     
     $avg=$sum/$cont;
     echo "the average of " .$studentM. " is " .$avg. "\n";
    }
    ?>
</body>
</html>