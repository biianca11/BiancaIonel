<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $var1=4;
    $var2=1.5;
    $var3='Bianca';
   

    echo "<table border=1 cellspacing=1 cellpadding=1>
    <tr>  
       <td>$var1</td>
       <td>".gettype($var1)."</td>
    </tr> 
    <tr>
    <td>$var2</td> 
    <td>".gettype($var2)."</td>
    </tr> 
     <tr>
    <td>$var3</td> 
    <td>".gettype($var3)."</td>
    </tr> 
    </table>";
?>
</body>
</html>