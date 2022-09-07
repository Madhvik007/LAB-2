<?php
$eng = 89;
$math = 64;
$sci = 91;
$soc = 73;
$hin = 74;

$total = $eng + $math + $sci + $soc + $hin;

if($total >= 400){
    echo "Grade A";
}
elseif($total >= 350){
    echo "Grade B";
}
elseif($total >= 300){
    echo "Grade C";
}
elseif($total >= 250){
    echo "Grade D";
}
else{
    echo "Grade F";
}
?>