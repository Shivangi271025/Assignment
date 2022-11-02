<?php

//Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34//


$n1=1;
$n2=0;

for ($i=0;$i<=9;$i++)
 {  
    echo"$n2,";

$sum=$n1+$n2;
$n1=$n2;
$n2=$sum;
 }









?>