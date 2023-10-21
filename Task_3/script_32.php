<!-- Write a PHP script to merge two arrays using the array_merge() function and display the
combined result. -->

<?php

$array1 = array(1, 2, 3);

$array2 = array(4, 5, 6);

$mergedArray = array_merge($array1, $array2);

echo "Merged Array: ";

print_r($mergedArray);

?>