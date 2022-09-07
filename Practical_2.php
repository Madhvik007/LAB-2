<?php
// gettype() function
$var = 123;
echo gettype($var);
echo " ";
$var = 123.45;
echo gettype($var);
echo " ";
$var = "123.45";
echo gettype($var);
echo " ";

// settype() function
$var = 123;
settype($var, "string");
echo gettype($var);
echo " ";
$var = 123.45;
settype($var, "string");
echo gettype($var);
echo " ";
$var = "123.45";
settype($var, "integer");
echo gettype($var);
?>
