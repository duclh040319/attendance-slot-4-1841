<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <?php
        function caculate($width, $height) {
            $areaOfRetangle = $width * $height;
            return "A retangle of width $width and height $height has an area of $areaOfRetangle.";
        }

        echo caculate(5,6);
        
    ?>
</body>
</html>