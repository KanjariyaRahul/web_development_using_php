<!-- Write a PHP script to extract the values from an associative array using the array_values()
function. -->

<?php

$student = array(
    "first_name" => "Rahul",
    "last_name" => "Kanjariya",
    "age" => 20,
    "email" => "rahulkanjariya9265@example.com"
);

$keys = array_values($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>