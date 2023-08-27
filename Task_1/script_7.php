<!-- Write a PHP script to swap the values of two variables $x and $y using a temporary
variable. Display the swapped values using the echo statement. -->
<?php
$x = 5;
$y = 10; 

// Swap the values using a temporary variable
$temp = $x;
$x = $y;
$y = $temp;

echo "After swapping: x = $x, y = $y";
?>