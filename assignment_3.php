<?php
function largest($A, $B, $C) 
{
  $max = $A;

  if ($A>= $B && $A >= $C)
    $max = $A;
  if ($B >= $A && $B >= $C)
    $max = $B;
  if ($C >= $A && $C >= $B)
    $max = $C;
  
  echo "Largest number among $A, $B and $C is:---- $max";
}

largest(500,50,30);
?>