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
    $avg_math=0;
    $avg_language=0;
    $avg_science=0;
    $avg_music=0;
    $total_student= count($student);
    $studentMarks=[];
    for ($i=0; $i<5; $i++){
        $studentM["maths"]="6";
        $studentM["language"]="6";
        $studentM["science"]="6";
        $studentM["music"]="6";
        $studentMarks[$student[$i]]=$studentM;
    }
    foreach ($studentMarks as $student => $value) {
        $avg_math+=$value["maths"];
    }
    $avg_math/=$total_student;
    echo "the average of maths is: " .$avg_math;

?>
</body>
</html>