<!-- Develop a PHP script to check if a specific value exists in an array using the in_array()
function. -->

<?php

$colors = array("red", "green", "blue", "yellow", "purple");

$valueToCheck = "blue";

if (in_array($valueToCheck, $colors)) {

    echo "Value '$valueToCheck' exists in the array.";

} else {

    echo "Value '$valueToCheck' does not exist in the array.";
}
?>
