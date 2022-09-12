<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
    $a = 20;
    $b = 10;
    echo "operation using arithemetic operator : <br>";
    echo a+b. "<br>";
    echo a-b. "<br>";
    echo a*b. "<br>";
    echo a/b. "<br>";
    echo a%b. "<br><br><br>";

    echo "operation using comparison operator and logical operator : <br>";
    $c = 50;
    if($a >= $c && $a >= $b) {
        echo $a, " greater number. <br>";
    }
    else if($a >= $b) {
        echo $b, " is greater number. <br>";
    }
    else {
        echo $c, "is greater number. <br>";
    }
?>
</body>
</html>
