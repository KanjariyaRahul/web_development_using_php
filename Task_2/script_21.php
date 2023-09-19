<!-- Script to check if a given number is a palindrome or not and display the result. -->

<?php

$input = 1221;
echo '<br> Input String  : '. $input;

$reverse = strrev($input);
echo '<br> Ouput String  : '. $reverse;
echo "<br>";

if($input == $reverse) {
echo '<br> '.$input.'  is a palindrome';
}
else {
echo '<br>'.$input.' is not a palindrome';
}
?>