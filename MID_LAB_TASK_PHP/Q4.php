<?php
echo "Q4 <br><br>";
function largest($x, $y, $z) {
    $max = $x;
  
    if ($x >= $y && $x >= $z)
      $max = $x;
    if ($y >= $x && $y >= $z)
      $max = $y;
    if ($z >= $x && $z >= $y)
      $max = $z;
    
    echo "Largest number in $x, $y, $z is: $max\n";
  }
  largest(100, 50, 25);
?>