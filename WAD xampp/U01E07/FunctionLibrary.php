<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function searchFilaArrayBi($array, $x) {
            if (isset($array[$x])) {
                return $array[$x];
            }
            return null; 
        }

        function searchColumnaArrayBi($array, $y) {
            $column = [];
            foreach ($array as $row) {
                if (isset($row[$y])) {
                    $column[] = $row[$y];
                }
            }
            return $column; 
        }

        function positionArrayBi($array, $element) {
            foreach ($array as $rowIndex => $row) {
                foreach ($row as $colIndex => $value) {
                    if ($value === $element) {
                        return [$rowIndex, $colIndex];
                    }
                }
            }
            return [-1, -1];
        }

    ?>
</body>
</html>