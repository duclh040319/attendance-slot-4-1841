<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <?php
        $currentMonth = date("F");

        if($currentMonth == "August") {
            echo "It's August so it really hot";
        }
        else {
            echo "Not August, so at least not in the peak of the heat";
        }
        
    ?>
</body>
</html>