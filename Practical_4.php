<?php

// arithmetic operators
$var1 = 10;
$var2 = 20;
echo $var1 + $var2;
echo " ";
echo $var1 - $var2;
echo " ";
echo $var1 * $var2;
echo " ";
echo $var1 / $var2;
echo " ";
echo $var1 % $var2;
echo " </br>";

// comparison operators 

echo $var1 == $var2;
echo " ";
echo $var1 != $var2;
echo " ";
echo $var1 > $var2;
echo " ";
echo $var1 < $var2;
echo " ";
echo $var1 >= $var2;
echo " ";
echo $var1 <= $var2;
echo " </br>";

// logical operators
 if ($var1 == 10 && $var1 >= $var2) {
    echo "true";
    } else {
    echo "false";
    }
echo " ";
    if ($var1 == 10 || $var1 <= $var2) {
        echo "true";
        } else {
        echo "false";
        }
echo " ";
    if ($var1 == 15 xor $var1 < $var2) {
        echo "true";
        } else {
        echo "false";
        }
echo " ";
    if ($var1 != $var2) {
        echo "true";
        } else {
        echo "false";
        }
?>