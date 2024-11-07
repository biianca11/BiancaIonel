<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  
  $N = 100; 
  $sum = 0; 
    
  for ($i = 1; $i <= $N; $i++)  
      $sum = $sum + $i; 
        
  echo "Sum of first " . $N .  
      " Natural Numbers : " . $sum; 
    
  ?>
</body>
</html>