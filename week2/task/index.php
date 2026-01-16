<?php

if(!isset($_POST['number1']) || !isset($_POST['number2'])) {
    include 'templates/form.html.php';
}else {

    $input1 = $_POST['number1'];
    $input2 = $_POST['number2'];

    $result = 0;
    $type = "";

    if( isset($_POST['area'])) {
        $result = $input1 * $input2;
        $type = "AREA";
    }
    elseif(isset($_POST['perimeter'])) {
        $result = ($input1 + $input2) * 2;
        $type = "PERIMETER";
    }

    elseif(isset($_POST['average'])) {
        $result = ($input1 + $input2) / 2;
        $type = "AVERAGE";
    }

    elseif( isset($_POST['bmi'])) {
        $result = $input1 / ($input2 * $input2);
        $type = "BMI";
    }


    elseif(isset($_POST['toltalMinute'])) {
        $result = $input1 * 60 + $input2;
        $type = "TOTAL MINUTE";
    }

    elseif( isset($_POST['maxValue'])) {
        $type = "MAX VALUE";
        if($input1 > $input2) {
            $result = $input1;
            return;
        }else {
            $result = $input2;
            return;
        }
    }

    

    include 'templates/result.html.php';
}