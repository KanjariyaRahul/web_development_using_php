<!-- Write a PHP script that generates a random number between a specified range using the
rand() function and displays it. -->

<?php

 $min = 1;
 $max = 100;

 $random = rand($min, $max);

 echo "generates a random number between a $min and $max : $random";

?>