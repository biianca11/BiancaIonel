<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function searchMinimumValue($arr) {
        if (empty($arr)) {
            return null; 
        return min($arr);
        }
    }

    function searchMaximumValue($arr) {
        if (empty($arr)) {
        return null;
        return max($arr);
        }
    }

    function mediaArray($arr) {
        if (empty($arr)) {
        return null;
        }
        return array_sum($arr) / count($arr);
    }

    function isInArray($arr, $value) {
        $position = array_search($value, $arr);
        return ($position !== false) ? $position : -1;
    }
    
    
?>
</body>
</html>