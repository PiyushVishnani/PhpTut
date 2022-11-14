<?php
$side1=52;
$side2=28;
$side3=54;
$semi_peri=($side1+$side2+$side3)/2;
$area=sqrt($semi_peri*($semi_peri-$side1)*($semi_peri-$side2)*($semi_peri-$side3));
echo "$area";
?>