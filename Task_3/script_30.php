<!-- Create a PHP script that removes duplicate values from an array using the array_unique()
function. -->

<?php

$original = array(1, 2, 2, 3, 4, 4, 5);

$unique = array_unique($original);


echo "Original Array: ";

print_r($original);

echo "<br><br>";

echo "Unique Array: ";
print_r($unique);
?>