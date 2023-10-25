<!-- Write a PHP script that applies a user-defined function to all elements of an array using
the array_map() function. -->

<?php

function square($number) {
    return $number * $number;
}


$numbers = [1, 2, 3, 4, 5];


$squaredNumbers = array_map('square', $numbers);

// Print the resulting array
print_r($squaredNumbers);
?>

