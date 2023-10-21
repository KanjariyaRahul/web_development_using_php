<!-- Develop a PHP script that uses the array_push() function to add elements to an array and
the array_pop() function to remove elements from the end. -->

<?php

$myArray = array(1,2,);

array_push($myArray, 3, 4, 5);

echo "Array after adding elements : <br> ";

print_r($myArray);
echo "<br><br>";

array_pop($myArray);

echo "Array after removing an element :<br> ";
print_r($myArray);

?>

